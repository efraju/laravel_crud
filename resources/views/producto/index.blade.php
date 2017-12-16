@extends('plantilla')

@section('contenido')

<div class="row">
    <div class="col s6 offset-s3">
        <div class="card-panel white">
            <p>
            <h4 class="center-align">Mis grupos</h4>

                    <table class="bordered">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        @foreach($productos as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->nombre_producto}}</td>
                            <td>
                                <a class="btn-floating waves-effect blue darken-2" href="{{route("producto.edit",$p->id)}}">
                                    <i class="material-icons">edit</i>
                                </a>      
                            </td>
                            <td>
                                <form action='{{route('producto.destroy',$p->id)}}' method="post">
                                    {!! method_field('DELETE') !!}
                                    {!! csrf_field() !!}
                                    <button class="btn-floating waves-effect red darken-4" type="submit">
                                         <i class="material-icons">delete</i>
                                    </button>
                                </form>
                            </td>
                        </tr>    
                        @endforeach

                    </table>
            </p>
        </div>
    </div>
</div>


@stop