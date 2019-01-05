
    <div class=form-group> 
        {!! Form::label('name', 'Nombre')!!}
        {!! Form::text('name', null, ['class'=>'form-control'])!!}


    {!! Form::label('slug', 'Slug')!!}
    {!! Form::text('slug', null, ['class'=>'form-control'])!!}

    {!! Form::label('description', 'Descripcion')!!}
    {!! Form::text('description', null, ['class'=>'form-control'])!!}

    

    {!! Form::label('avater', 'Avatar')!!}
    {!! Form::file('avatar')!!}
</div>
