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
<div class="panel-heading">
<ul class="nav nav-tabs" role="tablist">
<li class="active"><a href="#categories"data-toggle="tab">Categories</a></li>
<li role="presentation"><a href="#data_center"  data-toggle="tab">Data Center</a></li>
<li role="presentation"><a href="#network_management"  data-toggle="tab">Network Management</a></li>
<li role="presentation"><a href="#platform"  data-toggle="tab">Platform</a></li>
</ul>
</div>
<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="categories">
<table class="table table-bordered table-striped ">
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

<!-- Data Center -->
<div role="tabpanel" class="tab-pane" id="data_center">
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>@lang('quickadmin.data_centers.fields.location')</th>
            <th>@lang('quickadmin.data_centers.fields.rack_unit')</th>
            <th>@lang('quickadmin.data_centers.fields.position')</th>
            <th>@lang('quickadmin.data_centers.fields.pdu_a_position')</th>
            <th>@lang('quickadmin.data_centers.fields.pdu_b_position')</th>
            <th>@lang('quickadmin.data_centers.fields.cage_key_code')</th>
            <th>@lang('quickadmin.data_centers.fields.smarthand_request')</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        
        <tr data-entry-id="{{ $server->data_center->id }}">
            <td>{{ $server->data_center->location }}</td>
            <td>{{ $server->data_center->rack_unit }}</td>
            <td>{{ $server->data_center->position }}</td>
            <td>{{ $server->data_center->pdu_a_position }}</td>
            <td>{{ $server->data_center->pdu_b_position }}</td>
            <td>{{ $server->data_center->cage_key_code }}</td>
            <td>{{ $server->data_center->smarthand_request }}</td>
            <td>
                @can('user_view')
                <a href="{{ route('admin.servers.show',[$server->data_center->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                @endcan
                @can('user_edit')
                <a href="{{ route('admin.servers.edit',[$server->data_center->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                @endcan
                @can('user_delete')
                {!! Form::open(array(
                    'style' => 'display: inline-block;',
                    'method' => 'DELETE',
                    'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                    'route' => ['admin.servers.destroy', $server->data_center->id])) !!}
                {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                {!! Form::close() !!}
                @endcan
            </td>

        </tr>
            
            <tr>
                <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        
    </tbody>
</table>
</div>

<!-- Network Management -->
<div role="tabpanel" class="tab-pane" id="network_management">
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>@lang('quickadmin.network_managements.fields.ip_address')</th>
            <th>@lang('quickadmin.network_managements.fields.remote_console_ip')</th>
            <th>@lang('quickadmin.network_managements.fields.dns')</th>
            <th>@lang('quickadmin.network_managements.fields.interfaces')</th>
            <th>@lang('quickadmin.network_managements.fields.eth0')</th>
            <th>@lang('quickadmin.network_managements.fields.eth1')</th>
            <th>@lang('quickadmin.network_managements.fields.mounted_vips')</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr data-entry-id="{{ $server->network_management->id }}">
            <td field-key='email'>{{ $server->network_management->ip_address }}</td>
            <td field-key='email'>{{ $server->network_management->remote_console_ip }}</td>
            <td field-key='email'>{{ $server->network_management->dns }}</td>
            <td field-key='email'>{{ $server->network_management->interfaces }}</td>
            <td field-key='email'>{{ $server->network_management->eth0 }}</td>
            <td field-key='email'>{{ $server->network_management->eth1 }}</td>
            <td field-key='email'>{{ $server->network_management->mounted_vips }}</td>
            <td>
                @can('user_view')
                <a href="{{ route('admin.servers.show',[$server->network_management->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                @endcan
                @can('user_edit')
                <a href="{{ route('admin.servers.edit',[$server->network_management->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                @endcan
                @can('user_delete')
                {!! Form::open(array(
                    'style' => 'display: inline-block;',
                    'method' => 'DELETE',
                    'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                    'route' => ['admin.servers.destroy', $server->network_management->id])) !!}
                {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                {!! Form::close() !!}
                @endcan
            </td>

        </tr>
            <tr>
                <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
    </tbody>
</table>
</div>

<!-- Platform  -->
<div role="tabpanel" class="tab-pane" id="platform">
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>@lang('quickadmin.platforms.fields.mounted_platforms')</th>
            <th>@lang('quickadmin.platforms.fields.sftp_directories')</th>
            <th>@lang('quickadmin.platforms.fields.sftp_client_pass')</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr data-entry-id="{{ $server->platform->id }}">
            <td field-key='email'>{{ $server->platform->mounted_platforms }}</td>
            <td field-key='email'>{{ $server->platform->sftp_directories }}</td>
            <td field-key='email'>{{ $server->platform->sftp_client_pass }}</td>
            <td>
                @can('user_view')
                <a href="{{ route('admin.servers.show',[$server->platform->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                @endcan
                @can('user_edit')
                <a href="{{ route('admin.servers.edit',[$server->platform->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                @endcan
                @can('user_delete')
                {!! Form::open(array(
                    'style' => 'display: inline-block;',
                    'method' => 'DELETE',
                    'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                    'route' => ['admin.servers.destroy', $server->platform->id])) !!}
                {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                {!! Form::close() !!}
                @endcan
            </td>

        </tr>
            <tr>
                <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
    </tbody>
</table>
</div>
</div>
            <p>&nbsp;</p>
            <a href="{{ route('admin.servers.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


