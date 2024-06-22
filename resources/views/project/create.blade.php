@extends('layouts.app')

@section('title', 'Create - Project')

@section('content')

    <div class="row justify-content-center ">
        <div class="col-md-7 ">
            <div class="card">
                {{-- <h3 class="text-center my-2">Add-Project</h3> --}}
                <x-atoms.title :title="'Add-Project'" class="text-center my-2" />
                <div class="card-header align-items-center">
                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form action="{{ route('project.store') }}" method="POST">
                        @csrf

                        <x-molecules.text_input_field 
                        :name="'code'" 
                        :label="'Code'" 
                        :classlabel="'form-label'"
                        :classinput="'form-control'" />

                        <x-molecules.text_input_field 
                        :name="'name'" 
                        :label="'Name'" 
                        :classlabel="'form-label'"
                        :classinput="'form-control'" />

                        <x-molecules.text_input_field 
                        :name="'description'" 
                        :label="'Description'" 
                        :classlabel="'form-label'"
                        :classinput="'form-control'" />

                        <x-molecules.select_field 
                        :classlabel="'form-label'" 
                        :name="'company_id'" 
                        :selected="''"
                        :label="'Company'" 
                        :options="$companies"
                        :field="'name'" 
                        :multiple="false" />

                        <x-molecules.select_field 
                        :classlabel="'form-label'" 
                        :name="'persons[]'" 
                        :selected="''"
                        :label="'Persons'" 
                        :options="$persons"
                        :field="'full_name'" 
                        :multiple="true" />

                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />

                        <a href="{{ route('project.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
