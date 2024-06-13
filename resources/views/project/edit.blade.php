@extends('layouts.app')

@section('title', 'Edit - Project')

@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-7 ">
            <div class="card">
                {{-- <h3 class="text-center my-2">Edit-Project</h3> --}}
                <x-atoms.title :title="'Edit-Project'" class="text-center my-2" />
                <div class="card-header align-items-center">

                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form action="{{ route('project.update', ['project' => $project->id]) }}" method="POST">
                        @csrf


                        <x-molecules.text_input_field :name="'code'" :label="'Code'" :classlabel="'form-label'"
                        :classinput="'form-control'" :value="$project->code"/>

                        <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'"
                        :classinput="'form-control'" :value="$project->name"/>

                        <x-molecules.text_input_field :name="'description'" :label="'Description'" :classlabel="'form-label'"
                        :classinput="'form-control'" :value="$project->description"/>


                        <div class="mb-3">
                            <label for="company" class="form-label">Company</label>
                            <select class="form-select" id="company" name="company_id"
                                value="{{ $project->company_id }}">
                                <option value="">None</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}"
                                        {{ $project->company_id == $company->id ? 'selected' : '' }}>{{ $company->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="persons" class="form-label">Persons</label>
                            <select class="form-select" id="persons" name="persons[]" multiple>
                                <option value="">None</option>
                                @foreach ($persons as $person)
                                    <option value="{{ $person->id }}"
                                        {{ $project->persons->pluck('id')->contains($person->id) ? 'selected' : '' }}>
                                        {{ $person->full_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <x-atoms.button :class="'btn btn-primary '" :text="'Update'" />

                        <a href="{{ route('project.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
