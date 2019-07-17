@extends('layouts.app')

@section('content')
<h3 class="page-title">@lang('quickadmin.servers.title')</h3>
{!! Form::open(['method' => 'POST', 'route' => ['admin.servers.store']]) !!}

<div class="panel panel-default">
<div class="panel-heading">
@lang('quickadmin.qa_create')
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
    @include('admin.servers.categories')
</div>
<div class="panel panel-default">
    @include('admin.servers.data_center')
</div>
<div class="panel panel-default">
    @include('admin.servers.network_management')
</div>
<div class="panel panel-default">
    @include('admin.servers.platform')
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