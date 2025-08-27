@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
