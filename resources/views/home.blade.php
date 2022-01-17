@extends('layouts.main')

@section('container')
<h1>Halaman home</h1>

<div class="row">
    <div class="col md-6">
<form>
    <label for="date">Tanggal lahir</label>
    <input class="form-control" type="date" placeholder="Default input" aria-label="default input example">
</form>
</div>
@endsection