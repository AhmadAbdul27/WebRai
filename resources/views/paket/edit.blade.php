@extends('layouts.index')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Paket
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Batal</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('paket.update',$paket->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}

			  		<div class="form-group {{ $errors->has('id_kategori_paket') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Paket</label>	
			  			<select name="id_kategori_paket" class="form-control">
			  				@foreach($kategori_paket as $data)
			  				<option value="{{ $data->id }}">{{ $data->kategori }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_kategori_paket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kategori_paket') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_paket') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Paket</label>	
			  			<input type="text" name="nama_paket" class="form-control" value="{{ $paket->nama_paket }}" required>
			  			@if ($errors->has('nama_paket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_paket') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_makanan') ? ' has-error' : '' }}">
			  			<label class="control-label">Makanan</label>	
			  			<select name="id_makanan[]" class="form-control js-example-basic-multiple" multiple="multiple" value="{{ $paket->id_makanan }}">
			  				@foreach($makanan as $data)
			  				<option value="{{ $data->id }}" {{ (in_array($data->id,$selected)) ? 'selected="selected"' : ''}} >{{ $data->makanan }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_makanan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_makanan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $paket->harga }}" required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
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