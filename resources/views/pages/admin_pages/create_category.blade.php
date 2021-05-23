@extends('layouts.admin_layout')
@section('title' , 'add category')

@section('content')

<form method="post" action="{{route('categories.store')}}">
<div class="form-groub">
<input class="form-control" type="text" name="name" autofocus="" placeholder="name"  >
</div>
<br>
<input type="submit" class="btn btn-primary" name="">
@csrf	
</form>

@endsection