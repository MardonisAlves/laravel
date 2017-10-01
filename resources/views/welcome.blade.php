@extends('layouts.navbarWelcome')
@section('content')


     <div class="col-sm-9 col-md-9">
     <div class="well">
 
    @foreach($Fileupload as $modulo5)

	<div  class="col-md-3" id="align">
		<h4 class="text-info">{{$modulo5->nome}}</h4>
		<h5>Valor{{ $modulo5->precocompra / 100 *  $modulo5->taxajuros +  $modulo5->precocompra }}R$Avista</h5>
		<img src="{{asset('/img/'.$modulo5->url_image)}}" height="120px" width="120px">
		
	</div>
	@endforeach
	
            </div>
        </div>
    </div>
</div>
@stop