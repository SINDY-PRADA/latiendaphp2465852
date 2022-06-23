@extends('layouts.principal')
@section('contenido')

    <form class="col s8" method="POST"
    action="{{ route('productos.store') }}"
    enctype="multipart/form-data"
    >
    @csrf
    @if( session('mensajito') )
   <div class="row">
    <strong>{{session('mensajito') }}</strong
  </div>
    @endif

      <div class="row">
        <div class="col s8">
        <h1 class="blue-text ">Nuevo producto</h1>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input 
          id="Nombre" 
          type="text" 
          class="validate"
          name="nombre">
          <label for="Nombre">
            Nombre del producto</label>
          <strong>{{ $errors->first('nombre') }}</strong>
        </div>
  
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input 
          id="desc" 
          type="text" 
          class="validate"
          name="desc">
          <label for="desc">Descripción</label>
          <strong>{{ $errors->first('desc') }}</strong>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="precio" 
          type="text" 
          class="validate"
          name="precio">
          <label for="precio">Precio</label>
          <strong>{{ $errors->first('precio') }}</strong>
        </div>
      </div>
      <div class="row">
        <div class="col s8 input-field">
          <select name="marca" id="marca">
        <option value="">
            Elija su marca
        </option>
        @foreach($marcas as $marca)
      <option value="{{ $marca->id }}">
        {{ $marca->nombre }}
      </option>
        @endforeach
        </select>
        </label>Elija marca</label>
        
          <strong>{{ $errors->first('desc') }}</strong>
        </div>
        </div>
        <div class="row">
        <div class="col s8 input-field">
        <select name="categoria" id="categoria">
        <option value="">
            Elija la categoria
        </option>
        @foreach($categorias as $categoria)
        <option value="{{ $categoria->id }}">
              {{ $categoria->nombre }}
          </option>
        @endforeach
        </select>
        <label>Elija la categoria</label>
          <strong>{{ $errors->first('categoria') }}</strong>

    </div>
  </div>

      <div class="file">
      <div class="file-field input-field">
      <div class="btn">
        <span>Ingrese Imagen</span>
      <input type="file" name="imagen" multiple>
      </div>

      <div class="file-path-wrapper">
      <input class="file-path-validate"
        type="text"
      placaholder="Upload one or more files">
      </div>
  </div>
 
  <strong>{{ $errors->first('imagen') }}</strong>
  <div>
      <div class="row">
        <button class="btn waves_effect waves_light" type="submit">Guardar</button>
  
    </div>
  </form>

@endsection