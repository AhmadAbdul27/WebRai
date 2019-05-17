@extends('layouts.index')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Paket
			  	<div class="panel-title pull-right"><a class="btn btn-primary" href="{{ route('paket.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
			  		  <th>Kategori Paket</th>
					  <th>Makanan</th>
					   <th>Nama Paket</th>
					   <th>Harga </th>
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($paket as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->kategori_paket->kategori }}</td>
				    	<td>@foreach($data->makanan as $data1)<li>{{ $data1->makanan }}</li>@endforeach</td>
				    	<td>{{ $data->nama_paket }}</td>
				    	<td>{{ $data->harga }}</td>
				    	
						<td>
							<a class="btn btn-warning" href="{{ route('paket.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('paket.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
