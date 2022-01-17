@extends('layouts.main')
@section('container')
    
<h1>Data Contributor</h1>
<table class="table table-hover ">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Foto</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; ?>
        @foreach ($contributors as $contributor)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $contributor['nama'] }}</td>            
            <td>{{ $contributor['tempat_lahir'] }}</td>
            <td>{{ $contributor['tanggal_lahir'] }}</td>
            <td>{{ $contributor['image'] }}</td>
            
        </tr>
        <?php $i++; ?>
        @endforeach
    </tbody>
  </table>
@endsection
