@extends('layouts.app')
@section('title')
    Edit - user
@endsection
@section('content')
    <div class="row justify-content-center ">

        <div class="col-md-7">

            <div class="card">
                <h3 class="text-center my-2">Edit-user</h3>
                <div class="card-header align-items-center">
                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form action="/user/{{ $user->id }}/update" method="POST" enctype="multipart/form-data">
                        @csrf

                        <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'"
                            :classinput="'form-control'" :value="$user->name" />

                        <x-molecules.text_input_field :name="'email'" :label="'Email'" :classlabel="'form-label'"
                            :classinput="'form-control'" :value="$user->email" />

                        <div class="mb-3">
                            <label for="roles" class="form-label">Roles</label>
                            <select multiple class="form-select" id="roles" name="roles[]">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}"
                                        {{ in_array($role->id, $user->roles->pluck('id')->toArray()) ? 'selected' : '' }}>
                                        {{ $role->role }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="is_active" class="form-label">Status</label>
                            <select id="is_active" class="form-select" name="is_active">
                                <option value="active" @if ($user->is_active == 'active') selected @endif>Active</option>
                                <option value="inactive" @if ($user->is_active == 'inactive') selected @endif>Inactive</option>
                            </select>
                        </div>

                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />
                        <a href="/user" class="btn btn-dark ">Cancel</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
