@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Features Exposify</div>

					<ul class="list-group">
						@foreach($features as $feature)
							<li class="list-group-item">
								<strong>{{ $feature['title'] }}</strong>
								{{ $feature['description'] }}
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection
