@extends('layouts.base')
@section('title', 'Mypage')

@section('content')
    <p>Hello, Takuro Nagaishi.</p>

    <p>e-Mail Adress: {{ $mail_address }}</p>
    <p>password: {{ $password }}</p>
@endsection