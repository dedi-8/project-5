@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Edit Data Promo
						<form action="{{url('promo', $promo->id)}}" method="post">
							@csrf
							@method('PUT')
					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">Nama</label>
						<input type="text" name="nama" class="form-control" value="{{$promo->nama}}">
					</div>

					<div class="form-group">
						<label class="control-label" for="">Harga</label>
						<input type="text" name="harga" class="form-control" value="{{$promo->harga}}">
					</div>

						<div class="form-group">
							<label class="control-label" for="">Stok</label>
							<input type="text" name="stok" class="form-control" value="{{$promo->stok}}">
						</div>
						<div class="form-group">
							<label class="control-label" for="">Deskripsi</label>
							<input type="text" name="deskripsi" class="form-control" value="{{$promo->deskripsi}}">
						</div>
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection