@extends('layouts.app')

<style>
	#img{
		height: 200px;
		width: auto;
		display: block;
		padding: 20px;
	    margin-left: auto;
	    margin-right: auto;
	}
</style>
 
@section('content')
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Code Snippet Database</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('code.create') }}"> Create New Code Snippet</a>
            </div>
        </div>
    </div>
   <br>
   <div class="row">
   	<div class="col-md-8">
    	<a class="btn btn-primary" href="{{ route('code.index') }}"> 	View All</a>
    	<a class="btn btn-success" href="/filter_code/html"> Html</a>
    	<a class="btn btn-success" href="/filter_code/css"> Css</a>
    	<a class="btn btn-success" href="/filter_code/javascript"> JavaScript</a>
    	<a class="btn btn-success" href="/filter_code/php"> PHP</a>
    	<a class="btn btn-success" href="/filter_code/jquery"> JQuery</a>
    	<a class="btn btn-success" href="/filter_code/css"> Css</a>
    	<a class="btn btn-success" href="/filter_code/css"> Css</a>
		<a class="btn btn-success" href="/filter_code/css"> Css</a>
   	</div>
   </div>
   <br>

		
	<div class="container">
		<div class="row">
		@foreach($code as $c)
			<div class="col-md-4">
				<div class="card text-center">
				  <div class="card-header">
				    {{$c->name}}
				  </div>
				<a href=" {{route('code.show', $c->id)}} ">
					<img class="card-img-top " src="/img/{{$c->language}}.png" id="img" alt="Card image cap">
				</a>
					
					<div class="card-body ">
						<p>{{$c->description}}</p>
					</div>
					 <div class="card-footer text-muted">
        				<form action="{{ route('code.destroy', $c->id) }}" method="POST">
	   
		                    <a class="btn btn-info" href="{{ route('code.show',$c->id) }}">Show</a>
		    
		                    <a class="btn btn-primary" href="{{ route('code.edit',$c->id) }}">Edit</a>
		   
		                    @csrf
		                    @method('DELETE')
		      
		                    <button type="submit" class="btn btn-danger">Delete</button>
                		</form>
  					</div>
				</div>
				<br><br>
			</div>	
		@endforeach
			</div>					

	</div>
  
    {!! $code->links() !!}
      
@endsection