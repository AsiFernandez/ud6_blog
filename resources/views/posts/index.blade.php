@extends('layouts.app')
@section('content')
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Fecha/Hora</th>
        <th>Acciones</th>       
      </tr>
      </thead>
    <tbody>
      @foreach ($posts as $p)
      <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->title}}</td>
        <td>{{date("j/m/Y H:i:s", strtotime($p->published_at))}}</td>
        <td>
        <a title="Ver" href="{{route('post.index', $p->id)}}">Ver Post</a>
        </td>
        <td>
          
          <a title="Editar" href="{{route('post.edit', $p->id)}}">Editar Post</a>
        </td>
        <td>
        <form style="display:inline" action="" method="POST">
        <form style="display:inline" action="{{route('post.destroy',$p->id)}}" method="POST">
           {{ method_field('DELETE') }}
           {{ csrf_field() }}
           <button type="submit" id="delete" style="background: none;padding: 0px;border: none;color:red">
              Eliminar post
            </button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
  </div>
  <!-- /.container -->
  @endsection