@extends('layouts.app')

@section('content')

<h1 style="font-family: 'Special Elite', cursive; text-decoration: underline; font-weight: bold;">Services</h1>
<h3>These are the following technologies on which you will find projects. If you want to contribute on these topics, simply make an account and write a Blog. You are free to use source code of any of my projects. Technology stacks of the Projects inside Blog section are: <b><i>Android, PHP with MySql, HTML, CSS, JavaScript, Bootstrap, Laravel</i></b> and others.</h3>
<br><br>
{{-- <h2>{{$title}}</h2>
@if(count($services) >0 )
    <ul class="list-group">
        @foreach($services as $service)
        <li class="list-group-item">{{$service}}</li>
        @endforeach
    </ul>
@endif --}}
<div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" style="margin-left: auto; margin-right: auto;display: block;" src="/storage/cover_image/android.png" alt="android_logo" width="200" height="200">
          <h2 style="text-align: center;"><a href="/posts" style="text-decoration: none;">Android</a></h2>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" style="margin-left: auto; margin-right: auto;display: block;" src="/storage/cover_image/web.png" alt="web_logo" width="200" height="200">
          <h2 style="text-align: center;"><a href="/posts" style="text-decoration: none;">Web Development</a></h2>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" style="margin-left: auto; margin-right: auto;display: block;" src="/storage/cover_image/laravel.png" alt="laravel_logo" width="200" height="200">
          <h2 style="text-align: center;"><a href="/posts" style="text-decoration: none;">Laravel</a></h2>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
@endsection
