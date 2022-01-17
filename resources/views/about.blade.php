@extends('layouts.main')
@section('container')
    
<div class="about text-center mt-4">
    
    <img src="img/{{ $image }}.jpg" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    <h3>{{ $name }}</h3>
    <p> {{ $email }}</p>
    <p>{{ $body }}</p>
    </div>

@endsection

