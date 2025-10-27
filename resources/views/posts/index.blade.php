@extends('layout.app')
@section('title')
    Posts
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Posts</li>
@endsection
@section('content')
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
            <table border="1" class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Konten</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" width="100">
                            </th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">DETAIL</a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">UBAH</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if (count($posts) == 0)
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada data.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>
    </div>
@endsection
