@extends('layouts.app')

@section('title', 'List - Roles')


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
                            <x-molecules.table :classTable="'table align-middle table-nowrap'" :idTable="'customerTable'">
                                <x-slot name="theah">
                                    <x-atoms.table_head :idClassThead="'table-light'" :headers="['Id', 'Role', 'Description', 'Action']" />
                                </x-slot>
                                <x-slot name="tbody">
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->role }}</td>
                                            <td>{{ $role->description }}</td>
                                            <td>
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
                                </x-slot>
                            </x-molecules.table>
                        </div>
                        <x-molecules.pagination :paginator="$roles"/>
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
