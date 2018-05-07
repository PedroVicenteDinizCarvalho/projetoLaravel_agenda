@extends('template.app')

@section('content')
	<div class="col-md-12">
		<h1>Atualizar Contato:</h1>
	</div>
	<div class="col-md-6 well">
		<form action="{{ url('/pessoas/update') }}" method="POST">
		{{ csrf_field() }}
			<div class="form-group col-md-12">
				<label for="nome" class="control-label">Nome:</label>
				<input type="text" name="nome" id="nome" class='form-control' placeholder="nome:">
			</div>
			<button style="float: right" type="submit" class="btn btn-primary">salvar</button>
		</form>
	</div>
@endsection