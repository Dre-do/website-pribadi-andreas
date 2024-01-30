@extends('partial.navbar')

@section('container')
<div class="posts">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['judul'] }}</td>
                <td>{{ $item['author'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection