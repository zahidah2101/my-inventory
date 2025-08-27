@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicle Edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{ $vehicle->name }}" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="model" class="form-label">Model</label>
                            <input type="text" value="{{ $vehicle->model }}" class="form-control" id="model" name="model" required>
                        </div>

                        <div class="mb-3">
                            <label for="brand" class="form-label">Brand</label>
                            <input type="text" value="{{ $vehicle->brand }}" class="form-control" id="brand" name="brand" required>
                        </div>

                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" value="{{ $vehicle->color }}" class="form-control" id="color" name="color" required>
                        </div>

                        <div class="mb-3">
                            <label for="license_plate" class="form-label">License Plate</label>
                            <input type="text" value="{{ $vehicle->license_plate }}" class="form-control" id="license_plate" name="license_plate" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit Vehicle</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection