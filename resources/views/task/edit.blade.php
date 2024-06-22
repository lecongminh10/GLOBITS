@extends('layouts.app')

@section('title', 'Edit - Task')

@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-7 ">
            <div class="card">
                <x-atoms.title :title="'Edit-Task'" class="text-center my-2" />
                <div class="card-header align-items-center">
                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form method="POST" action="/task/{{ $task->id }}/update">
                        @csrf

                        <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'"
                            :classinput="'form-control'" :value="$task->name" />

                        <x-molecules.text_input_field :name="'description'" :label="'Description:'" :classlabel="'form-label'"
                            :value="$task->description" :classinput="'form-control'" />

                        <x-molecules.select_field :classlabel="'form-label'" :name="'project_id'" :label="'Project'"
                            :selected="$task->project_id" :options="$projects" :field="'name'" :multiple="false" />

                        <x-molecules.select_field :classlabel="'form-label'" :name="'person_id'" :selected="$task->person_id"
                            :label="'Person Name:'" :options="$persons" :field="'full_name'" :multiple="false" />

                        <x-molecules.date_picker_fied :classlabel="'form-label'" :name="'start_time'" :label="'Start Time:'"
                            :class="'form-control'" :value="date('Y-m-d', strtotime($task->start_time))" />

                        <x-molecules.date_picker_fied :classlabel="'form-label'" :name="'end_time'" :label="'End Time:'"
                            :class="'form-control'" :value="date('Y-m-d', strtotime($task->end_time))" />



                        @php
                            $priorities = [
                                ['id' => '1', 'value' => 'Cao'],
                                ['id' => '2', 'value' => 'Trung bình'],
                                ['id' => '3', 'value' => 'Thấp'],
                            ];

                        @endphp
                        <div class=" form-group mb-3">
                            <x-atoms.label :classlabel="'form-label'" :text="'Priority'" />
                            <x-atoms.select_input_tus :name="'priority'" :selected="$task->priority" :options="$priorities"
                                :field="'value'" :multiple="false" />

                        </div>

                        @php
                            $status = [
                                ['id' => '1', 'value' => 'Mới tạo'],
                                ['id' => '2', 'value' => 'Đang làm'],
                                ['id' => '3', 'value' => 'Hoàn thành'],
                                ['id' => '4', 'value' => 'Tạm hoãn'],
                            ];
                        @endphp
                        <div class=" form-group mb-3">
                            <x-atoms.label :classlabel="'form-label'" :text="'Status:'" />
                            <x-atoms.select_input_tus :name="'status'" :selected="$task->status" :options="$status"
                                :field="'value'" :multiple="false" />

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
