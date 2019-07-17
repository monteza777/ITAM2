@extends('layouts.app')

@section('content')
<h3 class="page-title">@lang('quickadmin.servers.title')</h3>
{!! Form::model($server, ['method' => 'PUT', 'route' => ['admin.servers.update',$server->id]]) !!}

<div class="panel panel-default">
<div class="panel-heading">
@lang('quickadmin.qa_edit')
</div>

<div class="panel-body">
<div class="row">
    <div class="col-xs-12 form-group">
        {!! Form::label('server_name', trans('quickadmin.servers.fields.server_name').'*', ['class' => 'control-label']) !!}
        {!! Form::text('server_name', old('server_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        <p class="help-block"></p>
        @if($errors->has('server_name'))
            <p class="help-block">
                {{ $errors->first('server_name') }}
            </p>
        @endif
    </div>
</div>
</div>
</div>
<div class="panel panel-default">
   <div class="panel-heading">
    Categories
</div>
<div class="panel-body">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>@lang('quickadmin.server_details.fields.product')</th>
            <th>@lang('quickadmin.server_details.fields.organization')</th>
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
            
        </tr>
        </thead>
        <tbody id="users">
        <tr data-index="">
        <td>
            {!! Form::text('product', old('product',($server->server_details->product)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('organization', old('organization',($server->server_details->organization)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('os_version', old('os_version',($server->server_details->os_version)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('brand', old('brand',($server->server_details->brand)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('model', old('model',($server->server_details->model)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('asset_tag', old('asset_tag',($server->server_details->asset_tag)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('license', old('license',($server->server_details->license)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('serial', old('serial',($server->server_details->serial)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('cpu', old('cpu',($server->server_details->cpu)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('ram', old('ram',($server->server_details->ram)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('disks_type', old('disks_type',($server->server_details->disks_type)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('disks_free_pe', old('disks_free_pe',($server->server_details->disks_free_pe)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        </tr>

            </tbody>
        </table>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
    Data Center
</div>
<div class="panel-body">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>@lang('quickadmin.data_centers.fields.datacenter_link')</th>
            <th>@lang('quickadmin.data_centers.fields.location')</th>
            <th>@lang('quickadmin.data_centers.fields.rack_unit')</th>
            <th>@lang('quickadmin.data_centers.fields.position')</th>
            <th>@lang('quickadmin.data_centers.fields.pdu_a_position')</th>
            <th>@lang('quickadmin.data_centers.fields.pdu_b_position')</th>
            <th>@lang('quickadmin.data_centers.fields.cage_key_code')</th>
            <th>@lang('quickadmin.data_centers.fields.smarthand_request')</th>
        </tr>
        </thead>
        <tbody id="users">
            <tr data-index="">
            <td>
                {!! Form::text('datacenter_link', old('datacenter_link',($server->data_center->datacenter_link)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('location', old('location',($server->data_center->location)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('rack_unit', old('rack_unit',($server->data_center->rack_unit)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('position', old('position',($server->data_center->position)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('pdu_a_position', old('pdu_a_position',($server->data_center->pdu_a_position)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('pdu_b_position', old('pdu_b_position',($server->data_center->pdu_b_position)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('cage_key_code', old('cage_key_code',($server->data_center->cage_key_code)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('smarthand_request', old('smarthand_request',($server->data_center->smarthand_request)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            </tr>

        </tbody>
    </table>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
    Network Management
</div>
<div class="panel-body">
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
        </tr>
        </thead>
        <tbody id="users">
            <tr data-index="">
            <td>
                {!! Form::text('ip_address', old('ip_address',($server->network_management->ip_address)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('remote_console_ip', old('remote_console_ip',($server->network_management->remote_console_ip)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('dns', old('dns',($server->network_management->dns)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('interfaces', old('interfaces',($server->network_management->interfaces)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('eth0', old('eth0',($server->network_management->eth0)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('eth1', old('eth1',($server->network_management->eth1)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('mounted_vips', old('mounted_vips',($server->network_management->mounted_vips)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            </tr>

        </tbody>
    </table>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
    Platform
</div>
<div class="panel-body">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>@lang('quickadmin.platforms.fields.mounted_platforms')</th>
            <th>@lang('quickadmin.platforms.fields.sftp_directories')</th>
            <th>@lang('quickadmin.platforms.fields.sftp_client_pass')</th>
        </tr>
        </thead>
        <tbody id="users">
            <tr data-index="">
            <td>
                {!! Form::text('mounted_platforms', old('mounted_platforms',($server->platform->mounted_platforms)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('sftp_directories', old('sftp_directories',($server->platform->sftp_directories)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('sftp_client_pass', old('sftp_client_pass',($server->platform->sftp_client_pass)), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            </tr>

        </tbody>
    </table>
</div>
</div>

{!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
<a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
{!! Form::close() !!}
@stop

@section('javascript')
@parent

<script type="text/html" id="users-template">
    @include('admin.servers.server_details_row',
            [
                'index' => '_INDEX_',
            ])
           </script > 

        <script>
    $('.add-new').click(function () {
        var tableBody = $(this).parent().find('tbody');
        var template = $('#' + tableBody.attr('id') + '-template').html();
        var lastIndex = parseInt(tableBody.find('tr').last().data('index'));
        if (isNaN(lastIndex)) {
            lastIndex = 0;
        }
        tableBody.append(template.replace(/_INDEX_/g, lastIndex + 1));
        return false;
    });
    $(document).on('click', '.remove', function () {
        var row = $(this).parentsUntil('tr').parent();
        row.remove();
        return false;
    });
    </script>
@stop