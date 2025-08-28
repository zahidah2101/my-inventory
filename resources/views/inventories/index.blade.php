@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
    <div class="position-relative mb-4" style="height:220px;">
        <img src="https://www.extensiv.com/hubfs/Skubana/Blog%20Pages/Imported_Blog_Media/Female%20entrepreneur%20holding%20a%20clipboard%20with%20inventory%20list-4.jpg" alt="Inventory Header" class="w-100 h-100 object-fit-cover" style="object-fit:cover; border-radius:0;">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center px-4" style="background:rgba(0,0,0,0.35);">
            <h2 class="fw-bold text-white text-center">Inventories Index</h2>
            <nav aria-label="breadcrumb" class="mb-2 w-100 d-flex justify-content-center">
                <ol class="breadcrumb bg-transparent p-0 m-0 justify-content-center">
                    <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-underline">Home</a></li>
                    <li class="breadcrumb-separator text-white px-2">/</li>
                    <li class="breadcrumb-item"><a href="{{ route('inventories.index') }}" class="text-white text-decoration-underline">Inventories</a></li>
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
                <div class="card-header">{{ __('Inventories Index') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Serial No</th>
                                <th>User</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inventories as $inventory)
                                <tr>
                                    <td>{{ $inventory->id }}</td>
                                    <td>{{ $inventory->name }}</td>
                                    <td>{{ $inventory->quantity }}</td>  
                                    <td>{{ $inventory->price }}</td>
                                    <td>{{ $inventory->serial_no }}</td>
                                    <td>{{ $inventory->user->name }} - {{ $inventory->user->email }}</td>
                                    <td>
                                        @can('view', $inventory)
                                        <a href="{{ route('inventories.show', $inventory) }}" class="btn btn-info btn-sm">Show</a>
                                        @endcan

                                        @can('kemaskini', $inventory)
                                        <a href="{{ route('inventories.edit', $inventory) }}" class="btn btn-success btn-sm">Edit</a>
                                        @endcan

                                        @can('padam', $inventory)
                                        <a href="{{ route('inventories.destroy', $inventory) }}" 
                                            class="btn btn-danger btn-sm"
                                            onclick="confirm('Are you sure you want to delete this inventory?') || event.preventDefault();">
                                            Delete
                                        </a>
                                        @endcan
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
