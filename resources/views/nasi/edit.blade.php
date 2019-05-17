@extends('layouts.index')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Makanan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Batal</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('nasi.update',$nasi->id)}}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama_makanan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama makanan</label>	
			  			<input type="text" name="nama_makanan" class="form-control" value="{{ $nasi->nama_makanan }}"  required> 
			  			@if ($errors->has('nama_makanan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_makanan') }}</strong>
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