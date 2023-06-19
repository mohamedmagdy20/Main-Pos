@extends('dashboard.layouts.app')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Products</h4>
                <p class="card-description">
                    Add Products
                </p>
                <form class="forms-sample" action="{{ route('gum.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="code">Code</label>
                                <input type="text" name="code" class="form-control" id="code" >
                            </div>
                        </div>
                        
                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="size">Name</label>
                            <input type="text" name="small" class="form-control">
                        </div>
                       </div>
                       <div class="col-md-12">
                        <div class="form-group">
                            <label for="size">Image</label>
                            <input type="file" name="image" id="choose-file" class="form-control">
                        </div>
                       </div>

                       <div id="img-preview"></div>
                       
                       <div class="col-md-12">
                        <div class="form-group">
                            <label for="size">Gums</label>
                            <select name="gums" class="form-control" id="">
                                @foreach ($gums as $d )
                                <option value="{{$d->id}}">{{$d->code}}</option>
                                @endforeach
                            </select>
                        </div>
                       </div>
                       
                       <div class="col-md-12">
                        <div class="form-group">
                            <label for="size">Lines</label>
                            <select name="gums" class="form-control" id="">
                                @foreach ($lines as $d )
                                <option value="{{$d->id}}">{{$d->title}}</option>
                                @endforeach
                            </select>
                        </div>
                       </div>
                       
                       <div class="col-md-12">
                        <div class="form-group">
                            <label for="size">Fabrics</label>
                            <select name="gums" class="form-control" id="">
                                @foreach ($f as $d )
                                <option value="{{$d->id}}">{{$d->name}}</option>
                                @endforeach
                            </select>
                         
                        </div>
                       </div>

                       <div class="col-md-12">
                        <div class="form-group">
                            <label for="size">Notes</label>
                            <textarea name="notes" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                       </div>
                    </div>
           
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('gum.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@stop
@section('js')
@stop
