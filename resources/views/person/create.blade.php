@extends('layouts.app')
@section('title', 'Add-Person')
@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-7">
            <div class="card">
                <x-atoms.title :title="'Add-Person'" class="text-center my-2" />

                <div class="card-header align-items-center">
                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form action="{{ route('person.store') }}" method="POST">
                        @csrf

                        <x-molecules.text_input_field :name="'full_name'" :label="'Full Name'" :classlabel="'form-label'"
                            :classinput="'form-control'" />

                        @php
                            $genders = [
                                ['id' => 'male', 'value' => 'Male'],
                                ['id' => 'female', 'value' => 'Female'],
                            ];
                        @endphp
                        <div class=" form-group mb-3">
                            <x-atoms.label :classlabel="'form-label'" :text="'Gender'" />
                            <x-atoms.select_input_tus :name="'gender'" :options="$genders" :field="'value'"
                                :multiple="false" />
                        </div>

                        <x-molecules.date_picker_fied :classlabel="'form-label'" :name="'birthdate'" :label="'Birth Date:'"
                            :class="'form-control'" />

                        <x-molecules.text_input_field :name="'phone_number'" :label="'Phone Number'" :classlabel="'form-label'"
                            :classinput="'form-control'" />

                        <x-molecules.text_input_field :name="'address'" :label="'Adders'" :classlabel="'form-label'"
                            :classinput="'form-control'" />

                        <x-molecules.select_field :classlabel="'form-label'" :name="'user_id'" :label="'User Name:'"
                            :options="$user" :field="'name'" :multiple="false" />

                        <x-molecules.select_field :classlabel="'form-label'" :name="'company_id'" :label="'Company Name:'"
                            :options="$company" :field="'name'" :multiple="false" />


                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />

                        <a href="/person" class="btn btn-dark ">Cancel</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
