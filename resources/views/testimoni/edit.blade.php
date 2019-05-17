@extends('layouts.index')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit testimoni
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Batal</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('testimoni.update',$testimoni->id)}}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama_pelanggan') ? ' has-error' : '' }}">
			  			<label class="control-label">Masukan Nama pelanggan</label>	
			  			<input type="text" name="nama_pelanggan" class="form-control"  required>{{ $testimoni->nama_pelanggan }} 
			  			@if ($errors->has('nama_pelanggan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_pelanggan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('testi') ? ' has-error' : '' }}">
			  			<label class="control-label">Masukan Testimoni</label>	
			  			<textarea name="testi" class="form-control" required>{{ $testimoni->testi }}</textarea> 
			  			@if ($errors->has('testi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('testi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Perbarui</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection