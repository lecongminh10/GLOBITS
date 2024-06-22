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
                                        {{ $role->id == $user->roles->pluck('id')->toArray() ? 'selected' : '' }}>
                                        {{ $role->role }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        @php
                        $is_actives = [
                            ['id' => 'active', 'value' => 'Active'],
                            ['id' => 'inactive', 'value' => 'Unactive'],
                        ];
                       @endphp
                        <div class=" form-group mb-3">
                        <x-atoms.label 
                        :classlabel="'form-label'" 
                        :text="'Status'" />
                        <x-atoms.select_input_tus 
                        :name="'is_active'" 
                        :options="$is_actives" 
                        :selected="$user->is_active"
                        :field="'value'"
                        :multiple="false" />
                       </div>

                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />
                        <a href="/user" class="btn btn-dark ">Cancel</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
