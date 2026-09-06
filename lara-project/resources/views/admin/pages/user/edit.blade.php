@extends('admin.layouts.master')

@section('title', 'User - Edit')

@section('content')
    <x-admin.phead title="Users - Edit" subtitle="Update this information">
        <a class="btn-custom btn-quick-action btn-custom-outline" href="{{ route('users.index') }}" type="button">
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
        <h5 class="card-title mb-4">Basic Fields</h5>

        <form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST">
            @csrf
            @method('PUT')
            
            <!-- Text input -->
            <div class="mb-3">
                <label for="basicText" class="form-label-custom">Name</label>
                <input type="text" name="name" class="form-control-custom" id="basicText" placeholder="Enter username"
                    value="{{ $user->name }}">

                <x-admin.error-msg name="name" />
            </div>

            <!-- Email input -->
            <div class="mb-3">
                <label class="form-label-custom">Email Address</label>
                <input type="text" name="email" class="form-control-custom" placeholder="name@example.com"
                    value="{{ $user->email }}">
                <x-admin.error-msg name="email" />
            </div>

            <!-- Role input -->
            <div class="mb-3">
                <label class="form-label-custom">Role</label>
                <select name="role_id" class="form-select-custom">
                    <option value="0" selected disabled>Select a Role...</option>
                    @foreach ($roles as $item)
                        <option value="{{ $item->id }}" @selected($user->role_id == $item->id)>{{ $item->name }}</option>
                    @endforeach
                </select>
                <x-admin.error-msg name="role_id" />
            </div>

            <div class="mb-3 text-end">
                <button type="submit" class="btn-custom btn-custom-secondary">Save</button>
            </div>
        </form>
    </div>
@endsection
