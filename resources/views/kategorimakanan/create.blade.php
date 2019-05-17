@extends('layouts.index')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">	
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Kategori Makanan
			  	<div class="panel-title pull-right"><a class="btn btn-success" href="{{ url()->previous() }}">Batal</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('kategori_makanan.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('kategori_makanan') ? ' has-error' : '' }}">
			  			<label class="control-label">kategori Makanan</label>	
			  			<input type="text" name="kategori_makanan" class="form-control"  required> 
			  			@if ($errors->has('kategori_makanan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori_makanan') }}</strong>
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