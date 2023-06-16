@extends('dashboard.layouts.app')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">AEditd Admins</h4>
                <p class="card-description">
                    Edit Admins
                </p>
                <form class="forms-sample" action="{{ route('admin.update',$data->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" value="{{old('name',$data->name)}}" id="exampleInputName1" placeholder="Name">
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{old('email',$data->email)}}" id="exampleInputEmail3"
                            placeholder="Email">
                        @error('email')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword4"
                            placeholder="Password">
                        @error('password')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword4">Password Confirm</label>
                        <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword4"
                            placeholder="Password">
                    </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('admin.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@stop
@section('js')
@stop
