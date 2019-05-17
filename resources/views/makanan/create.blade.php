@extends('layouts.index')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"> Tambah Data Makanan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Batal</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('makanan.store') }}" method="post" enctype="multipart/form-data" >
			  		{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('makanan') ? ' has-error' : '' }}">
			  			<label class="control-label">Makanan</label>	
			  			<input type="text" name="makanan" class="form-control"  required>
			  			@if ($errors->has('makanan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('makanan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('id_kategori_makanan') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Makanan</label>	
			  			<select name="id_kategori_makanan" class="form-control">
			  				@foreach($kategori_makanan as $data)
			  				<option value="{{ $data->id }}">{{ $data->kategori_makanan }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_kategori_makanan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kategori_makanan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
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
@section('js')
<script type="text/javascript">
	function addrow(){
		var no = $('input').length;
		var html = '';
		html += '<input type="text" id="makanan" name="makanan[]" class="form-control" required>';
		$('#last').after(html);
	}
</script>
@endsection