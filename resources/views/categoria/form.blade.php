<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nomber') }}
            {{ Form::text('nomber', $categoria->nomber, ['class' => 'form-control' . ($errors->has('nomber') ? ' is-invalid' : ''), 'placeholder' => 'Nomber']) }}
            {!! $errors->first('nomber', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>