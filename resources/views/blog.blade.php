@extends('partial.navbar')

@section('container')
        <div class="posts">
        <h2>Blog Manager</h2>

        @if(auth()->check())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @can('accessPost')
            <a href="{{ route('create') }}" class="btn btn-primary mb-3">Tambah Post</a>
        @endcan
                <table class="table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Author</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>Post1</td>
                                <td>Andreas</td>
                                <td>Post pertama</td>
                                <td>
                                    <img src="" alt="Post Image">
                                </td>
                                <td>
                                        <a href="" class="btn btn-primary">Edit</a>


                                        <form action=" method="POST" style="display:inline">

                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Post2</td>
                                <td>Domenico</td>
                                <td>Post Kedua</td>
                                <td>
                                    <img src="" alt="Post Image">
                                </td>
                                <td>
                                        <a href="" class="btn btn-primary">Edit</a>


                                        <form action=" method="POST" style="display:inline">

                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Post3</td>
                                <td>Situmorang</td>
                                <td>Post Ketiga</td>
                                <td>
                                    <img src="" alt="Post Image">
                                </td>
                                <td>
                                        <a href="" class="btn btn-primary">Edit</a>


                                        <form action=" method="POST" style="display:inline">

                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
    </div>
@endsection
