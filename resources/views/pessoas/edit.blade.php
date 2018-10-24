@extends('template.app')

@section('content')
	<div class="col-md-12">
		<h1>Atualizar Contato:</h1>
	</div>
	<div class="col-md-6 well">
		<form action="{{ url('/pessoas/update') }}" method="POST">
		{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $pessoa->id }}">
			<div class="form-group col-md-12 {{ $errors->has('nome') ? 'has-error' : '' }}">
				<label for="nome" class="control-label">Nome:</label>
				<input type="text" value="{{ $pessoa->nome }}" name="nome" id="nome" class='form-control' placeholder="nome:">
				@if($errors->has('nome'))
					<span class="help-block">
						{{ $errors->first('nome') }}
					</span>
				@endif
			</div>
			<button style="float: right" type="submit" class="btn btn-primary">salvar</button>
		</form>
		<div class="card col-md-12" style="top: 50px">
            <div class="card-header">
              <h6 class="col-md-2">{{ $pessoa->id }}</h6>
              <h6 class="card-title col-md-12">{{ $pessoa->nome }}</h6>
            </div>
      		<div class="card-body">
        		<p><strong>Contato:</strong>
        			@foreach($pessoa->telefones as $telefone)
        		</p><p class="card-text">({{$telefone->ddd}})-{{$telefone->telefone}}</p>
        			@endforeach
      		</div>
    	</div>
	</div>
@endsection