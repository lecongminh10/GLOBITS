@extends('layouts.app')

@section('title', 'Create - Task')

@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-7 ">
            <div class="card">
                {{-- <h3 class="text-center my-2">Add-Task</h3> --}}
                <x-atoms.title :title="'Add-Task'" class="text-center my-2" />
                <div class="card-header align-items-center">
                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('task.store') }}">
                        @csrf
                        {{-- <div class="form-group mb-3">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" >
            </div> --}}
                        <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'"
                            :classinput="'form-control'" />

                        {{-- <div class="form-group mb-3">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" rows="3" ></textarea>
            </div> --}}

                        <x-molecules.text_input_field :name="'description'" :label="'Description:'" :classlabel="'form-label'"
                            :classinput="'form-control'" />
                        {{-- 
            <div class="form-group mb-3">
                <label for="project_id">Project Name:</label>
                <select name="project_id" id="" class="form-select">
                    @foreach ($projects as $project)
                        <option value="{{$project ->id}}">{{$project ->name}}</option>
                    @endforeach
                </select>
            </div> --}}

                        <x-molecules.select_field :classlabel="'form-label'" :name="'project_id'" :label="'Roles'" :options="$projects"
                            :field="'name'" :multiple="false" />


                        {{-- <div class="form-group mb-3">
                <label for="person_id">Person Name:</label>
                <select name="person_id" id="" class=" form-select ">
                    @foreach ($persons as $person)
                      <option value="{{$person ->id}}">{{$person ->full_name}}</option>p
                    @endforeach
                </select>
            </div> --}}

                        <x-molecules.select_field :classlabel="'form-label'" :name="'person_id'" :label="'Person Name:'"
                            :options="$persons" :field="'full_name'" :multiple="false" />

                        {{-- <div class="form-group mb-3">
                <label for="start_time">Start Time:</label>
                <input type="datetime-local" name="start_time" id="start_time" class="form-control" >
            </div> --}}

                        <x-molecules.date_picker_fied :classlabel="'form-label'" :name="'start_time'" :label="'Start Time:'"
                            :class="'form-control'" />



                        {{-- <div class="form-group mb-3">
                <label for="end_time">End Time:</label>
                <input type="datetime-local" name="end_time" id="end_time" class="form-control" >
            </div> --}}

                        <x-molecules.date_picker_fied :classlabel="'form-label'" :name="'end_time'" :label="'End Time:'"
                            :class="'form-control'" />

                        <div class="form-group mb-3">
                            <label for="priority">Priority:</label>
                            <select name="priority" id="priority" class="form-control">
                                <option value="1">Cao</option>
                                <option value="2">Trung bình</option>
                                <option value="3">Thấp</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="status">Status:</label>
                            <select name="status" id="" class="form-control">
                                <option value="1">Mới tạo</option>
                                <option value="2">Đang làm</option>
                                <option value="3">Hoàn thành</option>
                                <option value="4">Tạm hoãn</option>
                            </select>
                        </div>

                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />

                        <a href="{{ route('task.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
