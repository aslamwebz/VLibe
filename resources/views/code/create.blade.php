@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
    <br>
        <div class="pull-left">
            <h2>Add New Code</h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('code.index') }}"> Back</a>
        </div>
        <br>
    </div>
</div>
   
   
<form action="{{ route('code.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:50px" name="description" placeholder="Detail"></textarea>
            </div>
        </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Code:</strong>
                <textarea class="form-control" style="height:550px" name="code" placeholder="Code"></textarea>
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Language:</strong>
                    <select name="language">
                      <option value="html" >HTML</option>
                      <option value="css" >CSS</option>
                      <option value="php" >PHP</option>
                      <option value="jquery" >JQUERY</option>
                      <option value="js" >JS</option>
                       <option value="laravel" >Laravel</option>
                    </select>
                </div>
            </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection