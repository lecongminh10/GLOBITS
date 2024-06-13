@extends('layouts.app')

@section('title', 'List - Department')
@section('link_query')

    <style>
        .department-row {
            transition: display 0.3s ease;
        }
    </style>

@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">List-Department</h3>
                    <h4 class="card-title mb-0">Company : {{ $nameCompany }}</h4>
                </div>
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
                @endif
            
                <div class="card-body">
                    <div class="listjs-table" id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm-auto">
                                <div>

                                    <a href="/company/{{ $companyId }}/department/create">
                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                            id="create-btn" data-bs-target="#showModal"><i
                                                class="ri-add-line align-bottom me-1"></i> Add</button>
                                    </a>

                                </div>

                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="search-box ms-2">
                                        <input type="text" class="form-control search" placeholder="Search...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive table-card mt-3 mb-1">
                            <table class="table align-middle table-nowrap" id="departmentTable">
                                
                                {{-- sữ dụng components thead --}}
                                @include('components.atoms.table_head', [
                                    'idClassThead' => 'table-light',
                                    'headers' => ['', 'STT', 'Code', 'Name', 'Action'],
                                ])

                                <tbody class="list form-check-all">
                                    @foreach ($departments as $department)
                                        <tr class="parent" data-id="{{ $department->id }}">

                                            <td><button class="btn toggle-child"><i class="ri-arrow-down-s-fill"></i>
                                                </button></td>
                                            <td>{{ $department->id }}</td>
                                            <td>{{ $department->code }}</td>
                                            <td>{{ str_repeat('--', $department->level) }} {{ $department->name }}</td>

                                            <td>
                                                <!-- Nút sửa -->
                                                <a href="/company/{{ $companyId }}/department/{{ $department->id }}">
                                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#showModalEdit">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>
                                                </a>
                                                <!-- Nút xóa -->
                                                <form
                                                    action="/company/{{ $companyId }}/department/{{ $department->id }}/destroy"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Bạn có muốn xóa không')">
                                                        <i class="ri-delete-bin-2-line"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <!-- Duyệt qua các phòng ban con -->
                                        @php
                                            // $parentsChild = \App\Models\Department::getAllDepartment_ID(
                                            //     $department->id,
                                            // );
                                         
                                            $parentsChild = $departmentService->getAllDepartment_ID($department->id);
                                        @endphp
                                        @foreach ($parentsChild as $child)
                                            <tr class="child-of-{{ $department->id }} department-row bg-light "
                                                style="display:none">
                                                <!-- Thông tin của phòng ban con -->
                                                <td></td>
                                                <td></td>

                                                <td>{{ $child->code }}</td>
                                                <td>{{ $child->name }}</td>
                                                <!-- Nút thao tác -->
                                                <td>
                                                    <!-- Nút sửa -->
                                                    <a href="/company/{{ $companyId }}/department/{{ $child->id }}">
                                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#showModalEdit">
                                                            <i class="ri-edit-2-line"></i>
                                                        </button>
                                                    </a>
                                                    <!-- Nút xóa -->
                                                    <form
                                                        action="/company/{{ $companyId }}/department/{{ $child->id }}/destroy"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Bạn có muốn xóa không')">
                                                            <i class="ri-delete-bin-2-line"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        colors="primary:#121331,secondary:#08a88a"
                                        style="width:75px;height:75px"></lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                        orders for you search.</p>
                                </div>
                            </div>
                        </div>

                        {{-- phân trang --}}
                        @include('components.molecules.pagination', ['paginator' => $departments])


                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
@endsection
@section('scripts')
    <script>
        document.querySelectorAll('.toggle-child').forEach(button => {
            button.addEventListener('click', function() {
                const parentRow = this.closest('.parent');
                const parentId = parentRow.dataset.id;
                const childRows = document.querySelectorAll('.child-of-' + parentId);
                childRows.forEach(row => {
                    if (row.style.display === 'none') {
                        row.style.display = '';
                        row.classList.add('department-row');
                    } else {
                        row.style.display = 'none';
                        row.classList.remove('department-row');
                    }
                });
            });
        });
    </script>
@endsection
