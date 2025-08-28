@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
    <div class="position-relative mb-4" style="height:220px;">
        <img src="https://paultan.org/image/2021/03/2021-Perodua-Ativa-Myvi-Axia-Proton-X50-Comparo-15-630x295.jpg" alt="Inventory Header" class="w-100 h-100 object-fit-cover" style="object-fit:cover; border-radius:0;">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center px-4" style="background:rgba(0,0,0,0.35);">
            <h2 class="fw-bold text-white text-center">Vehicles Index</h2>
            <nav aria-label="breadcrumb" class="mb-2 w-100 d-flex justify-content-center">
                <ol class="breadcrumb bg-transparent p-0 m-0 justify-content-center">
                    <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-underline">Home</a></li>
                    <li class="breadcrumb-separator text-white px-2">/</li>
                    <li class="breadcrumb-item"><a href="{{ route('vehicles.index') }}" class="text-white text-decoration-underline">Vehicles</a></li>
                    <li class="breadcrumb-separator text-white px-2">/</li>
                    <li class="breadcrumb-item active text-white" aria-current="page">List</li>
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
                <div class="card-header">{{ __('Vehicles Index') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Model</th>
                                <th>Brand</th>
                                <th>Color</th>
                                <th>license Plate</th>
                                <th>User</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>{{ $vehicle->id }}</td>
                                    <td>{{ $vehicle->name }}</td>
                                    <td>{{ $vehicle->model }}</td>
                                    <td>{{ $vehicle->brand }}</td>
                                    <td>{{ $vehicle->color }}</td>
                                    <td>{{ $vehicle->license_plate }}</td>
                                    <td>{{ $vehicle->user->name }} - {{ $vehicle->user->email }}</td>
                                    <td>
                                        <a href="{{ route('vehicles.show', $vehicle) }}" class="btn btn-info btn-sm">Show</a>
                                        <a href="{{ route('vehicles.edit', $vehicle) }}" class="btn btn-success btn-sm">Edit</a>

                                        <a href="{{ route('vehicles.destroy', $vehicle) }}" 
                                            class="btn btn-danger btn-sm"
                                            onclick="confirm('Are you sure you want to delete this vehicle?') || event.preventDefault();">
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
