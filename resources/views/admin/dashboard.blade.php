@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-white py-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Git</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $item)
                                    <tr>
                                        <td>#{{ $item->id }}</td>
                                        <td><a class="text-white text-decoration-none " href="{{ route('admin.projects.show', $item->slug) }}">{{ $item->title }}</a></td>
                                        <td>{{ $item->body }}</td>
                                        <td>{{ $item->url }}</td>
                                        <td>
                                            <a href="{{ route('admin.projects.edit', $item->slug) }}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
                                            <form action="{{route('admin.projects.destroy', $item->slug)}}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-button btn btn-danger" data-item-title="{{ $item->title }}"><i class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.modal_delete')
@endsection
