@extends('layouts.admin')

@section('content')
<div class="container"><br>
	<h2>Nombre del usuario para editar rol:</h2>
	<h3>{{$user->name}}</h3><br>
	    <form action="{{route('update', $user->id)}}" method="post">
	      @method('PUT')
	      @csrf
	        <select name="rol">
	        	@foreach($rol as $role)
	        		@if($role->name === $user->rol)
	        			<option selected value="{{$r->name}}">{{$role->name}}</option>
	            	@else
	            		<option value="{{$role->name}}">{{$role->name}}</option>
	            	@endif
	            @endforeach
	        </select>
	        <button type="submit">Gudardar</button>
	    </form>
</div>
@endsection 