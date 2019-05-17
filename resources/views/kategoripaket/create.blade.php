@extends('layouts.index')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">	
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Kategori Paket
			  	<div class="panel-title pull-right"><a class="btn btn-success" href="{{ url()->previous() }}">Batal</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('kategori_paket.store') }}" method="post" enctype="multipart/form-data">
			  		{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('kategori') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Paket</label>	
			  			<input type="text" name="kategori" class="form-control"  required> 
			  			@if ($errors->has('kategori'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<!-- <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">Foto</label>	
			  			<br>
			  			<button> Choose Files
			  			<input type="file" id="foto" name="foto" class="validate" accept="image/*" required></button>
			  			@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
					</div>
			  		 -->
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