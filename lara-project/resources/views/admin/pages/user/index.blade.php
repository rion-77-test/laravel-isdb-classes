@extends('admin.layouts.master')

@section('title', 'Users')
{{-- {{ print_r($users) }} --}}
@section('content')
    <x-admin.phead title="Users" subtitle="Manage Items from this this page">
        <a class="btn-custom btn-quick-action btn-custom-secondary" href="{{ route('users.create') }}" type="button">
            <i class="bi bi-plus-lg"></i> Add New
        </a>
    </x-admin.phead>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

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
                                    <a href="{{ route('users.show', ['user' => $item->id]) }}" class="table-btn-action"
                                        title="View details"><i class="bi bi-eye"></i></a>
                                    <a href="{{ route('users.edit', ['user' => $item->id]) }}" class="table-btn-action"
                                        title="Edit row"><i class="bi bi-pencil"></i></a>
                                    {{-- My code --}}
                                    {{-- <button type="submit" class="table-btn-action delete-btn" title="Delete row"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        data-user="{{ json_encode(['user' => $item->id, 'name' => $item->name]) }}"><i
                                            class="bi bi-trash"></i></button> --}}
                                    {{-- Mam's code --}}
                                    <button type="submit" class="table-btn-action delete" title="Delete row"
                                        data-bs-toggle="modal" data-bs-target="#modalDelete" data-id="{{ $item->id }}"
                                        data-name="{{ $item->name }}"><i class="bi bi-trash"></i>
                                    </button>
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

{{-- My Delete Modal --}}
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalText">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form class="delete-form" action="{{ route('users.destroy', ['user' => 0]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}

{{-- My modal script --}}
{{-- @section('script')
    <script>
        const table = document.querySelector('.table-responsive');
        const deleteForm = document.querySelector('.delete-form');
        const modalLabel = document.querySelector('#modalLabel');
        const modalText = document.querySelector('#modalText');
        console.log(deleteForm);

        table.addEventListener('click', (e) => {
            const deleteBtn = e.target.closest('.delete-btn')
            if (!deleteBtn) return;
            const userData = JSON.parse(deleteBtn.dataset.user);
            const deleteRoute = deleteForm.getAttribute("action").replace("0", userData.id);
            console.log(deleteRoute);
            console.log(userData);
            deleteForm.setAttribute("action", deleteRoute);
            modalLabel.innerText = `Delete User ${userData.name}`;
            modalText.innerText = `Do you really want delete ${userData.name}?`;

        })
    </script>
@endsection
 --}}

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

{{-- Mam's Delete Modal --}}
<x-admin.modal id="modalDelete" title="Delete User">
    <div class="text-center">
        <i class="bi bi-trash fs-1 text-danger"></i>
        <p class="mt-2">Are you sure you want to delete this user?</p>
        <span class="fw-bold badge border border-danger text-danger py-2 px-3 name">Mina</span>
        <hr>
        <form method="POST">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-outline-secondary me-1" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</x-admin.modal>

@section('script')
    <script>
        document.querySelectorAll('.delete').forEach(button => {
            button.addEventListener('click', function() {
                let id = this.dataset.id;
                let name = this.dataset.name;
                // alert(id);
                document.querySelector('#modalDelete .name').innerText = name;
                // document.querySelector('#modalDelete form').setAttribute("action",  )
                // document.querySelector('#modalDelete form').action = `users/${id}`;
                document.querySelector('#modalDelete form').action =
                    "{{ route('users.destroy', ['user' => ':id']) }}".replace(':id', id);
            })
        })
    </script>
@endsection
