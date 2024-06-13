@extends('layouts.app')
@section('title','Edit - Person ')
@section('content')

      <div class="row justify-content-center ">

        <div class="col-md-7">
            
            <div class="card">
                {{-- <h3 class="text-center my-2">Edit-Person</h3> --}}
                <x-atoms.title :title="'Edit-Person'" class="text-center my-2" />
                <div class="card-header align-items-center">
                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form action="/person/{{$person->id}}/update" method="POST">
                        @csrf

                        <x-molecules.text_input_field :name="'full_name'" :label="'Full Name'" :classlabel="'form-label'"
                        :classinput="'form-control'" :value="$person ->full_name"/>


                        <div class="mb-3">
                            <label for="name" class="form-label">Gender</label>
                            <select id="" class="form-select" name="gender">
                                <option value="male" {{ old('gender', $person->gender) == "male" ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender', $person->gender) == "female" ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                        
                        <x-molecules.date_picker_fied :classlabel="'form-label'" :name="'birthdate'" :label="'Birth Date:'"
                        :class="'form-control'" :value="$person ->birthdate"/>
            
                        <x-molecules.text_input_field :name="'phone_number'" :label="'Phone Number'" :classlabel="'form-label'"
                        :classinput="'form-control'" :value="$person ->phone_number"/>

                        <x-molecules.text_input_field :name="'address'" :label="'Adders'" :classlabel="'form-label'"
                        :classinput="'form-control'" :value="$person ->address"/>


                        <div class="mb-3">
                            <label for="name" class="form-label">User</label>
                            <select id="" class="form-select" name="user_id">
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ (old('user_id', $person->user_id) == $user->id) ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                                @endforeach
                            </select>                
                          </div>
                          <div class="mb-3">
                            <label for="name" class="form-label">Company</label>
                            <select  id="" class=" form-select " name="company_id">
                                @foreach ($company as $compa)
                                <option value="{{$compa ->id}}" {{(old('company_id',$person ->company_id) ==$compa->id) ? 'selected' : ''}}>{{$compa ->name}}</option>
                                @endforeach
                          </select>
                          </div>


                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />
                        <a href="/person" class="btn btn-dark ">Cancel</a>
                      </form>
                </div>
  
            </div>
        </div>
    </div>
@endsection