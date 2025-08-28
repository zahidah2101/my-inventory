@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
    <div class="position-relative mb-4" style="height:220px;">
        <img src="https://www.extensiv.com/hubfs/Skubana/Blog%20Pages/Imported_Blog_Media/Female%20entrepreneur%20holding%20a%20clipboard%20with%20inventory%20list-4.jpg" alt="Inventory Header" class="w-100 h-100 object-fit-cover" style="object-fit:cover; border-radius:0;">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center px-4" style="background:rgba(0,0,0,0.35);">
            <h2 class="fw-bold text-white text-center">Posts Index</h2>
            <nav aria-label="breadcrumb" class="mb-2 w-100 d-flex justify-content-center">
                <ol class="breadcrumb bg-transparent p-0 m-0 justify-content-center">
                    <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-underline">Home</a></li>
                    <li class="breadcrumb-separator text-white px-2">/</li>
                    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}" class="text-white text-decoration-underline">Posts</a></li>
                    <li class="breadcrumb-separator text-white px-2">/</li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Posts List</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Posts Index') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
