@extends('template.app')

@section('content')
	<div class="row">
		@foreach($pessoas as $pessoa)
			<div class="col-sm-3">
   				<div class="card">
      				<div class="card-body">
        				<h5 class="card-title">{{ $pessoa->nome }}</h5>
        				<p><strong>Contato:</strong>
        				@foreach($pessoa->telefones as $telefone)
        				</p><p class="card-text">({{$telefone->ddd}})-{{$telefone->telefone}}</p>
        				@endforeach
        				<a href="#" class="btn btn-primary">Go somewhere</a>
      				</div>
    			</div>
 			</div>
		@endforeach
	</div>
@endsection