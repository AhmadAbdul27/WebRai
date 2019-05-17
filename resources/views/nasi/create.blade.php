@extends('layouts.index')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">	
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Makanan
			  	<div class="panel-title pull-right"><a class="btn btn-success" href="{{ url()->previous() }}">Batal</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('nasi.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama_makanan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Makanan</label>	
			  			<input type="text" name="nama_makanan" class="form-control"  required> 
			  			@if ($errors->has('nama_makanan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_makanan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection