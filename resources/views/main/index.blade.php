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
        @if (Auth::check())
        <a class="nav-link" href="#">{{Auth::user()->name}}</a>
        <a class="nav-link" href="/add">投稿</a>
        @else
        <a class="nav-link" href="/login">ログイン</a>
        <a class="nav-link" href="/register">登録</a>
        @endif
        <a class="nav-link" href="/logout">ログアウト</a>
      </div>
    </div>
  </div>
</nav>
@endsection

@section('content')
<div class="card">
  <div class="card-body">
    @foreach ($items as $item)
    <h5 class="card-title">{{$item->user_name}}</h5>
    <p class="card-text">
        {{$item->content}}
    </p>
    @if (!Auth::user())
    {{-- 何も表示しない --}}
    @elseif (Auth::user()->name == $item->user_name)
        <button type="submit" class="dropdown-item del-btn"><a href="/del?id={{$item->id}}">削除</a></button>
    @endif
    <i class="fa-regular fa-heart"></i>
    @endforeach
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