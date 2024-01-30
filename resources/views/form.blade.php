@extends('partial.navbar')

@section('container')
<div class="posts">

    <form method="POST" action="{{ route('form-submit') }}">
    @csrf
    <label for="name">Nama: </label>
    <input type="text" id="name" name="name">
    <button type="submit">Submit</button>
    </form>
</div>
@endsection