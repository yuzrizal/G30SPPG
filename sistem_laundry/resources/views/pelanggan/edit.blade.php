@extends('layouts.main')
@section('content')
<h3>Ubah Pelanggan</h3>
<form method="POST" action="{{ route('pelanggan.update', $pelanggan) }}">
    @method('PUT')
    @include('pelanggan._form')
</form>
@endsection