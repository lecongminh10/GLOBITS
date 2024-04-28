@extends('layouts.app')

@section('title', 'Create - Department')

@section('content')

    <div class="row justify-content-center ">
        <div class="col-md-7">

            <div class="card">
                {{-- <h3 class="text-center my-2">Add-departmeny</h3> --}}

                <x-atoms.title :title="'Add-department'" class="text-center my-2" />
                <div class="card-header align-items-center">
                    <h5 class="card-title">
                        <strong>Company:{{ $nameCompany }}</strong>
                    </h5>
                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form action="/company/{{ $companyId }}/department/store" method="POST">

                        @csrf
                        {{-- <div class="mb-3">
                        <label for="code" class="form-label">Code</label>
                        <input type="text" class="form-control" id="code" name="code" >
                    </div> --}}
                        <x-molecules.text_input_field :name="'code'" :label="'Code'" :classlabel="'form-label'"
                            :classinput="'form-control'" />

                        {{-- <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" >
                    </div> --}}

                        <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'"
                            :classinput="'form-control'" />

                        <input type="hidden" name="company_id" value="{{ $companyId }}">


                        {{-- <div class="mb-3">
                        <label for="address" class="form-label">Perent department</label>
                        <select  id="" class="form-control " name="parent_id">
                                <option value="">None</option>
                            @foreach ($departments as $department)
                                <option value="{{$department ->id}}">{{$department ->name}}</option>
                            @endforeach
                        </select>
                    </div> --}}

                        <x-molecules.select_field :classlabel="'form-label'" :name="'parent_id'" :label="'Perent department:'" :options="$departments"
                            :field="'name'" :multiple="false" />


                        {{-- <button type="submit" class="btn btn-primary">Create</button> --}}

                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />
                        <a href="/company/{{ $companyId }}/department" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection
