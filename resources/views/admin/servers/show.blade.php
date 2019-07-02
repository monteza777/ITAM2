@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.servers.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.servers.fields.server_name')</th>
                            <td field-key='title'>{{ $server->server_name }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">Client</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="users">
<table class="table table-bordered table-striped {{ count($server) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.server_details.fields.os_version')</th>
            <th>@lang('quickadmin.server_details.fields.brand')</th>
            <th>@lang('quickadmin.server_details.fields.model')</th>
            <th>@lang('quickadmin.server_details.fields.asset_tag')</th>
            <th>@lang('quickadmin.server_details.fields.license')</th>
            <th>@lang('quickadmin.server_details.fields.serial')</th>
            <th>@lang('quickadmin.server_details.fields.cpu')</th>
            <th>@lang('quickadmin.server_details.fields.ram')</th>
            <th>@lang('quickadmin.server_details.fields.disk_type')</th>
            <th>@lang('quickadmin.server_details.fields.disk_free_pe')</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @if (count($server) > 0)
            @foreach ($server->server_details as $detail)
        <tr data-entry-id="{{ $detail->id }}">
            <td field-key='email'>{{ $detail->os_version }}</td>
            <td field-key='email'>{{ $detail->brand }}</td>
            <td field-key='email'>{{ $detail->model }}</td>
            <td field-key='email'>{{ $detail->asset_tag }}</td>
            <td field-key='email'>{{ $detail->license }}</td>
            <td field-key='email'>{{ $detail->serial }}</td>
            <td field-key='email'>{{ $detail->cpu }}</td>
            <td field-key='email'>{{ $detail->ram }}</td>
            <td field-key='email'>{{ $detail->disks_type }}</td>
            <td field-key='email'>{{ $detail->disks_free_pe }}</td>
            <td>
                @can('user_view')
                <a href="{{ route('admin.servers.show',[$detail->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                @endcan
                @can('user_edit')
                <a href="{{ route('admin.servers.edit',[$detail->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                @endcan
                @can('user_delete')
                {!! Form::open(array(
                    'style' => 'display: inline-block;',
                    'method' => 'DELETE',
                    'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                    'route' => ['admin.servers.destroy', $detail->id])) !!}
                {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
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
            <p>&nbsp;</p>
            <a href="{{ route('admin.servers.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


