@extends('plantilla')

@section('contenido')


<div class="row">
    <div class="col s6 offset-s3">
        <div class="card-panel white">
            <p>
            <h4 class="center-align">Nuevo Producto</h4>
        <form action="{{route('producto.store')}}" method="post">
            {!! csrf_field() !!}
            <input type="text" name="nombre" placeholder="Nombre"/>
            <button class="btn" type="submit">
                Crear
            </button>    
        </form>
        
<br><br>

@if(session()->has("msg"))
    {{session('msg')}}
@endif
</p>
</div>
    </div>
</div> 
@stop
