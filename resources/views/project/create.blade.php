@extends('layouts.app')

@section('title', 'Create - Project')

@section('content')

    <div class="row justify-content-center ">
        <div class="col-md-7 ">
            <div class="card">
                {{-- <h3 class="text-center my-2">Add-Project</h3> --}}
                <x-atoms.title :title="'Add-Project'" class="text-center my-2" />
                <div class="card-header align-items-center">
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form action="{{ route('project.store') }}" method="POST">
                        @csrf
                        {{-- <div class="mb-3">
                            <label for="code" class="form-label">Code</label>
                            <input type="text" class="form-control" id="code" name="code">
                        </div> --}}
                        <x-molecules.text_input_field :name="'code'" :label="'Code'" :classlabel="'form-label'"
                        :classinput="'form-control'" />

                        {{-- <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div> --}}
                        <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'"
                        :classinput="'form-control'" />

                        {{-- <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div> --}}

                        <x-molecules.text_input_field :name="'description'" :label="'Description'" :classlabel="'form-label'"
                        :classinput="'form-control'" />

                        {{-- <div class="mb-3">
                            <label for="company" class="form-label">Company</label>
                            <select class="form-select" id="company" name="company_id">
                                <option value="">None</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        <x-molecules.select_field :classlabel="'form-label'" :name="'company_id'" :label="'Company'" :options="$companies"
                        :field="'name'" :multiple="false" />


                        {{-- <div class="mb-3">
                            <label for="persons" class="form-label">Persons</label>
                            <select class="form-select" id="persons" name="persons[]" multiple>
                                <option value="">None</option>
                                @foreach ($persons as $person)
                                    <option value="{{ $person->id }}">{{ $person->full_name }}</option>
                                @endforeach
                            </select>
                        </div> --}}

                        <x-molecules.select_field :classlabel="'form-label'" :name="'persons[]'" :label="'Persons'" :options="$persons"
                        :field="'full_name'" :multiple="true" />

                        {{-- <button type="submit" class="btn btn-primary">Create</button> --}}
                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />

                        <a href="{{ route('project.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
