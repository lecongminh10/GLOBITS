@extends('layouts.app')

@section('title', 'Edit - Company')

@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header align-items-center">
                  
                    <x-atoms.title :title="'Edit-Company'" class="text-center my-2" />
                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form action="{{ route('company.update', $company->id) }}" method="POST">
                        @csrf
                        <x-molecules.text_input_field 
                        :name="'code'" 
                        :label="'Code'" 
                        :classlabel="'form-label'"
                        :value="$company->code" 
                        :classinput="'form-control'" />
                        <x-molecules.text_input_field 
                        :name="'name'" 
                        :label="'Name'" 
                        :classlabel="'form-label'"
                        :value="$company->name" 
                        :classinput="'form-control'" />
                        <x-molecules.text_input_field 
                        :name="'address'" 
                        :label="'Address'" 
                        :classlabel="'form-label'"
                        :value="$company->address" 
                        :classinput="'form-control'" />
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="/company/{{ $company->id }}/department" class="btn btn-primary ">Department</a>
                        <a href="{{ route('company.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
