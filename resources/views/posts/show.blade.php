@extends('layout.app')
@section('title')
    Posts
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Posts</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detail Post</li>
@endsection

@section('content')
    <div class="card border-0 shadow rounded">
        <div class="card-body">

            <h3 class="font-weight-bold">{{ $post->title }}</h3>
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" width="300">
            <p>{{ $post->content }}</p>
            <a href="{{ route('posts.index') }}" class="btn btn-md btn-primary">KEMBALI</a>

        </div>
    </div>
    </div>
@endsection
