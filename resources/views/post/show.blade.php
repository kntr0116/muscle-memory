@extends('layouts.mainapp')

@section('header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Muscle Memory</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse show" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
        <a class="nav-link" href="#">マイページ</a>
        <a class="nav-link" href="/add">投稿</a>
        <a class="nav-link" href="/login">ログイン</a>
        <a class="nav-link" href="/register">登録</a>
        <a class="nav-link" href="/logout">ログアウト</a>
      </div>
    </div>
  </div>
</nav>
@endsection

@section('content')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$item->user_name}}</h5>
    <p class="card-text">
        {{$item->content}}
    </p>
    <i class="fa-regular fa-heart"></i>
</div>
</div>
@endsection

@section('footer')
<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">copyright 2022 muscle memory</span>
  </div>
</footer> 
@endsection