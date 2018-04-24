@extends('template.app')

@section('content')
	<div class="row">
		@foreach($pessoas as $pessoa)
			<div class="col-sm-3">
   				<div class="card">
      				<div class="card-body">
        				<h5 class="card-title">{{ $pessoa->nome }}</h5>
        				@foreach($pessoa->telefones as $telefone)
        				<p class="card-text"><strong>Contato:</strong> ({{$telefone->ddd}})-{{$telefone->telefone}}</p>
        				<a href="#" class="btn btn-primary">Go somewhere</a>
        				@endforeach
      				</div>
    			</div>
 			</div>
		@endforeach
	</div>
@endsection