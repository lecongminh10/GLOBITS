@extends('layouts.app')

@section('title', 'List - Roles')

@section('content')
    {{-- <div class="row">
        <h3 class="text-center">List-Roles</h3>
        <a href="{{ route('role.create') }}" class="col-1 my-3 btn bg-primary text-white"><i class="bi bi-patch-plus"></i> Add</a>
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>STT</th>
                <th>Role</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->role }}</td>
                    <td>{{ $role->description }}</td>
                    <td>
                        <a href="{{ route('role.edit', $role->id) }}" class="btn btn-primary"><i class="bi bi-pencil"></i> Edit</a>
                        <form action="{{ route('role.destroy', $role->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">List-Roles</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="listjs-table" id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm-auto">
                                <div>
                                    <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                        id="create-btn" data-bs-target="#showModal"><i
                                            class="ri-add-line align-bottom me-1"></i> Add</button>

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
                            <table class="table align-middle table-nowrap" id="customerTable">
                                {{-- <thead class="table-light">
                                    <tr>
                                        <th>STT</th>
                                        <th>Role</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead> --}}
                                @include('components.atoms.table_head', [
                                    'idClassThead' => 'table-light',
                                    'headers' => ['Id', 'Role', 'Description', 'Action'],
                                ])
                                <tbody class="list form-check-all">
                                    @foreach ($roles as $role)
                                        <tr>


                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->role }}</td>
                                            <td>{{ $role->description }}</td>
                                            <td>
                                                {{-- <a href="{{ route('role.edit', $role->id) }}" class="btn btn-primary"><i class="bi bi-pencil"></i> Edit</a> --}}

                                                <button onclick="editRoles({{ $role->id }})" class="btn btn-primary "
                                                    data-bs-toggle="modal" id="create-btn"
                                                    data-bs-target="#showModalEdit"><i class="ri-edit-2-line"></i> </button>

                                                <form action="{{ route('role.destroy', $role->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Bạn có muốn xóa không')"><i
                                                            class="ri-delete-bin-2-line"></i></button>
                                                </form>
                                            </td>
                                        </tr>
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




                        @include('components.molecules.pagination', ['paginator' => $roles])

                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
    @include('roles.create')
    @include('roles.edit')
@endsection
@section('scripts')
    <script>
        var roles = {!! json_encode($roles) !!};
        const editRoles = function(idrole) {
            const rol = roles.data.find(role => role.id == idrole);
            console.log(rol);
            if (rol) {
                $('#edit-role').attr('action', '/role/' + idrole + '/update');
                $('input[name="role"]').val(rol.role);
                $('input[name="description"]').val(rol.description);
            }
        };
    </script>
@endsection
