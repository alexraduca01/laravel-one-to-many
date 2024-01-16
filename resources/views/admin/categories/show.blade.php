@extends('layouts.app')
@section('content')
    <section class="container text-white py-2">
        <a href="{{ route('admin.categories.index') }}" class="btn btn-primary" style="transform: translateX(-50px)"><i class="fa-solid fa-arrow-left"></i></a>
        <h1>{{ $category->name }}</h1>
    </section>
@endsection
