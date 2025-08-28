@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Management Show') }}</div>

                <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{ $user_management->name }}" class="form-control" id="name" name="name" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" value="{{ $user_management->email }}" class="form-control" id="email" name="email" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" value="{{ $user_management->phone }}" class="form-control" id="phone" name="phone" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" value="{{ $user_management->address }}" class="form-control" id="address" name="address" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" value="{{ $user_management->age }}" class="form-control" id="age" name="age" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="marital_status" class="form-label">Marital Status</label>
                            <input type="text" value="{{ $user_management->marital_status }}" class="form-control" id="marital_status" name="marital_status" readonly>
                        </div>

                        <a href="{{ route('users_management.index') }}" class="btn btn-secondary">Back to User Index</a>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection