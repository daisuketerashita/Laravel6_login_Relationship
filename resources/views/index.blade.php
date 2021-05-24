@extends('layout')

@section('content')

    <div class="text-right">
      <a href="{{ route('create') }}" class="btn btn-outline-secondary btn-sm mt-4">新規ポストを作成</a>
    </div>

    @foreach ($info_posts as $info_post)
      <div class="card mt-3">
          <div class="card-header text-left">{{$info_post->title}}</div>
          <div class="card-body text-left">
            <p class="text-card">{{$info_post->body}}</p>
            <a class="card-link" href="{{ route('show', ['id'=>$info_post->id])}}">詳細ページへ</a>
          </div>
          <div class="card-footer text-left"> 投稿者 : {{$info_post->user->name}}</div>
      </div>
    @endforeach

@endsection