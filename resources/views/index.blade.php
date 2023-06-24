@extends('layouts.app')
    

    @section('content')
        <h1>this is index,with shared header,footer</h1>
        {{-- {{ print_r(URL('')) }} --}}
        <img src="{{ asset('storage/ave.jpg') }}" width="100" height="100"  alt="">
        {{-- http://127.0.0.1:8000/storage/ave.jpg link của hình ảnh khi sever được chạy --}}
    @endsection