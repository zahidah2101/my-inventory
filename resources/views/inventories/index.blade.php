@extends('layouts.app')

@section('content')
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
                                        <a href="{{ route('inventories.show', $inventory) }}" class="btn btn-info btn-sm">Show</a>
                                        <a href="{{ route('inventories.edit', $inventory) }}" class="btn btn-success btn-sm">Edit</a>

                                        <a href="{{ route('inventories.destroy', $inventory) }}" 
                                            class="btn btn-danger btn-sm"
                                            onclick="confirm('Are you sure you want to delete this inventory?') || event.preventDefault();">
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
