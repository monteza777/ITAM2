<tr data-index="{{ $index }}">
    <td>
    	{!! Form::text('server_details['.$index.'][os_version]', old('server_details['.$index.'][os_version]', isset($field) ? $field->os_version: ''), ['class' => 'form-control','required'=>'rquired']) !!}
    </td>
    <td>
    	{!! Form::text('server_details['.$index.'][brand]', old('server_details['.$index.'][brand]', isset($field) ? $field->brand: ''), ['class' => 'form-control']) !!}
    </td>
    <td>
    	{!! Form::text('server_details['.$index.'][model]', old('server_details['.$index.'][model]', isset($field) ? $field->model: ''), ['class' => 'form-control']) !!}
    </td>
    <td>
    	{!! Form::text('server_details['.$index.'][asset_tag]', old('server_details['.$index.'][asset_tag]', isset($field) ? $field->asset_tag: ''), ['class' => 'form-control']) !!}
    </td>
    <td>
    	{!! Form::text('server_details['.$index.'][license]', old('server_details['.$index.'][license]', isset($field) ? $field->license: ''), ['class' => 'form-control']) !!}
    </td>
    <td>
    	{!! Form::text('server_details['.$index.'][serial]', old('server_details['.$index.'][serial]', isset($field) ? $field->serial: ''), ['class' => 'form-control']) !!}
    </td>
    <td>
    	{!! Form::text('server_details['.$index.'][cpu]', old('server_details['.$index.'][cpu]', isset($field) ? $field->cpu: ''), ['class' => 'form-control']) !!}
    </td>
    <td>
    	{!! Form::text('server_details['.$index.'][ram]', old('server_details['.$index.'][ram]', isset($field) ? $field->ram: ''), ['class' => 'form-control']) !!}
    </td>
    <td>
    	{!! Form::text('server_details['.$index.'][disks_type]', old('server_details['.$index.'][disks_type]', isset($field) ? $field->disks_type: ''), ['class' => 'form-control']) !!}
    </td>
    <td>
    	{!! Form::text('server_details['.$index.'][disks_free_pe]', old('server_details['.$index.'][disks_free_pe]', isset($field) ? $field->disks_free_pe: ''), ['class' => 'form-control']) !!}
    </td>
    
    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('quickadmin.qa_delete')</a>
    </td>
</tr>
