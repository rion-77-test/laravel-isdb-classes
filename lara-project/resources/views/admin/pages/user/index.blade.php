@extends('admin.layouts.master')

@section('title', 'Users')
{{-- {{ print_r($users) }} --}}
@section('content')
    <x-admin.phead title="Users" subtitle="Manage Items from this this page">
        <a class="btn-custom btn-quick-action btn-custom-secondary" href="{{ route('users.create') }}" type="button">
            <i class="bi bi-plus-lg"></i> Add New
        </a>
    </x-admin.phead>
    <div class="table-card-custom">
        <!-- Header Controls -->
        <div class="table-header-control">
            <!-- Search bar -->
            <div class="table-search-box">
                <i class="bi bi-search table-search-icon"></i>
                <input type="text" class="table-search-input" placeholder="Search orders or products...">
            </div>
            <!-- Action buttons / Filter options -->
            <div class="table-filter-group">
                <div class="dropdown">
                    <button class="btn-table-action dropdown-toggle" type="button" id="dropdownFilterStatus"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-funnel"></i> Status Filter
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownFilterStatus">
                        <li><a class="dropdown-item" href="#">All Statuses</a></li>
                        <li><a class="dropdown-item" href="#">Paid / Success</a></li>
                        <li><a class="dropdown-item" href="#">Processing</a></li>
                        <li><a class="dropdown-item" href="#">Cancelled / Failed</a></li>
                    </ul>
                </div>
                <button class="btn-table-action" type="button">
                    <i class="bi bi-file-earmark-arrow-down"></i> Export
                </button>
            </div>
        </div>

        <!-- Responsive Table Wrapper -->
        <div class="table-responsive">
            <table class="table-custom">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Role</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    @foreach ($users as $item)
                        <tr>

                            <td>{{ $item->id }}</td>
                            <td>
                                <div class="table-user-cell">

                                    <span
                                        class="table-user-avatar bg-brand-lime d-flex align-items-center justify-content-center text-lime fw-bold fs-5">{{ Str::substr($item->name, 0, 1) }}</span>
                                    <div>
                                        <div class="table-user-name">{{ $item->name }}</div>
                                        <div class="table-user-sub">{{ $item->email }}</div>
                                    </div>
                                </div>
                            </td>

                            <td>{{ $item->role }}</td>

                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <a href="{{ route('users.show', ['id' => $item->id]) }}" class="table-btn-action"
                                        title="View details"><i class="bi bi-eye"></i></a>
                                    <a href="{{ route('users.edit', ['id' => $item->id]) }}" class="table-btn-action"
                                        title="Edit row"><i class="bi bi-pencil"></i></a>
                                    <a href="#" class="table-btn-action delete" title="Delete row"><i
                                            class="bi bi-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <!-- Footer Controls / Pagination -->
        <div class="table-footer-control">  

            {{ $users->links() }}

        </div>
    </div>

@endsection

@section('style')
    <style>
        .table-footer-control nav {
            width: 100%;
        }
        .table-footer-control nav div:last-child {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>
@endsection