@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <br>
            <div class="pull-left">
                <h2>Edit Code</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('code.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
  
    <form action="{{ route('code.update',$code->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $code->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $code->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Code:</strong>
                    <textarea class="form-control" style="height:550px" name="code" placeholder="Code">{{ $code->code }}</textarea>
                </div>
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Language:</strong>
                    <select name="language">
                      <option value="html" <?= (($code->language == 'html')?'selected': '' ); ?>>HTML</option>
                      <option value="css" <?= (($code->language == 'css')?'selected': '' ); ?>>CSS</option>
                      <option value="php" <?= (($code->language == 'php')?'selected': '' ); ?>>PHP</option>
                      <option value="jquery" <?= (($code->language == 'jquery')?'selected': '' ); ?>>JQUERY</option>
                      <option value="js" <?= (($code->language == 'js')?'selected': '' ); ?>>JS</option>
                       <option value="laravel" <?= (($code->language == 'laravel')?'selected': '' ); ?>>Laravel</option>
                    </select>
                </div>
            </div>          
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>


@endsection