@extends('template.app')

@section('content')
	<div class="col-md-12">
		<h3> Novo Contato </h3>
	</div>
	<div class="col-md-6 well">
		<form action="{{ url('pessoas/store') }}" method="POST">
		{{ csrf_field() }}
			<div class="form-group col-md-12 {{ $errors->has('nome') ? 'has-error' : '' }}">
				<label for="nome" class="control-label">Nome:</label>
				<input type="text" name="nome" value="{{ old('nome') }}" id="nome" class='form-control' placeholder="nome:">
				@if($errors->has('nome'))
					<span class="help-block">
						{{ $errors->first('nome') }}
					</span>
				@endif
			</div>
			<div class="form-group col-md-4 {{ $errors->has('ddd') ? 'has-error' : '' }}">
				<label for="ddd" class="control-label ">DDD:</label>
				<input type="text" value="{{ old('ddd') }}" name="ddd" id="ddd" class='form-control col-md-2' placeholder="35">
				@if($errors->has('ddd'))
					<span class="help-block">
						{{ $errors->first('ddd') }}
					</span>
				@endif
			</div>
			<div class="form-group col-md-8 {{ $errors->has('telefone') ? 'has-error' : '' }}"> 
				<label for="telefone" class="control-label ">Telefone:</label>
				<input type="text" name="telefone" id="telefone" class='form-control col-md-6' value="{{ old('telefone') }}" placeholder="99999-9999">
				@if($errors->has('telefone'))
					<span class="help-block">
						{{ $errors->first('telefone') }}
					</span>
				@endif
			</div>
			<button style="float: right" type="submit" class="btn btn-primary">salvar</button>
		</form>
	</div>
@endsection