@extends('layouts.app')

@section('title', 'List - Task')
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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">List-Task</h3>
                    <a href="{{ route('task.export.excel') }}" class="btn btn-success float-end mx-2">Export</a>
                    <a href="{{ route('task.create') }}" class="btn btn-primary float-end "><i
                            class="bi bi-patch-plus"></i>Add</a>

                </div>
                <div class="card-body">
                    <x-molecules.table :classTable="'table table-bordered nowrap table-striped align-middle'" :idTable="'model-datatables'" style="width:100%">
                        <x-slot name="theah">
                            <x-atoms.table_head :idClassThead="''" :headers="[
                                'Id',
                                'Name',
                                'Description',
                                'Project',
                                'Person',
                                'Priority',
                                'Status',
                                'Start_time',
                                'End_time',
                                'Action',
                            ]" />
                        </x-slot>
                        <x-slot name="tbody">
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>{{ $task->t_p_name }}</td>
                                    <td>{{ $task->t_s_fullname }}</td>
                                    <td>
                                        @if ($task->priority == 1)
                                            Cao
                                        @elseif($task->priority == 2)
                                            Trung bình
                                        @else
                                            Thấp
                                        @endif
                                    </td>

                                    <td>
                                        @if ($task->status == 1)
                                            Mới tạo
                                        @elseif($task->status == 2)
                                            Đang làm
                                        @elseif($task->status == 3)
                                            Hoàn thành
                                        @elseif($task->status == 4)
                                            Tạm hoãn
                                        @endif
                                    </td>
                                    <td class="badge bg-info-subtle text-info">{{ $task->start_time }}</td>
                                    <td class="badge bg-danger-subtle text-danger">{{ $task->end_time }}</td>

                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item edit-item-btn"
                                                        href="{{ route('task.edit', $task->id) }}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</a></li>
                                                <li>
                                                    <form action="{{ route('task.destroy', $task->id) }}" method="POST"
                                                        class="d-inline">
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
                        </x-slot>
                    </x-molecules.table>
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
