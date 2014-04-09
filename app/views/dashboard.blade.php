Logged in!


<div class="span12 well">
   {{ Form::open(array('url' => '/upload', 'method' => 'post', 'files'=> true)) }}

     {{ Form::file('image') }}
     <br>
     {{ Form::submit('Add Photo', array('class' => 'btn btn-primary' )) }}
   {{ Form::close() }}
   <br><br>
</div>