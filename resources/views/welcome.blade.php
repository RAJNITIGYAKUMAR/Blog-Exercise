@extends('layout')
@section('content')
<div class="Allpost container">
  @foreach ($blogs as $item)
  <div class="title">
    <a href="blogtitle/{{$item->id}}"> {{$item->title}}</a>
      <p>{{$item->desc}}</p>
  </div>    
   @endforeach
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