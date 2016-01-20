@extends('master')

@section('override-css')
	{!! Html::style('lib\remodal\dist\remodal.css') !!}
	{!! Html::style('lib\remodal\dist\remodal-default-theme.css') !!}
@endsection


@section('content')

	<div class="container">
		<div class="jumboron">
			<hr/>
			<h2 class="text-primary">Take Survey</h2>
			<button class="btn btn-lg btn-primary" data-remodal-target="modal">Start</button>
		</div>
	</div>

@endsection

@section('modal')
	<div class="remodal" data-remodal-id="modal">
	  <button data-remodal-action="close" class="remodal-close"></button>
	  <h1 class="text-success">{{ HTML::image('img/survey.png') }}  Rekta</h1>
	
	  {!! Form::open(array('url' => 'survey/save')) !!}
	  	<p>We would like to asks you some question.</p>
	  	<div class="form-group">
	  		
	  		{!! Form::label('email', 'E-Mail Address'); !!}
	  		{!! Form::text('email', '', array('class' => 'form-control', 'name' => 'eadd')); !!}

	  	</div>

	  	<br>

	  	<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
	  	{!! Form::submit('Submit', array('class' => 'remodal-confirm')) !!}
	   
	   {!! Form::close() !!}

	</div>
	
@endsection

@section('override-js')
	{{ HTML::script('lib/remodal/dist/remodal.min.js') }}
	{{ HTML::script('js/custom.js') }}
@endsection