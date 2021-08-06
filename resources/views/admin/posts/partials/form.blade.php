<div class="form-group">
    {!! Form::label('name', 'Nombre: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug: ') !!}
    {!! Form::text('slug', null, ['class' => 'form-control disabled', 'placeholder' => 'Ingrese el slug del post', 'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-2 font-weight-normal">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach
    <br>
    @error('tags')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label class="mr-2">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label class="mr-2">
        {!! Form::radio('status', 2, false) !!}
        Publicado
    </label>
    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="row">
    <div class="col">
        @isset ($post->image)
        <img id="picture" src="{{Storage::url($post->image->url)}}" class="img-fluid">
        @else
        <img id="picture"
        src="https://image.freepik.com/vector-gratis/personas-que-buscan-carpeta-pagina-destino_52683-23928.jpg"
        class="img-fluid">
        @endif
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen del post') !!}
            {!! Form::file('file', ['class' => 'form-control-file','accept'=>'image/*']) !!}
        </div>
        @error('file')
            <span class="text-danger">{{$message}}</span>
        @enderror
       <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus hic quasi quidem totam? Enim ipsa, quo quae illum odio sed quis, fuga labore eaque facere placeat repellendus, totam dolorum.</p>
    </div>

</div>
<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    @error('extract')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>