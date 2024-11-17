@extends('laye.layout')
@section('name')
<form method="post" action="{{route('prodect.update',$nm->id)}}">
    @csrf
    @method('PUT')
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" placeholder="name" value="{{$nm->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="email" class="form-control" placeholder="Enter email" value="{{$nm->email}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" class="form-control" placeholder="phone" value="{{$nm->phone}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Salare</label>
    <input type="text" name="number" class="form-control" placeholder="salare" value="{{$nm->number}}">
  </div>
  <button type="submit" class="btn btn-primary">Update Data</button>
</form>
@endsection