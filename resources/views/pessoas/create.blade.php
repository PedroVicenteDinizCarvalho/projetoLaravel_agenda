@extends('template.app')

@section('content')
	<div class="col-md-12">
		<h3> Novo Contato </h3>
	</div>
	<div class="col-md-6 well">
		<form action="{{ url('pessoas/store') }}" method="POST">
		{{ csrf_field() }}
			<div class="form-group col-md-12">
				<label for="nome" class="control-label">Nome:</label>
				<input type="text" name="nome" id="nome" class='form-control' placeholder="nome:">
			</div>
			<div class="form-group col-md-12">
				<label for="ddd" class="control-label ">DDD:</label>
				<input type="text" name="ddd" id="ddd" class='form-control col-md-2' placeholder="35">
				<label for="telefone" class="control-label ">Telefone:</label>
				<input type="text" name="telefone" id="telefone" class='form-control col-md-6' placeholder="99999-9999">
			</div>
			<button style="float: right" type="submit" class="btn btn-primary">salvar</button>
		</form>
	</div>
@endsection