<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <label for="Foto">
                <input type="file" class="form-control" name="Foto" value="" id="Foto">

                @if (isset($producto->Foto))
                    <img src="{{ asset('storage') . '/' . $producto->Foto }}" width="100px" alt="">
                @endif
                {{-- {!! $errors->first('Foto', '<div class="invalid-feedback">:message</div>') !!} --}}
            </label>
        </div>

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $producto->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''),'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('Precio', $producto->Precio, ['class' => 'form-control' . ($errors->has('Precio') ? ' is-invalid' : ''),'placeholder' => 'Precio']) }}
            {!! $errors->first('Precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
