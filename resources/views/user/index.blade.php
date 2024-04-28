@extends('layouts.app')
@section('title')
    List - User
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">List - User</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="listjs-table" id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm-auto">
                                <div>
                                    
                                    <a href="{{route('user.create')}}">
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
                            <table class="table align-middle table-nowrap" id="customerTable">
                                {{-- <thead class="table-light">
                                     <tr>
                                        <th>STT</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead> --}} 
                                @include('components.atoms.table_head', 
                                ['idClassThead' => '',
                                 'headers' => ['STT','Name', 'Email', 'Active','Action']])
                                <tbody class="list form-check-all">
                                    @foreach ($users as $user)
                                            <td>{{$user ->id}}</td>
                                            <td>{{$user ->name}}</td>
                                            <td>{{$user ->email}}</td>
                                            <td class="mt-3 {{($user ->is_active=="active")?" badge bg-success":"badge bg-danger"}}">{{$user ->is_active}}</td>

                                            <td>
                                                <a href="/user/{{$user->id}}">
                                                    <button class="btn btn-primary "data-bs-toggle="modal"
                                                    id="create-btn" data-bs-target="#showModalEdit"><i
                                                            class="ri-edit-2-line"></i> 
                                                        </button>
                                                        </a>
                                                <form action="{{ route('user.destroy', $user->id) }}" method="POST"
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

                         {{-- phân trang  --}}
                        @include('components.molecules.pagination', ['paginator' => $users])
                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
@endsection