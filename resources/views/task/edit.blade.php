@extends('layouts.app')

@section('title', 'Edit - Task')

@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-7 ">
            <div class="card">
                {{-- <h3 class="text-center my-2">Edit-Task</h3> --}}
                <x-atoms.title :title="'Edit-Task'" class="text-center my-2" />
                <div class="card-header align-items-center">
                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form method="POST" action="/task/{{ $task->id }}/update">
                        @csrf
                        {{-- <div class="form-group mb-3">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $task->name }}">
                        </div> --}}
                        <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'"
                            :classinput="'form-control'" :value="$task->name" />
                        {{-- <div class="form-group mb-3">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" rows="2">{{ $task->description }}</textarea>
                        </div> --}}

                        <x-molecules.text_input_field :name="'description'" :label="'Description:'" :classlabel="'form-label'"
                            :value="$task->description" :classinput="'form-control'" />

                        <div class="form-group mb-3">
                            <label for="project_id">Project Name:</label>
                            <select name="project_id" id="" class="form-select">
                                @foreach ($projects as $project)
                                    <option value="{{ $project->id }}"
                                        {{ $project->id == $task->project_id ? 'selected' : '' }}>{{ $project->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="person_id">Person Name:</label>
                            <select name="person_id" id="" class=" form-select ">
                                @foreach ($persons as $person)
                                    <option value="{{ $person->id }}"
                                        {{ $person->id == $task->person_id ? 'selected' : '' }}>{{ $person->full_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- <div class="form-group mb-3">
                            <label for="start_time">Start Time:</label>
                            <input type="datetime-local" name="start_time" id="start_time" class="form-control"
                                value="{{ $task->start_time }}">
                        </div> --}}

                        <x-molecules.date_picker_fied :classlabel="'form-label'" :name="'start_time'" :label="'Start Time:'"
                            :class="'form-control'" :value="$task->start_time" />

                        {{-- <div class="form-group mb-3">
                            <label for="end_time">End Time:</label>
                            <input type="datetime-local" name="end_time" id="end_time" class="form-control"
                                value="{{ $task->end_time }}">
                        </div> --}}
                        <x-molecules.date_picker_fied :classlabel="'form-label'" :name="'end_time'" :label="'Start Time:'"
                            :class="'form-control'" :value="$task->end_time" />

                        <div class="form-group mb-3">
                            <label for="priority">Priority:</label>
                            <select name="priority" id="priority" class="form-control">
                                <option value="1" {{ $task->priority == 1 ? 'selected' : '' }}>Cao</option>
                                <option value="2" {{ $task->priority == 2 ? 'selected' : '' }}>Trung bình</option>
                                <option value="3" {{ $task->priority == 3 ? 'selected' : '' }}>Thấp</option>
                            </select>
                        </div>


                        <div class="form-group mb-3">
                            <label for="status">Status:</label>
                            <select name="status" id="" class="form-control">
                                <option value="1" {{ $task->status == 1 ? 'selected' : '' }}>Mới tạo</option>
                                <option value="2" {{ $task->status == 2 ? 'selected' : '' }}>Đang làm</option>
                                <option value="3" {{ $task->status == 3 ? 'selected' : '' }}>Hoàn thành</option>
                                <option value="4" {{ $task->status == 4 ? 'selected' : '' }}>Tạm hoãn</option>
                            </select>
                        </div>

                        <div class="d-flex   justify-content-start  ">
                            <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />
                            <a href="/task/" class="btn btn-dark mx-2">Cancel</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
