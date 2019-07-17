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
                {!! Form::text('mounted_platforms', old('mounted_platforms'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('sftp_directories', old('sftp_directories'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('sftp_client_pass', old('sftp_client_pass'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            </tr>

        </tbody>
    </table>
</div>