@extends('template.app')

@section('content')
  <div class="col-sm-12">
    <div class="btn-group btn-group-justified">
      @foreach(range('A', 'Z') as $letra)
          <a href="{{ url('pessoas/' . $letra) }}" class="btn btn-primary {{ $letra === $criterio ? 'disabled' : '' }}">
            {{ $letra }}
          </a>
      @endforeach
    </div>
  </div>
<!-- Pesquisa por Letra ou Nome -->
  <div class="col-md-12 row">
    <h1 class="col-md-9"> Critério: {{ $criterio }} </h1>
    <div class="col-md-3 input-group">
      <form action="{{ url('/pessoas/busca') }}" method="POST">
        {{ csrf_field() }}
        <input style="margin-top: 50px;" name="criterio" type="text" class="form-control" placeholder="Buscar...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit"><i class="material-icons">search</i></button>
        </span>
      </form>
    </div>
  </div>

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
                  <i class="material-icons delete">delete</i>  
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