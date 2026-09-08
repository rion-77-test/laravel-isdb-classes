@extends('admin.layouts.master')

@section('title', 'Products')
{{-- {{ print_r($products) }} --}}
@section('content')
    <x-admin.phead title="Products" subtitle="Manage Items from this this page">
        <a class="btn-custom btn-quick-action btn-custom-secondary" href="{{ route('products.create') }}" type="button">
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
                        <th>Product</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>QTY</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    @foreach ($products as $item)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    @if ($item->image)
                                        <img src="{{ $item->image }}" alt="" class="rounded-3" width="60"
                                            height="60">
                                    @else
                                        <img src="https://picsum.photos/200/{{ $item->id + 300 }}" alt=""
                                            class="rounded-3" width="60" height="60">
                                    @endif
                                    <div>
                                        <h5 class="mb-0 fw-normal">{{ $item->name }}</h5>
                                        <p class="mb-0 text-muted">{{ $item->id }}</p>
                                    </div>
                                </div>
                            </td>


                            <td>
                                @if ($item->category)
                                    {{ $item->category->name }}
                                @endif
                            </td>
                            <td>{{ $item->brand->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>
                                <span
                                    class="badge border {{ $item->active ? 'border-success text-success' : 'border-danger text-danger' }}">{{ $item->active ? 'Active' : 'Inactive' }}</span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <a href="{{ route('users.show', ['user' => $item->id]) }}" class="table-btn-action"
                                        title="View details"><i class="bi bi-eye"></i></a>
                                    <a href="{{ route('users.edit', ['user' => $item->id]) }}" class="table-btn-action"
                                        title="Edit row"><i class="bi bi-pencil"></i></a>

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

            {{-- {{ $users->links() }} --}}

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
                document.querySelector('#modalDelete form').action =
                    "{{ route('users.destroy', ['user' => ':id']) }}".replace(':id', id);
            })
        })
    </script>
@endsection
