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
            @foreach(old('server_details', []) as $index => $data)
                @include('admin.servers.server_details_row', [
                    'index' => $index
                ])
            @endforeach
        <tr data-index="">
        <td>
            {!! Form::text('product', old('product'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('organization', old('organization'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('os_version', old('os_version'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('brand', old('brand'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('model', old('model'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('asset_tag', old('asset_tag'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('license', old('license'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('serial', old('serial'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('cpu', old('cpu'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('ram', old('ram'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('disks_type', old('disks_type'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        <td>
            {!! Form::text('disks_free_pe', old('disks_free_pe'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        </td>
        </tr>

            </tbody>
        </table>
    </div>