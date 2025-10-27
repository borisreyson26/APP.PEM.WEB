@extends('layout.app')
@section('title')
    Posts
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Posts</a></li>
    <li class="breadcrumb-item active" aria-current="page">Buat Post</li>
@endsection
@section('content')
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <a href="{{ route('posts.index') }}" class="btn btn-md btn-primary mb-3">KEMBALI</a>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Ups!</strong> Ada beberapa masalah dengan masukan Anda.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group      ">
                    <label class="font-weight-bold">Gambar Post</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Judul Post</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Judul Post">
                </div>
                <div class="form-group          ">
                    <label class="font-weight-bold">Konten Post</label>
                    <textarea class="form-control" name="content" rows="5" placeholder="Masukkan Konten Post"></textarea>
                </div>
                <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
            </form>
        </div>
    </div>
    </div>
@endsection
