@extends('layouts.app')
@section('content')
    <section class="container text-white">
        <h1 class="text-center pt-3">Category List</h1>
        <div class="container" style="padding-top: 30vh;">
            <div class="row justify-content-between">
                @foreach ($categories as $item)
                    <div class="card p-0 mb-3" style="width: calc(100% / 4 - 20px)">
                        {{-- <img src="" class="card-img-top" alt="{{ $item->title }}"> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('admin.categories.show', $item->slug) }}" class="btn btn-primary">More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
