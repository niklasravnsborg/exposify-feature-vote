@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="small-12 column">
			<div class="panel panel-default">
				<div class="panel-heading">Exposify Funktionen</div>

				<ul class="list-group">
					@foreach($features as $feature)
						<li class="list-group-item">
							@if (Auth::check())
								<div class="row">
									<div class="small-2 end column">
										@if (!$feature->is_voted())
											<form action="/vote" method="POST">
												<input name="_token" type="hidden" value="{{ csrf_token() }}">
												<input name="feature_id" type="hidden" value="{{ $feature['id'] }}">
												<button class="btn btn-secondary btn-fill vote-btn" type="submit">Voten</button>
											</form>
										@else
											<form action="/unvote" method="POST">
												<input name="_token" type="hidden" value="{{ csrf_token() }}">
												<input name="feature_id" type="hidden" value="{{ $feature['id'] }}">
												<button class="btn vote-btn" type="submit">Entvoten</button>
											</form>
										@endif
									</div>
									<div class="small-10 column">
										<strong>{{ $feature['title'] }}</strong>
										{{ $feature['description'] }}
									</div>
								</div>
							@else
								<strong>{{ $feature['title'] }}</strong>
								{{ $feature['description'] }}
							@endif
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection
