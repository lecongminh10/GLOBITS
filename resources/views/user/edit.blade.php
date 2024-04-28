@extends('layouts.app')
@section('title')
    Edit - user
@endsection
@section('content')
    {{-- <div class="row">
        <h3 class="text-center my-3">Edit-user</h3>
        <a href="{{route('user.index')}}" class="col-1 my-3 btn text-black "><i class="bi bi-arrow-left-circle-fill"></i></a>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-6">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
          <form action="/user/{{$user ->id}}/update" method="POST">
            @csrf
            
            <div class="mb-3">
              <label for="code" class="form-label">Name</label>
              <input type="text" class="form-control" id="code" name="name" value="{{$user ->name}}">
            </div>
            
          
            <div class="mb-3">
              <label for="name" class="form-label">Email</label>
              <input type="email" class="form-control" id="name" name="email" value="{{$user ->email}}">
            </div>
  
            <div class="mb-3">
              <label for="roles" class="form-label">Roles</label>
              <select multiple class="form-select" id="roles" name="roles[]">
                  @foreach($roles as $role)
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
                    <option value="active" @if($user->is_active == 'active') selected @endif>Active</option>
                    <option value="inactive" @if($user->is_active == 'inactive') selected @endif>Inactive</option>
                </select>
            </div>
            
  
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div> --}}
      <div class="row justify-content-center ">

        <div class="col-md-7">
            
            <div class="card">
                <h3 class="text-center my-2">Edit-user</h3>
                <div class="card-header align-items-center">
                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form action="/user/{{$user ->id}}/update" method="POST" enctype="multipart/form-data">
                        @csrf
        
                        {{-- <div class="mb-3">
                            <label for="code" class="form-label">Name</label>
                            <input type="text" class="form-control" id="code" name="name" value="{{$user ->name}}">
                          </div> --}}

                          <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'" :classinput="'form-control'" :value="$user->name" />

                          
                        
                          {{-- <div class="mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="email" class="form-control" id="name" name="email" value="{{$user ->email}}">
                          </div> --}}

                          <x-molecules.text_input_field :name="'email'" :label="'Email'" :classlabel="'form-label'" :classinput="'form-control'" :value="$user ->email"/>
                
                          <div class="mb-3">
                            <label for="roles" class="form-label">Roles</label>
                            <select multiple class="form-select" id="roles" name="roles[]">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}" 
                                        {{ in_array($role->id, $user->roles->pluck('id')->toArray()) ? 'selected' : '' }}>
                                        {{ $role->role }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <x-molecules.select_field :classlabel="'form-label'" :name="'roles[]'" :label="'Roles'" :options="$roles" :field="'role'" :id="'id'" :multiple="true">
                            @foreach($roles as $role)
                                <x-slot name="tam">
                                    {{ in_array($role->id, $user->roles->pluck('id')->toArray()) ? 'selected' : '' }}
                                </x-slot>
                            @endforeach
                        </x-molecules.select_field> --}}
                        
                         
                          <div class="mb-3">
                              <label for="is_active" class="form-label">Status</label>
                              <select id="is_active" class="form-select" name="is_active">
                                  <option value="active" @if($user->is_active == 'active') selected @endif>Active</option>
                                  <option value="inactive" @if($user->is_active == 'inactive') selected @endif>Inactive</option>
                              </select>
                          </div>
                          
        
                          <x-atoms.button :class="'btn btn-primary '" :text="'Submit'"/>
                        <a href="/user" class="btn btn-dark ">Cancel</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection