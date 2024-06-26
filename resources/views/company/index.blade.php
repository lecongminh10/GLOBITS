@extends('layouts.app')

@section('title', 'List - Company')

@section('content')


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">List - Company</h4>
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

                                    <a href="{{ route('company.create') }}">
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

                            <x-molecules.table :classTable="'table align-middle table-nowrap'" :idTable="'customerTable'">
                                <x-slot name="theah">
                                    <x-atoms.table_head :idClassThead="'table-light'" :headers="['STT', 'Code', 'Name', 'Address', 'Action']" />
                                </x-slot>
                                <x-slot name="tbody">
                                    @foreach ($companies as $company)
                                    <tr>
                                        <td>{{ $company->id }}</td>
                                        <td>{{ $company->code }}</td>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->address }}</td>
                                        <td>
                                            <a href="/company/{{ $company->id }}">
                                                <button class="btn btn-primary "data-bs-toggle="modal" id="create-btn"
                                                    data-bs-target="#showModalEdit"><i class="ri-edit-2-line"></i>
                                                </button>
                                            </a>
                                            <form action="{{ route('company.destroy', $company->id) }}" method="POST"
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
                        <x-molecules.pagination :paginator="$companies"/>
                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
@endsection
