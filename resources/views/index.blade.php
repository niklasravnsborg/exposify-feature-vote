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
								<form action="/vote" method="POST">
									<input name="_token" type="hidden" value="{{ csrf_token() }}">
									<input name="feature_id" type="hidden" value="{{ $feature['id'] }}">
									<button class="btn btn-primary" type="submit">Vote</button>
								</form>
								<form action="/unvote" method="POST">
									<input name="_token" type="hidden" value="{{ csrf_token() }}">
									<input name="feature_id" type="hidden" value="{{ $feature['id'] }}">
									<button class="btn" type="submit">UnVote</button>
								</form>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection
