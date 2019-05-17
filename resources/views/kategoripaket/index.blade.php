@extends('layouts.index')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Kategori Paket
			  	<div class="panel-title pull-right"><a class="btn btn-primary" href="{{ route('kategori_paket.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Kategori Paket </th>
			  		  <!-- <th>Gambar</th> -->
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($kategori_paket as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->kategori }}</td>
				    	<!-- <td><img src="{{asset('assets/hangout/img/'.$data->foto )}}" style="max-height:60px; max-width: 60px; margin-top: 6px;">
				    	</td> -->
						<td>
							<a class="btn btn-warning" href="{{ route('kategori_paket.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('kategori_paket.destroy',$data->id) }}">
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