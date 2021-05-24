@extends('layout')

@section('content')

    <form method="POST" action="{{ route('update',['id'=>$info_post->id]) }}">
      @csrf

        <div>
          <input name="title" class="form-control mt-4" value="{{ $info_post->title}}"></input>
        </div>

        <div>
          <textarea name="body" rows="4" class="form-control text-black-50 mt-4">{{$info_post->body}}</textarea>
        </div>

        <div class="text-right mt-4">
          <button type="submit" class="btn btn-outline-secondary btn-sm">更新</button>
          <a href="{{ route('index') }}" class="btn btn-outline-secondary btn-sm">キャンセル</a>
        </div>

    </form>

@endsection