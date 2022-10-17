@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-5 border-bottom">
        <h1 class="h2">Postingan kamu :</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-primary col-lg-8">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('destroy'))
        <div class="alert alert-success col-lg-8">
            {{ session('destroy') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <!--Memanggil create yang ada di web routes-->
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
        <!-- end --->
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">kategori</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-decoration-none"><span
                                    data-feather="eye"></span> lihat</a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit"
                                class="badge bg-warning text-decoration-none"><span data-feather="edit"></span> edit</a>

                            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('apakah kamu serius untuk menghapus?')"><span
                                        data-feather="x-circle"></span>
                                    Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
