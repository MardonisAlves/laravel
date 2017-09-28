@extends('layouts.navbarWelcome')
@section('content')
<div  class="row-fluid">
<div class="col-md-12 cor">
		<div  class="col-md-3">
			@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
				<h4 class="text-info">Administrador</h4>
				<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4"></label>
							<input type="email" class="form-control" placeholder="Seu E-mail" name="email" required="required" value="{{ old('email') }}">
							
						</div>

						<div class="form-group">
							<label class="col-md-4"></label>
								<input type="password" placeholder="Password"required="required" class="form-control" name="password">
						</div>

						<div class="form-group">
							
								<button type="submit" class="btn-primary">Login</button>
							
						</div>
					</form>
		</div>
	
		
		
		<div class="col-md-3 ">
			<h4 class="text-info">Serviços</h4>
			<ul>
				@if(isset($menur))
				@foreach($menur as $men)
					<li><a href="{{route('servico')}}">{{$men->name}}</a></li>
				@endforeach
				@endif
				
			</ul>
		
			
		</div>

		
</div>
</div>	
<div class="container row-fluid">	
	<div class="col-md-12">

	</div>
	@if(isset($Filemodulo5))
	@foreach($Filemodulo5 as $modulo5)
	<div  class="col-md-3" id="align">
		<h4 class="text-info">{{$modulo5->title}}</h4>
		<img src="{{asset('/img/'.$modulo5->filename)}}">
		<p>{{$modulo5->descricao}}</p>
	</div>
	@endforeach
	@endif
	@if(isset($Filemodulo6))
	@foreach($Filemodulo6 as $modulo6)
	<div  class="col-md-3" id="align">
		<h4 class="text-info">{{$modulo6->title}}</h4>
		<img src="{{asset('/img/'.$modulo6->filename)}}">
		<p>{{$modulo6->descricao}}</p>
	</div>
	@endforeach
	@endif

	@if(isset($Filemodulo7))
	@foreach($Filemodulo7 as $modulo7)
	<div  class="col-md-3" id="align">
		<h4 class="text-info">{{$modulo7->title}}</h4>
		<img src="{{asset('/img/'.$modulo7->filename)}}">
		<p>{{$modulo7->descricao}}</p>
	</div>
	@endforeach
	@endif
	@if(isset($Filemodulo8))
	@foreach($Filemodulo8 as $modulo8)
	<div  class="col-md-3" id="align">
		<h4 class="text-info">{{$modulo8->title}}</h4>
		<img src="{{asset('/img/'.$modulo8->filename)}}">
		<p>{{$modulo8->descricao}}</p>
	</div>
	@endforeach
	@endif
</div>

@stop