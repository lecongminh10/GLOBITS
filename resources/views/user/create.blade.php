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
                        <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'"
                            :classinput="'form-control'" />

                        <x-molecules.text_input_field :name="'email'" :label="'Email'" :classlabel="'form-label'"
                            :classinput="'form-control'" />

                        <x-molecules.text_input_field :name="'password'" :label="'Password'" :classlabel="'form-label'"
                            :key="'id'" :classinput="'form-control'" />
                        <x-molecules.select_field :tam="''" :classlabel="'form-label'" :name="'roles[]'"
                            :label="'Roles'" :options="$roles" :field="'role'" :multiple="true"
                            :tam="''" />

                        @php
                            $is_actives = [
                                ['id' => 'active', 'value' => 'Active'],
                                ['id' => 'inactive', 'value' => 'Unactive'],
                            ];
                        @endphp
                        <div class=" form-group mb-3">
                            <x-atoms.label :classlabel="'form-label'" :text="'Status'" />
                            <x-atoms.select_input_tus :name="'is_active'" :options="$is_actives" :field="'value'"
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
