@extends('layouts.index')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"> Tambah testimoni
			  	<div class="panel-title pull-right"><a class="btn btn-success" href="{{ url()->previous() }}">Batal</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('testimoni.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama_pelanggan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama pelanggan</label>	
			  			<input type="text" name="nama_pelanggan" class="form-control"  required>
			  			@if ($errors->has('nama_pelanggan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_pelanggan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('testi') ? ' has-error' : '' }}">
			  			<label class="control-label">Testimoni</label>	
			  			<textarea type="text" name="testi" class="form-control"  required></textarea>
			  			@if ($errors->has('testi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('testi') }}</strong>
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