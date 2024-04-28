@extends('layouts.app')
@section('title')
    Add - user
@endsection
@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-7">

            <div class="card">
                <x-atoms.title :title="'Add-user'" class="text-center my-2" />

                <div class="card-header align-items-center">
                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- <div class="mb-3">
                            <label for="code" class="form-label">Name</label>
                            <input type="text" class="form-control" id="code" name="name">
                        </div> --}}

                        <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'"
                            :classinput="'form-control'" />


                        {{-- <div class="mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="email" class="form-control" id="name" name="email">
                        </div> --}}
                        <x-molecules.text_input_field :name="'email'" :label="'Email'" :classlabel="'form-label'"
                            :classinput="'form-control'" />

                        {{-- <div class="mb-3">
                            <label for="password" class="form-label">Pass word</label>
                            <input type="password" class="form-control" id="password" name="password"></input>
                        </div> --}}
                        <x-molecules.text_input_field :name="'password'" :label="'Password'" :classlabel="'form-label'"
                            :key="'id'" :classinput="'form-control'" />

                        {{-- <div class="mb-3">
                            <label for="roles" class="form-label">Roles</label>
                            <select multiple class="form-select" id="roles" name="roles[]">
                              @foreach ($roles as $role)
                                  <option value="{{ $role->id }}">{{ $role->role }}</option>
                              @endforeach
                          </select>
                        </div> --}}

                        <x-molecules.select_field :tam="''" :classlabel="'form-label'" :name="'roles[]'"
                            :label="'Roles'" :options="$roles" :field="'role'" :multiple="true"
                            :tam="''" />



                        <div class="mb-3">
                            <label for="" class="form-label">Status</label>
                            <select id="" class=" form-select " name="is_active">
                                <option value="active">Active</option>
                                <option value="inactive">Unactive</option>
                            </select>
                        </div>
                        {{-- <x-molecules.select_field classlabel="form-label" name="is_active" label="Status" :options="$is_active" field="active" :multiple="false" />
 --}}


                        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}

                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />

                        <a href="/user" class="btn btn-dark ">Cancel</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
