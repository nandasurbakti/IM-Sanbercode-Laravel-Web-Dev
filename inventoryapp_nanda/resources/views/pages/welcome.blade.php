@extends('layouts.master')

@section('titleHead', 'Welcome Sanberbook')
@section('title', 'Dashboard')

@section('content')
    <h1>Selamat Datang {{$firstname}} {{$lastname}}</h1>
    <h2>
      Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!
    </h2>
@endsection
