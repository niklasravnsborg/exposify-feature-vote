@extends('layouts.app')

@section('content')
	<main class="main-content row">
		<div class="small-12 column">
			<p>
				Wir entwickeln Exposify ständig weiter und möchten wissen,
				welche Funktionen Du in Zukunft noch benötigst.
				Melde Dich an und vote auf die Fuktionen, die für
				Dich und Dein Unternehmen wichtig sind.
			</p>
			<div class="panel panel-default">
				<div class="panel-heading">Exposify Funktionen</div>

				<ul class="list-group">
					@foreach($features as $feature)
						<li class="list-group-item">
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
						</li>
					@endforeach
				</ul>
			</div>
			Was fehlt Dir hier noch an Funktionalitäten?
			Sende Deine Idee per E-Mail an <a href="&#109;&#97;&#105;&#x6c;&#x74;&#111;&#x3a;&#105;&#110;&#x66;&#111;&#64;&#x65;&#120;&#112;&#111;&#x73;&#x69;&#102;&#121;&#x2e;&#x64;&#x65;">&#105;&#x6e;&#x66;&#x6f;&#x40;&#x65;&#x78;&#112;&#111;&#x73;&#x69;&#x66;&#121;&#x2e;&#100;&#x65;</a>.
		</div>
	</main>
@endsection
