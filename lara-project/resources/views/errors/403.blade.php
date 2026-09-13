@extends('admin.layouts.single-master')

<!-- Title -->
@section('title','Access Denied')

<!-- Content -->
@section('content')
<div class="login-card text-center">
    
    <!-- Brand Identity -->
    <a href="{{ route('dashboard') }}" class="login-brand text-decoration-none">
        <i class="bi bi-asterisk"></i>
        <span>Spark Admin</span>
    </a>
    
    <!-- Giant 403 header with spinning asterisk Zero -->
    <div class="error-title-huge">
        <span>4</span>
        <i class="bi bi-asterisk"></i>
        <span>3</span>
    </div>
    
    <h2 class="error-subtitle">Access Denied</h2>
    <p class="error-desc">
        You do not have permission to access this page.
    </p>
    
    <div class="error-actions-group">
        <div class="error-actions-group">
            @if (auth()->user()->role_id == 5)
                <a href="{{ route('users.show',['user' => auth()->user()->id]) }}" class="btn-custom btn-custom-primary">
                    <i class="bi bi-person"></i> Back to Profile
                </a>
            @else
                <a href="{{ route('dashboard') }}" class="btn-custom btn-custom-primary">
                    <i class="bi bi-house"></i> Back to Dashboard
                </a>
            @endif
        </div>
    </div>
    
</div>
@endsection