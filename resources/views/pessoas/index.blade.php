@extends('template.app')

@section('content')
	<div class="row">
		@foreach($pessoas as $pessoa)
			<div class="col-sm-3">
   				<div class="card">
            <div class="card-header">
              <i class="material-icons">assignment_ind</i>
              <h6 class="card-title col-md-12">{{ $pessoa->nome }}</h6>
            </div>
      				<div class="card-body">
                 <a style="float: right; margin-left: 5px; margin-bottom: 40px;" href="{{ url("/pessoas/$pessoa->id/excluir") }}" class="btn btn-xs btn-danger col-md-3">
                  <i class="material-icons deletef">delete</i>  
                </a>
                <a style="float: right;" href="{{ url("/pessoas/$pessoa->id/editar") }}" class="btn btn-xs btn-primary col-md-3">
                  <i class="material-icons create">create</i>  
                </a>
        				<p><strong>Contato:</strong>
        				@foreach($pessoa->telefones as $telefone)
        				</p><p class="card-text">({{$telefone->ddd}})-{{$telefone->telefone}}</p>
        				@endforeach
      				</div>
    			</div>
 			</div>
		@endforeach
	</div>
@endsection