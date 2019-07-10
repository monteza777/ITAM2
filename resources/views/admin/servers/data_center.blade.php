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
                {!! Form::text('datacenter_link', old('datacenter_link'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('location', old('location'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('rack_unit', old('rack_unit'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('position', old('position'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('pdu_a_position', old('pdu_a_position'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('pdu_b_position', old('pdu_b_position'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('cage_key_code', old('cage_key_code'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            <td>
                {!! Form::text('smarthand_request', old('smarthand_request'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
            </td>
            </tr>

        </tbody>
    </table>
</div>