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

                        <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'"
                            :classinput="'form-control'" />

                        <x-molecules.text_input_field :name="'description'" :label="'Description:'" :classlabel="'form-label'"
                            :classinput="'form-control'" />

                        <x-molecules.select_field :classlabel="'form-label'" :name="'project_id'" :label="'Roles'" :options="$projects"
                            :field="'name'" :multiple="true" />

                        <x-molecules.select_field :classlabel="'form-label'" :name="'person_id'" :label="'Person Name:'"
                            :options="$persons" :field="'full_name'" :multiple="true" />

                        <x-molecules.date_picker_fied :name="'start_time'" :label="'Start Time:'" :classlabel="'form-label'"
                            :class="'form-control'" />

                        <x-molecules.date_picker_fied :classlabel="'form-label'" :name="'end_time'" :label="'End Time:'"
                            :class="'form-control'" />

                        @php
                            $priorities = [
                                ['id' => '1', 'value' => 'Cao'],
                                ['id' => '2', 'value' => 'Trung bình'],
                                ['id' => '3', 'value' => 'Thấp'],
                            ];
                        @endphp
                        <div class=" form-group mb-3">
                            <x-atoms.label :classlabel="'form-label'" :text="'Priority'" />
                            <x-atoms.select_input_tus :name="'priority'" :options="$priorities" :field="'value'"
                                :multiple="false" />
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
                            <x-atoms.select_input_tus :name="'status'" :options="$status" :field="'value'"
                                :multiple="false" />
                        </div>

                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />

                        <a href="{{ route('task.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
