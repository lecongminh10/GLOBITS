
@extends('layouts.app')

@section('title', 'Edit - Company')

@section('content')

<div class="row justify-content-center ">
    <div class="col-md-7">
        
        <div class="card">
            {{-- <h3 class="text-center my-2">Edit-departmeny</h3> --}}
            <x-atoms.title :title="'Edit-department'" class="text-center my-2" />
            <div class="card-header align-items-center">
                <h5 class="card-title">
                    <strong>Company:{{$nameCompany}}</strong>
                </h5>
                @include('components.atoms.alert')
            </div>
            <div class="card-body">
                <form action="{{ route('company.department.update', ['company' => $companyId, 'department' => $department->id]) }}" method="POST">
        
                    @csrf

                    <x-molecules.text_input_field 
                    :name="'code'" 
                    :label="'Code'" 
                    :classlabel="'form-label'"
                    :classinput="'form-control'" 
                    :value="$department ->code"/>
      
                    <x-molecules.text_input_field 
                    :name="'name'" 
                    :label="'Name'" 
                    :classlabel="'form-label'"
                    :classinput="'form-control'" 
                    :value="$department ->name"/>

                    <input type="hidden" name="company_id" value="{{$companyId}}">
                    
                    <x-molecules.select_field 
                    :classlabel="'form-label'" 
                    :name="'parent_id'" 
                    :selected="$department->parent_id"
                    :label="'Perent department:'" 
                    :options="$departments"
                    :field="'name'" :multiple="false" />

                   <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />
                    <a href="/company/{{$companyId}}/department" class="btn btn-secondary">Cancel</a>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
