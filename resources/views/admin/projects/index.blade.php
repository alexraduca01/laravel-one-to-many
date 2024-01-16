@extends('layouts.app')
@section('content')
    <section class="container text-white">
        <h1 class="text-center pt-3">Projects List</h1>
        <div class="container" style="padding-top: 30vh;">
            <div class="row justify-content-between">
                @foreach ($projects as $item)
                    <div class="card p-0 mb-3" style="width: calc(100% / 4 - 20px)">
                        {{-- <img src="" class="card-img-top" alt="{{ $item->title }}"> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ substr($item->body,0,30)."..." }}</p>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('admin.projects.show', $item->slug) }}" class="btn btn-primary">More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('partials.modal_delete')
@endsection
