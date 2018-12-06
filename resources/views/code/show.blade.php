@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <br>
            <div class="pull-left">
                <h2> Show Code</h2>
            </div>
            <br>
            <br>
            <div class="float-right">
            <a class="btn btn-success" href="{{ route('code.edit', $code->id) }}">Edit</a>
                <a class="btn btn-primary" href="{{ route('code.index') }}"> Back</a>
            </div>          
        </div>
    </div>
   

   <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                <label for="" class="form-control">{{ $code->name }}</label>
                
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>language:</strong>
     <label for="" class="form-control">    {{ $code->language }}</label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                <label for="" class="form-control">    {{ $code->description }}</label>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Code:</strong>
                <pre><code class="language-{{$code->language}}">
                {{ $code->code }}
                </code></pre>
            </div>
        </div>
    </div>
@endsection