@extends('layouts.app')
@section('title')
    List - Country
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">List - Country</h4>
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
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead> --}}

                                @include('components.atoms.table_head', [
                                    'idClassThead' => 'table-light',
                                    'headers' => ['STT', 'Code', 'Name', 'Description', 'Action'],
                                ])


                                <tbody class="list form-check-all">
                                    @foreach ($countries as $country)
                                        <tr>
                                            <td>{{ $country->id }}</td>
                                            <td>{{ $country->code }}</td>
                                            <td>{{ $country->name }}</td>
                                            <td>{{ $country->description }}</td>
                                            <td>
                                                <button onclick="editCountry({{ $country->id }})"
                                                    class="btn btn-primary "data-bs-toggle="modal" id="create-btn"
                                                    data-bs-target="#showModalEdit"><i class="ri-edit-2-line"></i> </button>
                                                <form action="{{ route('country.destroy', $country->id) }}" method="POST"
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


                            {{-- <x-molecules.table classTable="table align-middle table-nowrap" idTable="customerTable" :headers="['STT', 'Code', 'Name', 'Description', 'Action']"/> --}}






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



                        {{-- @if ($countries->count() > 0)
                            <div class="mt-4">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item {{ $countries->onFirstPage() ? 'disabled' : '' }}">
                                            <a class="page-link" href="{{ $countries->previousPageUrl() }}"
                                                aria-label="Previous">
                                                Pre</span>
                                            </a>
                                        </li>

                                        {{ $countries->links('pagination::bootstrap-4') }}

                                        <li class="page-item {{ !$countries->hasMorePages() ? 'disabled' : '' }}">
                                            <a class="page-link" href="{{ $countries->nextPageUrl() }}" aria-label="Next">
                                                <span aria-hidden="true">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        @endif --}}
                        @include('components.molecules.pagination', ['paginator' => $countries])


                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
    @include('country.create')
    @include('country.edit')
@endsection
@section('scripts')
    <script>
        var countries = {!! json_encode($countries) !!};
        const editCountry = function(idCountry) {

            const country = countries.data.find(country => country.id == idCountry);
            console.log(country)
            if (country) {
                $('#edit-country').attr('action', '/country/' + idCountry + '/update')
                $('#code').val(country.code);
                $('#name').val(country.name);
                $('#description').val(country.description);
            } else {
                console.error('Category not found');
            }

        }
    </script>
@endsection
