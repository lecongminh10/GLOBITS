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
                                                <button
                                                    class="btn btn-primary" data-bs-toggle="modal" id="create-btn" data-id="{{$country ->id}}"
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
                        @include('components.molecules.pagination', ['paginator' => $countries])
                    </div>
                </div>
            </div>    
        </div>
    </div>
    @include('country.create')
    @include('country.edit')
@endsection
@section('scripts')
<script>
    var countries = {!! json_encode($countries) !!};
    var myModalEl = document.getElementById('showModalEdit');
    var code = document.querySelector('#code_up');
    var name_up = document.querySelector('#name_up');
    var description = document.querySelector('#description_up');

    myModalEl.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var idCountry = button.getAttribute('data-id');
        const country = countries.data.find(country => country.id == idCountry);
        
        console.log(country);
        
        if (country) {
            $('#edit-country').attr('action', '/country/' + idCountry + '/update');
            code.value = country.code;
            name_up.value = country.name;
            description.value = country.description;
        }
    });

    document.getElementById('edit-country').addEventListener('submit', function(event) {
        event.preventDefault();
        
        var formData = {
            _token: $('meta[name="csrf-token"]').attr('content'), 
            _method: 'PUT',
            code: code.value,
            name: name_up.value,
            description: description.value
        };

        var idCountry = $('#edit-country').attr('action').split('/').slice(-2, -1)[0];

        $.ajax({
            url: '/country/' + idCountry + '/update',
            type: 'POST', // Change to POST
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log('Success:', response);
                $('#showModalEdit').one('hidden.bs.modal', function (e) {
                    alert("Bạn đã sửa thành công ");
                    location.reload();
                }).modal('hide');
            },

            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    });
</script>

@endsection
