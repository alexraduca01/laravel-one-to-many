@extends('layouts.app')
@section('content')
    <section class="container text-white py-3">
        <h1>Create new project</h1>
        <form action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="fs-2">Title</label>
                <input type="text" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" name='title' id='title' required maxlength="200" minlength="3">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="fs-2">Body</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex">
                <div>
                    <div class="me-3">
                        <img id="uploadPreview" src="https://via.placeholder.com/300x200" width="100">
                    </div>
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" name='image' id='image'>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="url" class="fs-2">url</label>
                <input type="url" class="form-control @error('url') is-invalid @enderror" value="{{ old('url') }}" name='url' id='url'>
                @error('url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 gap-2 d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Invia</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </section>
@endsection
