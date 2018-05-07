@extends('template.app')

@section('content')
	<div class="row">
		@foreach($pessoas as $pessoa)
			<div class="col-sm-3">
   				<div class="card">
            <div class="card-header">
              <h6 class="col-md-2">{{ $pessoa->id }}</h6>
              <h6 class="card-title col-md-12">{{ $pessoa->nome }}</h6>
            </div>
      				<div class="card-body">
                <a style="float: right;" href="{{ url("/pessoas/$pessoa->id/editar") }}" class="btn btn-xs btn-primary col-md-3">
                  <i class="material-icons create">create</i>  
                </a>
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