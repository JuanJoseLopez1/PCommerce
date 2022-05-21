<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('users_id') }}
            {{ Form::text('users_id', $carrito->users_id, ['class' => 'form-control' . ($errors->has('users_id') ? ' is-invalid' : ''),'placeholder' => 'Users Id']) }}
            {!! $errors->first('users_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('productos_id') }}
            {{ Form::text('productos_id', $carrito->productos_id, ['class' => 'form-control' . ($errors->has('productos_id') ? ' is-invalid' : ''),'placeholder' => 'Productos Id']) }}
            {!! $errors->first('productos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
