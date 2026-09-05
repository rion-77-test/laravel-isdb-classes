@extends('admin.layouts.master')

@section('title', 'Users - Details')

@section('content')
    <x-admin.phead title="Users - Details" subtitle="Show details information.">
        <a href="{{ route('users.index') }}" class="btn-custom btn-custom-outline-secondary" type="button">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </x-admin.phead>

    <div class="card">
        <div class="card-body">
             <div class="table-user-cell">
                 <img src="{{ asset('assets/images/user_1.jpg') }}" alt="Eleanor Pena" class="img-fluid rounded-4"
                     onerror="this.src='assets/images/avatar.png'" width="80">
                 <div>
                     <div class="h3">Eleanor Pena</div>
                     <div class="h5 text-muted fw-normal">eleanor.pena@example.com</div>
                 </div>
             </div>
             <hr>
            <p><strong>Name:</strong> </p>
            <p><strong>Email:</strong> </p>
            <p><strong>Role:</strong> </p>
        </div>
    </div>
@endsection