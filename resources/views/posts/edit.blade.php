@extends('layout.app')
@section('title')
    Posts
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Posts</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ubah Post</li>
@endsection
@section('content')
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="font-weight-bold">GAMBAR</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                    <!-- error message untuk title -->
                    @error('image')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">JUDUL</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        value="{{ old('title', $post->title) }}" placeholder="Masukkan Judul Post">
                    <!-- error message untuk title -->
                    @error('title')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group      ">
                    <label class="font-weight-bold">KONTEN</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5"
                        placeholder="Masukkan Konten Post">{{ old('content', $post->content) }}</textarea>
                    <!-- error message untuk content -->
                    @error('content')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-md btn-warning">RESET</button>
            </form>
        </div>
    </div>
    </div>
@endsection
