@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
    <div class="position-relative mb-4" style="height:220px;">
        <img src="https://www.extensiv.com/hubfs/Skubana/Blog%20Pages/Imported_Blog_Media/Female%20entrepreneur%20holding%20a%20clipboard%20with%20inventory%20list-4.jpg" alt="Inventory Header" class="w-100 h-100 object-fit-cover" style="object-fit:cover; border-radius:0;">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center px-4" style="background:rgba(0,0,0,0.35);">
            <h2 class="fw-bold text-white text-center">Users Index</h2>
            <nav aria-label="breadcrumb" class="mb-2 w-100 d-flex justify-content-center">
                <ol class="breadcrumb bg-transparent p-0 m-0 justify-content-center">
                    <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-underline">Home</a></li>
                    <li class="breadcrumb-separator text-white px-2">/</li>
                    <li class="breadcrumb-item"><a href="{{ route('users_management.index') }}" class="text-white text-decoration-underline">Users Management</a></li>
                    <li class="breadcrumb-separator text-white px-2">/</li>
                    <li class="breadcrumb-item active text-white" aria-current="page">List Users Management</li>
                </ol>
            </nav>
        </div>
    </div>
    <style>
        .breadcrumb-separator {
            display: inline-block;
            font-size: 1.1rem;
            font-weight: 500;
            opacity: 0.8;
        }
    </style>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Users Management Index') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Age</th>
                                <th>Marital Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users_management as $user)
                                <tr>
                                    <td>{{ $users_management->id }}</td>
                                    <td>{{ $users_management->name }}</td>
                                    <td>{{ $users_management->email }}</td>
                                    <td>{{ $users_management->phone }}</td>
                                    <td>{{ $users_management->address }}</td>
                                    <td>{{ $users_management->age }}</td>
                                    <td>{{ $users_management->marital_status }}</td>
                                    <td>
                                        <a href="{{ route('users_management.show', $user) }}" class="btn btn-info btn-sm">Show</a>
                                        <a href="{{ route('users_management.edit', $user) }}" class="btn btn-success btn-sm">Edit</a>

                                        <a href="{{ route('users_management.destroy', $user) }}" 
                                            class="btn btn-danger btn-sm"
                                            onclick="confirm('Are you sure you want to delete this user?') || event.preventDefault();">
                                            Delete
                                        </a>
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
@endsection
