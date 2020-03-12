@extends('layouts.default')

@section('title', 'TODOリスト')

@section('content')

<div class="addPostContainer">
    <h2>新しいToDoを作成する</h2>

    <form method="post" action="{{url('/posts')}}">
        {{ csrf_field() }}
        <p>ToDo名</p>
        <p>
            <input type="text" name="title" placeholder="enter title" value="{{ old('title') }}">
            @if( $errors->has('title') )
            <span class="error">{{ $errors->first('title') }}</span>
            @endif
        </p>

        <p>期限</p>
        <p>
            <input type="text" name="body" placeholder="enter body" value="{{ old('body') }}" id="flatpickr">
            @if( $errors->has('body') )
            <span class="error">{{ $errors->first('body') }}</span>
            @endif
        </p>
        <p>
            <input type="submit" value="ToDoの追加">
        </p>
    </form>
</div>

<div class="listContainer">
    <ul>
        @forelse($posts as $post)
        <li>
            <a href="{{ action('PostsController@show', $post) }}">{{$post->title}}</a>
            <p>期限 : {{$post->body}}</p>
            <p>作成日 : </p>
            <p>ステータス : {{$post->status}}</p>
            <a href="{{ action('PostsController@edit', $post) }}" class="edit">[Edit]</a>
            <a href="#" class="del" data-id="{{ $post->id }}">[x]</a>
            <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{$post->id}}">
                {{ csrf_field() }}
                {{ method_field('delete') }}
            </form>
        </li>
        @empty
        <li>No posts yet</li>
        @endforelse
    </ul>
</div>
<script src="/js/main.js"></script>
@endsection
