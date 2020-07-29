@extends('index')
@section('title', 'Tourism') 
@section('content')
<div class="container-fluid">
   <div class="row">
  <div class="container col-12">
     <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://secure.geo-like.com/__raphael/{{ app()->getLocale() }}/liste.html" allowfullscreen></iframe>
</div>
  </div>
</div>
</div>
@endsection