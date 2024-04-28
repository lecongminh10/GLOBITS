@extends('layouts.app')
@section('title')
    List - Person
@endsection
@section('link_query')
    <!-- Sweet Alert css-->
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <link href="{{ asset('assets/libs/dropzone/dropzone.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    {{-- <div class="row">
        <h3 class="text-center">List-Person</h3>
        <a href="{{route('person.create')}}" class="col-1 my-3 btn bg-primary text-white "><i class="bi bi-patch-plus"></i> Add</a>
    </div>
    <table class="table table-hover table-striped ">
        <thead>
            <tr>
                <th>STT</th>
                <th>Full-Name</th>
                <th>Birth Date</th>
                <th>Phone Number</th>
                <th>Company</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($persons as $person)
            <tr>
                <td>{{$person ->id}}</td>
              
                <td>{{$person ->full_name}}</td>
               
                <td>{{$person ->birthdate}}</td>
                <td>{{$person ->phone_number}}</td>
                <td>{{$person ->company_name}}</td>
                <td>{{$person ->address}}</td>
                <td>
                    <a href="/person/{{$person ->id}}" class="btn btn-primary "><i class="bi bi-arrow-clockwise"></i> </a>
                    <form action="{{ route('person.destroy', $person->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không')"><i class="bi bi-trash"></i></button>
                    </form>
                  
                </td>
            </tr>
            @endforeach

        </tbody>
    </table> --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">List-Person</h3>
                    <a href="{{ route('person.create') }}" class="btn btn-primary float-end "><i
                            class="bi bi-patch-plus"></i>Add</a>
                </div>
                <div class="card-body">
                    <table id="model-datatables" class="table table-bordered nowrap table-striped align-middle"
                        style="width:100%">
                        {{-- <thead>
                          
                            <tr>
                                <th>Id</th>
                                <th>User-Name</th>
                                <th>Full-Name</th>
                                <th>Birth Date</th>
                                <th>Phone Number</th>
                                <th>Company</th>
                                <th>Created At</th>
                                <th>Update At</th>
                                <th>Gender</th>
                                <th>Address </th>
                                <th>Action</th>
                            </tr>
                        </thead> --}}

                        @include('components.atoms.table_head', [
                            'idClassThead' => '',
                            'headers' => [
                                'Id',
                                'User_Name',
                                'Full_Name',
                                'Birth_Date',
                                'Phone_Number',
                                'Company',
                                'Created_At',
                                'Update_At',
                                'Gender',
                                'Address',
                                'Action',
                            ],
                        ])
                        <tbody>
                            @foreach ($persons as $person)
                                <tr>
                                    <td>{{ $person->id }}</td>
                                    <td>{{ $person->user->name }}</td>
                                    <td>{{ $person->full_name }}</td>
                                    <td>{{ $person->birthdate }}</td>
                                    <td>{{ $person->phone_number }}</td>
                                    <td>{{ $person->company->name }}</td>
                                    <td>{{ $person->created_at }}</td>
                                    <td>{{ $person->updated_at }}</td>
                                    <td><span class="badge bg-info-subtle text-info">{{ $person->gender }}</span></td>
                                    <td><span>{{ $person->address }}</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item edit-item-btn"
                                                        href="/person/{{ $person->id }}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</a></li>
                                                <li>
                                                    <form action="{{ route('person.destroy', $person->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class=" border-0 bg-white ms-3"
                                                            onclick="return confirm('Bạn có muốn xóa không')"><i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete</button>
                                                    </form>

                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>


    <!-- Sweet Alerts js -->
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('assets/js/pages/sweetalerts.init.js') }}"></script>

    <!-- dropzone js -->
    <script src="{{ asset('assets/libs/dropzone/dropzone-min.js') }}"></script>

    <!-- project-create init -->
    <script src="{{ asset('assets/js/pages/project-create.init.js') }}"></script>
@endsection
