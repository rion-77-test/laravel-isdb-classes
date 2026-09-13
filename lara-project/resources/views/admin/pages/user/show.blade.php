@extends('admin.layouts.master')

@section('title', 'Users - Details')

@section('content')
    <x-admin.phead title="Users - Details" subtitle="Show details information.">
        @if (auth()->user()->role_id != 5)
            <a href="{{ route('users.index') }}" class="btn-custom btn-custom-outline-secondary" type="button">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        @endif
    </x-admin.phead>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-user-cell">
                {{-- <img src="https://i.pravatar.cc/150?img={{ $user->id }}" alt="Eleanor Pena" class="img-fluid rounded-4"
                     onerror="this.src='assets/images/avatar.png'" width="80"> --}}
                <span
                    class="table-user-avatar bg-brand-lime d-flex align-items-center justify-content-center text-lime fw-bold fs-1  p-5">{{ Str::substr($user->name, 0, 1) }}
                </span>
                <div>
                    <div class="h3">{{ $user->name }}</div>
                    <div class="h5 text-muted fw-normal">{{ $user->email }}</div>
                </div>
            </div>
            <hr>
            <p><strong>Name: {{ $user->name }}</strong> </p>
            <p><strong>Email: {{ $user->email }}</strong> </p>
            <p><strong>Role: {{ $user->role }}</strong> </p>
        </div>
    </div>
@endsection
