@extends('layout')

@section('content')

      <div class="card mt-3">
          <div class="card-header text-left">{{$info_post->title}}</div>
          <div class="card-body text-left">{{$info_post->body}}</div>
          <div class="card-footer text-left"> 投稿者 : {{$info_post->user->name}}</div>
      </div>

      @if ($info_post->user_id == $login_user_id)
      <div class="text-right">
          <a href="{{ route('edit', ['id'=>$info_post->id])}}" class="btn btn-outline-secondary btn-sm mt-4">編集</a>
          <a href="{{ route('delete', ['id'=>$info_post->id])}}" class="btn btn-outline-secondary btn-sm mt-4">削除</a>
      </div>
      @endif

@endsection