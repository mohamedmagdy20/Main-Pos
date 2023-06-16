@extends('dashboard.layouts.app')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Fibrics</h4>
                <p class="card-description">
                    Edit Fibrics
                </p>
                <form class="forms-sample" action="{{ route('fabrics.update',$data->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="code">Title</label>
                                <input type="text" name="name" value="{{old('name',$data->name)}}" class="form-control" id="title" >
                            </div>
                        </div>
                        
                       
                       <div class="col-md-12">
                        <div class="form-group">
                            <label for="size">Notes</label>
                            <textarea name="notes" class="form-control" id="" cols="30" rows="10">{{old('note',$data->note)}}</textarea>
                        </div>
                       </div>
        

                    </div>
           
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('line.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@stop
@section('js')
@stop
