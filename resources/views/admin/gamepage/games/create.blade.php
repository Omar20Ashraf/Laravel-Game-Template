@extends('admin.layout.admin')

@section('content')
	
<h3>Add Games Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>'game.store','method'=>'Post','files'=>true]) !!}

			<div class="form-group">
				{{ Form::label('name','Name') }}
				{{ Form::text('name',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('par','Par') }}
				{{ Form::text('par',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('review','Review') }}
				{{ Form::text('review',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('image','Image') }}
				{{ Form::file('image',['class'=>'form-control']) }}
			</div>

			{{ Form::submit('Create',array('class'=>'btn btn-default')) }}	

		{!! Form::close() !!}

	</div>
</div>
@endsection