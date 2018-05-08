@extends('template.app')

@section('content')
	<h2>Excluir Pessoa</h2>
	<div class="row">
		<div class="col-md-5">
			<h5>Deseja mesmo excluir o contato?</h5>
			<div style="float: right;">
				<a href="{{ url("/pessoas") }}" class="btn btn-priamry">
					<strong>Voltar</strong>
					<i style="position: relative; top: 5px;" class="material-icons">arrow_back</i>
				</a>
				<a style="margin-right: 40px;" href="{{ url("pessoas/$pessoa->id/destroy") }}" class="btn btn-danger">
					<strong>Excluir</strong>
					<i style="position: relative; top: 5px;" class="material-icons">close</i>
				</a>
			</div>
		</div>
		<div class="card col-md-4" style="top: 50px">
    	    <div class="card-header">
    	        <h6 class="col-md-2">{{ $pessoa->id }}</h6>
    	        <h6 class="card-title col-md-12">{{ $pessoa->nome }}</h6>
    	    </div>
   	 	  	<div class="card-body">
    	    	<p><strong>Contato:</strong></p>
    	    	@foreach($pessoa->telefones as $telefone)
    	    		<p class="card-text">({{$telefone->ddd}})-{{$telefone->telefone}}</p>
    	    	@endforeach
   	 	  	</div>
    	</div>
    </div>
@endsection