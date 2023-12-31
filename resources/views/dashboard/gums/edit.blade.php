@extends('dashboard.layouts.app')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Admins</h4>
                <p class="card-description">
                    Add Admins
                </p>
                <form class="forms-sample" action="{{ route('admin.update',$data->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="code">Code</label>
                                <input type="text" name="code" value="{{old('code',$data->code)}}" class="form-control" id="code" >
                            </div>
                        </div>
                        
                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="size">Small</label>
                            <input type="text" name="small" value="{{old('small',$data->small)}}" class="form-control">
                        </div>
                       </div>
                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="size">medium</label>
                            <input type="text" name="medium" value="{{old('medium',$data->medium)}}" class="form-control">
                        </div>
                       </div>
                       
                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="size">Large</label>
                            <input type="text" name="large" value="{{old('large',$data->large)}}" class="form-control">
                        </div>
                       </div>
                       
                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="size">X Large</label>
                            <input type="text" name="x-large" value="{{old('x-large',$data['x-large'])}}" class="form-control">
                        </div>
                       </div>
                       
                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="size">XX Large</label>
                            <input type="text" name="xx-large" value="{{old('xx-large',$data['xx-large'])}}" class="form-control">
                        </div>
                       </div>
        
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
