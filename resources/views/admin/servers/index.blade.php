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
                    <th>@lang('quickadmin.qa_updated_at')</th>
                    <th>@lang('quickadmin.qa_action')</th>

                </tr>
            </thead>
            
            <tbody>
              @if (count($servers) > 0)
                    @foreach ($servers as $server)
                  <tr data-entry-id="{{ $server->id }}">
                    @can('user_delete')
                        <td></td>
                    @endcan
                    <td>
                        <button class="btn btn-sm btn-success"
                           type="button" 
                           class="btn btn-primary btn-lg" 
                           data-toggle="modal"
                           data-id="{{$server->id}}"
                           data-title="{{$server->server_name}}"
                           data-product="{{App\ServerDetails::find($server->id)->product}}"
                           data-organization="{{App\ServerDetails::find($server->id)->organization}}"
                           data-os_version="{{App\ServerDetails::find($server->id)->os_version}}"
                           data-brand="{{App\ServerDetails::find($server->id)->brand}}"
                           data-model="{{App\ServerDetails::find($server->id)->model}}"
                           data-asset_tag="{{App\ServerDetails::find($server->id)->asset_tag}}"
                           data-license="{{App\ServerDetails::find($server->id)->license}}"
                           data-serial="{{App\ServerDetails::find($server->id)->serial}}"
                           data-cpu="{{App\ServerDetails::find($server->id)->cpu}}"
                           data-ram="{{App\ServerDetails::find($server->id)->ram}}"
                           data-disks_type="{{App\ServerDetails::find($server->id)->disks_type}}"
                           data-disks_freepe="{{App\ServerDetails::find($server->id)->disks_freepe}}"
                           data-datacenter_link="{{App\DataCenter::find($server->id)->datacenter_link}}"
                           data-location="{{App\DataCenter::find($server->id)->location}}"
                           data-rack_unit="{{App\DataCenter::find($server->id)->rack_unit}}"
                           data-position="{{App\DataCenter::find($server->id)->position}}"
                           data-pdu_a_position="{{App\DataCenter::find($server->id)->pdu_a_position}}"
                           data-pdu_b_position="{{App\DataCenter::find($server->id)->pdu_b_position}}"
                           data-cage_key_code="{{App\DataCenter::find($server->id)->cage_key_code}}"
                           data-smarthand_request="{{App\DataCenter::find($server->id)->smarthand_request}}"
                           data-ip_address="{{App\NetworkManagement::find($server->id)->ip_address}}"
                           data-remote_console_ip="{{App\NetworkManagement::find($server->id)->remote_console_ip}}"
                           data-dns="{{App\NetworkManagement::find($server->id)->dns}}"
                           data-interfaces="{{App\NetworkManagement::find($server->id)->interfaces}}"
                           data-eth0="{{App\NetworkManagement::find($server->id)->eth0}}"
                           data-eth1="{{App\NetworkManagement::find($server->id)->eth1}}"
                           data-mounted_vips="{{App\NetworkManagement::find($server->id)->mounted_vips}}"
                           data-mounted_platforms="{{App\Platform::find($server->id)->mounted_platforms}}"
                           data-sftp_directories="{{App\Platform::find($server->id)->sftp_directories}}"
                           data-sftp_client_pass="{{App\Platform::find($server->id)->sftp_client_pass}}"
                           data-target="#favoritesModal">
                          {{$server->server_name}}
                       </button>
                    </td>
                    <td field-key='email'>{{ $server->created_at->toFormattedDateString() }}</td>
                    <td field-key='email'>{{ $server->updated_at->toFormattedDateString() }}</td>
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
                        {!! Form::submit(trans('quickadmin.qa_soft_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                        {!! Form::close() !!}
                        @endcan
                    </td>
                </tr>
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
            //Network Management
             $("#ip_address").html($(e.relatedTarget).data('ip_address'));
             $("#remote_console_ip").html($(e.relatedTarget).data('remote_console_ip'));
             $("#dns").html($(e.relatedTarget).data('dns'));
             $("#interfaces").html($(e.relatedTarget).data('interfaces'));
             $("#eth0").html($(e.relatedTarget).data('eth0'));
             $("#eth1").html($(e.relatedTarget).data('eth1'));
             $("#mounted_vips").html($(e.relatedTarget).data('mounted_vips'));
             $("#mounted_platforms").html($(e.relatedTarget).data('mounted_platforms'));
             $("#sftp_directories").html($(e.relatedTarget).data('sftp_directories'));
             $("#sftp_client_pass").html($(e.relatedTarget).data('sftp_client_pass'));
        });
    });
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