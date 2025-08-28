@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
    <div class="position-relative mb-4" style="height:220px;">
        <img src="https://www.netsuite.co.uk/portal/assets/img/business-articles/inventory-management/social-inventory-list.jpg" alt="Inventory Header" class="w-100 h-100 object-fit-cover" style="object-fit:cover; border-radius:0;">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center px-4" style="background:rgba(0,0,0,0.35);">
            <h2 class="fw-bold text-white text-center">User Index</h2>
            <nav aria-label="breadcrumb" class="mb-2 w-100 d-flex justify-content-center">
                <ol class="breadcrumb bg-transparent p-0 m-0 justify-content-center">
                    <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-underline">Home</a></li>
                    <li class="breadcrumb-separator text-white px-2">/</li>
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}" class="text-white text-decoration-underline">Users</a></li>
                    <li class="breadcrumb-separator text-white px-2">/</li>
                    <li class="breadcrumb-item active text-white" aria-current="page">List</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('User Index') }}</div>


                <div class="card-body">
                   <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>NRIC<th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td> 
                                    <td>{{ $user->nric }}</td>
                    
                                    <td>
                                        <a href="{{ route('users.show',$user) }}" class="btn btn-info btn-sm">Show</a>

                                        <a href="{{ route('users.edit',$user) }}" class="btn btn-success btn-sm">Edit</a>

                                         <a href="{{ route('users.destroy', $user) }}" 
                                            class="btn btn-danger btn-sm"
                                            onclick="confirm('Are you sure you want to delete this vehicle?') || event.preventDefault();">
                                            Delete</a>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection