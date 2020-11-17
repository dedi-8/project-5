@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data Register
					</div>
					<div class="card-body">
						<h4>{{$register->nama}}</h4><hr>
						<p>
							{{"@".$register->username}} |
							Email : {{$register->email}} |
						</p>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection