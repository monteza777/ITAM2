@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.servers.title')</h3>

    @can('user_create')
    <p>
        <a href="{{ route('admin.servers.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($servers) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('user_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan
                        <th>@lang('quickadmin.servers.fields.server_name')</th>
                        <th>@lang('quickadmin.servers.fields.created_date')</th>
                        <th>@lang('quickadmin.qa_action')</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($servers) > 0)
                        @foreach ($servers as $server)
                            @foreach($server->server_details as $detail)
                                @foreach($server->data_center as $dcenter)
                            <tr data-entry-id="{{ $server->id }}">
                                @can('user_delete')
                                    <td></td>
                                @endcan
                                <!-- <td field-key='name'>{{ $server->server_name }}</td> -->
                                <td>
                                    <button class="btn btn-sm btn-success" onsubmit="return checkBlank()"
                                       type="button" 
                                       class="btn btn-primary btn-lg" 
                                       data-toggle="modal"
                                       data-id="{{$server->id}}"
                                       data-title="{{$server->server_name}}"
                                       data-product="{{$detail->product}}"
                                       data-organization="{{$detail->organization}}"
                                       data-os_version="{{$detail->os_version}}"
                                       data-brand="{{$detail->brand}}"
                                       data-model="{{$detail->model}}"
                                       data-asset_tag="{{$detail->asset_tag}}"
                                       data-license="{{$detail->license}}"
                                       data-serial="{{$detail->serial}}"
                                       data-cpu="{{$detail->cpu}}"
                                       data-ram="{{$detail->ram}}"
                                       data-disks_type="{{$detail->disks_type}}"
                                       data-disks_freepe="{{$detail->disks_free_pe}}"
                                       data-target="#favoritesModal">
                                      {{$server->server_name}}
                                       </button>

                                    
                                </td>
                                <td field-key='email'>{{ $server->created_at->toFormattedDateString() }}</td>
                                                                <td>
                                    @can('user_view')
                                    <a href="{{ route('admin.servers.show',[$server->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('user_edit')
                                    <a href="{{ route('admin.servers.edit',[$server->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('user_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.servers.destroy', $server->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                                @endforeach
                            @endforeach
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

<!-- MODAL -->
@include('layouts.modal')

@section('javascript')
    <script>
        $(function() {
            $('#favoritesModal').on("show.bs.modal", function (e) {
                 $("#favoritesModalLabel").html($(e.relatedTarget).data('title'));
                 $("#fav-title").html($(e.relatedTarget).data('title'));
                 $("#product").html($(e.relatedTarget).data('product'));
                 $("#organization").html($(e.relatedTarget).data('organization'));
                 $("#os-version").html($(e.relatedTarget).data('os_version'));
                 $("#brand").html($(e.relatedTarget).data('brand'));
                 $("#model").html($(e.relatedTarget).data('model'));
                 $("#asset-tag").html($(e.relatedTarget).data('asset_tag'));
                 $("#license").html($(e.relatedTarget).data('license'));
                 $("#serial").html($(e.relatedTarget).data('serial'));
                 $("#cpu").html($(e.relatedTarget).data('cpu'));
                 $("#ram").html($(e.relatedTarget).data('ram'));
                 $("#disks-type").html($(e.relatedTarget).data('disks_type'));
                 $("#disks-freepe").html($(e.relatedTarget).data('disks_freepe'));
                 // Data Center
                 $("#datacenter_link").html($(e.relatedTarget).data('datacenter_link'));
                 $("#location").html($(e.relatedTarget).data('location'));
                 $("#rack_unit").html($(e.relatedTarget).data('rack_unit'));
                 $("#position").html($(e.relatedTarget).data('position'));
                 $("#pdu_a_position").html($(e.relatedTarget).data('pdu_a_position'));
                 $("#pdu_b_position").html($(e.relatedTarget).data('pdu_b_position'));
                 $("#cage_key_code").html($(e.relatedTarget).data('cage_key_code'));
                 $("#smarthand_request").html($(e.relatedTarget).data('smarthand_request'));
            });
        });
    </script>
    <script>
        function checkBlank(){
            if(document.getElementById('serial').value == ""){
                console.log('serials is empty');
                return false;
            }
        }
    </script>
@endsection

<!-- END OF MODAL -->
@stop


@section('javascript') 
    <script>
        @can('user_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.servers.mass_destroy') }}';
        @endcan

    </script>
@endsection