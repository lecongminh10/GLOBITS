@extends('layouts.app')
@section('title','Add-Person')
@section('content')
    <div class="row justify-content-center ">

      <div class="col-md-7">
          
          <div class="card">
              {{-- <h3 class="text-center my-2">Add-Person</h3> --}}
              <x-atoms.title :title="'Add-Person'" class="text-center my-2" />

              <div class="card-header align-items-center">
                @include('components.atoms.alert')
              </div>
              <div class="card-body">
                <form action="{{route('person.store')}}" method="POST">
                  @csrf
                  
                  {{-- <div class="mb-3">
                    <label for="code" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="code" name="full_name">
                  </div> --}}
                  <x-molecules.text_input_field :name="'full_name'" :label="'Full Name'" :classlabel="'form-label'"
                  :classinput="'form-control'" />

                  
                
                  <div class="mb-3">
                    <label for="name" class="form-label">Gender</label>
                    <select  id="" class=" form-select " name="gender">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                  </select>
                  </div>
        
               
                  {{-- <div class="mb-3">
                    <label for="date" class="form-label">Birth Date</label>
                    <input type="date" class="form-control" id="password" name="birthdate"></input>
                  </div> --}}

                  <x-molecules.date_picker_fied :classlabel="'form-label'" :name="'birthdate'" :label="'Birth Date:'"
                  :class="'form-control'" />

      
                  {{-- <div class="mb-3">
                      <label for="" class="form-label">Phone Number</label>
                      <input type="text" class=" form-control " name="phone_number">
                  </div> --}}

                  <x-molecules.text_input_field :name="'phone_number'" :label="'Phone Number'" :classlabel="'form-label'"
                  :classinput="'form-control'" />


                  {{-- <div class="mb-3">
                      <label for="" class="form-label">Adders</label>
                      <input type="text" class=" form-control " name="address">
                  </div> --}}

                 <x-molecules.text_input_field :name="'address'" :label="'Adders'" :classlabel="'form-label'"
                  :classinput="'form-control'" />


                  {{-- <div class="mb-3">
                      <label for="name" class="form-label">User</label>
                      <select  id="" class=" form-select " name="user_id">
                          @foreach ($user as $use)
                          <option value="{{$use ->id}}">{{$use ->name}}</option>
                          @endforeach
                    </select>
                  </div> --}}

                  <x-molecules.select_field :classlabel="'form-label'" :name="'user_id'" :label="'User Name:'"
                  :options="$user" :field="'name'" :multiple="false" />


                    {{-- <div class="mb-3">
                      <label for="name" class="form-label">Company</label>
                      <select  id="" class=" form-select " name="company_id">
                          @foreach ($company as $compa)
                          <option value="{{$compa ->id}}">{{$compa ->name}}</option>
                          @endforeach
                    </select>
                    </div> --}}

                    <x-molecules.select_field :classlabel="'form-label'" :name="'company_id'" :label="'Company Name:'"
                    :options="$company" :field="'name'" :multiple="false" />
  

                  {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                  <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />

                  <a href="/person" class="btn btn-dark ">Cancel</a>
                </form>
              </div>

          </div>
      </div>
  </div>
@endsection