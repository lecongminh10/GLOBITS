@extends('layouts.app')

@section('title', 'Edit - Company')

@section('content')
    {{-- <div class="row">
    <h3 class="text-center">Edit - Company</h3>
    <a href="/company/{{$company ->id}}/department" class="btn btn-primary ">List-Department</a>
</div>
<div class="row">
    <div class="col-md-6 offset-md-3">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('company.update', $company->id) }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{ $company->code }}" >
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $company->name }}" >
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $company->address }}" >
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('company.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div> --}}

    <div class="row justify-content-center ">

        <div class="col-md-7">

            <div class="card">


                <div class="card-header align-items-center">
                    {{-- <h3 class="text-center my-2">Edit-Company</h3> --}}
                    <x-atoms.title :title="'Edit-Company'" class="text-center my-2" />
                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form action="{{ route('company.update', $company->id) }}" method="POST">
                        @csrf

                        {{-- <div class="mb-3">
                        <label for="code" class="form-label">Code</label>
                        <input type="text" class="form-control" id="code" name="code" value="{{ $company->code }}" >
                    </div> --}}

                        <x-molecules.text_input_field :name="'code'" :label="'Code'" :classlabel="'form-label'"
                            :value="$company->code" :classinput="'form-control'" />

                        {{-- <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $company->name }}" >
                    </div> --}}
                        <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'"
                            :value="$company->name" :classinput="'form-control'" />

                        {{-- <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $company->address }}" >
                    </div> --}}
                        <x-molecules.text_input_field :name="'address'" :label="'Address'" :classlabel="'form-label'"
                            :value="$company->address" :classinput="'form-control'" />

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="/company/{{ $company->id }}/department" class="btn btn-primary ">Department</a>
                        <a href="{{ route('company.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
