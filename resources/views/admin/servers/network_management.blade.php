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
                {!! Form::text('ip_address', old('ip_address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('remote_console_ip', old('remote_console_ip'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('dns', old('dns'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('interfaces', old('interfaces'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('eth0', old('eth0'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('eth1', old('eth1'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('mounted_vips', old('mounted_vips'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            </tr>

        </tbody>
    </table>
</div>