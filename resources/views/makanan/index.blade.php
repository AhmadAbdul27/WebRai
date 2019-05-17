@extends('layouts.index')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Makanan
			  	<div class="panel-title pull-right"><a class="btn btn-primary" href="{{ route('makanan.create') }}">Tambah</a>
			  	</div>
			  </div>

			  <div class="col-md-3 col-lg-auto float-left">
			  	<form method="GET" action="makan" class="" rolr="search">
			  		<div class="input-group custom-search-form">
			  			<input type="text" name="search" class="form-control" placeholder="Search....">
			  			<span class="input-group-btn">
			  				<button type="submit" class="btn btn-default-sm">
			  					<i class="fa fa-search"></i>
			  				</button>
			  			</span>
			  		</div>
			  	</form>

			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Kategori Makanan</th>
					   <th>Nama Makanan </th>
					   <th>Gambar</th>
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($makanan as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->kategori_makanan->kategori_makanan }}</td>
				    	<td>{{ $data->makanan }}</td>
				    	<td><img src="{{asset('assets/hangout/img/'.$data->foto )}}" style="max-height:60px; max-width: 60px; margin-top: 6px;">
				    	</td>
						<td>
							<a class="btn btn-warning" href="{{ route('makanan.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('makanan.destroy',$data->id) }}">
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