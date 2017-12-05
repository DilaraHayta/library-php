 @extends('layout.main')

 @section('content')
     <div class="row">
     <div class="col-md-4 col-md-offset-4">
         {{Form::open(array('url'=>'login','method'=>'post'))}}
         <div class="form-group">
             {{Form::label('username','Username')}}
             {{Form::text('username',null,array("class"=>'form-control'))}}
         </div>

         <div class="form-group">
             {{Form::label('password','Password')}}
             {{Form::password('email',array("class"=>'form-control'))}}
         </div>

         {{Form::submit('Log In',array("class"=>'btn btn-primary'))}}
     </div>
         {{Form::close()}}
     </div>
     @stop