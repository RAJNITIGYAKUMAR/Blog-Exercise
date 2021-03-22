@extends('layout')
@section('content')
<a href="/" type="button" class="btn btn-outline-primary">Back To Home</a>
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <tr>
    <td>ID</td>
    <td>Title</td>
    <td>Description</td>
    <td>Action</td>
  </tr>
  
  @foreach ($blogs as $item)
  <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->title}}</td>
    <td>{{$item->desc}}</td>
    <td><a href="blog_edit/{{$item->id}}">Edit</a><a href="blog_delete/{{$item->id}}">Delete</a></td>
  </tr>
  @endforeach
</table>
</div>
<div>
 {{ $blogs->links()}}
</div>
<style type="text/css">
.title{
  width:100%;
  margin:10px;
  padding: 3px;
  background:#e0dede;
}
 ul li{
  list-style: none;
 }
  .Allpost{
    /*background:#ffc2c2;*/
  }
</style>
@endsection