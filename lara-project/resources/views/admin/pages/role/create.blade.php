@extends('admin.layouts.master')

@section('title', 'Role - Create')

@section('content')
    <x-admin.phead title="Roles - Create" subtitle="Create a new role.">
        <a class="btn-custom btn-quick-action btn-custom-outline" href="{{ route('roles.index') }}" type="button">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </x-admin.phead>

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card border-light shadow-sm p-4 h-100">
        <h5 class="card-title mb-4">Role Fields</h5>

        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            
            <!-- Text input -->
            <div class="mb-3">
                <label for="basicText" class="form-label-custom">Name</label>
                <input type="text" name="name" class="form-control-custom" id="basicText" placeholder="Enter username"
                    value="{{ old('name') }}">

                <x-admin.error-msg name="name" />
            </div>

           

            <div class="mb-3 text-end">
                <button type="submit" class="btn-custom btn-custom-secondary">Save</button>
            </div>
        </form>
    </div>
@endsection
