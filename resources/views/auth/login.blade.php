@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="small-12 column">
			<div class="panel panel-default">
				<div class="panel-heading">Anmelden</div>
				<div class="panel-body">
					<form class="form" role="form" method="POST" action="{{ url('/login') }}">
						{!! csrf_field() !!}

						<div class="row{{ $errors->has('email') ? ' has-error' : '' }}">
							<div class="medium-4 column">
								<label class="control-label">E-Mail Adresse</label>
							</div>

							<div class="medium-6 end column">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">

								@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="row{{ $errors->has('password') ? ' has-error' : '' }}">
							<div class="medium-4 column">
								<label class="control-label">Passwort</label>
							</div>

							<div class="medium-6 end column">
								<input type="password" class="form-control" name="password">

								@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="row">
							<div class="medium-6 medium-offset-4 column">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember">Angemeldet bleiben
									</label>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="medium-10 medium-offset-4 column">
								<button type="submit" class="btn btn-secondary btn-secondary-fill">
									<i class="fa fa-btn fa-sign-in"></i>Anmelden
								</button>

								<a class="btn btn-secondary" href="{{ url('/password/reset') }}">Passwort vergessen?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
