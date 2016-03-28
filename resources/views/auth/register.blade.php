@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="small-12 column">
			<div class="panel panel-default">
				<div class="panel-heading">Registrieren</div>
				<div class="panel-body">
					<form class="form" role="form" method="POST" action="{{ url('/register') }}">
						{!! csrf_field() !!}

						<div class="row{{ $errors->has('fullname') ? ' has-error' : '' }}">
							<div class="medium-4 column">
								<label>Name</label>
							</div>

							<div class="medium-6 end column">
								<input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}">

								@if ($errors->has('fullname'))
									<span class="help-block">
										<strong>{{ $errors->first('fullname') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="row{{ $errors->has('email') ? ' has-error' : '' }}">
							<div class="medium-4 column">
								<label>E-Mail Adresse</label>
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
								<label>Passwort</label>
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

						<div class="row{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							<div class="medium-4 column">
								<label>Passwort wiederholen</label>
							</div>

							<div class="medium-6 end column">
								<input type="password" class="form-control" name="password_confirmation">

								@if ($errors->has('password_confirmation'))
									<span class="help-block">
										<strong>{{ $errors->first('password_confirmation') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="row">
							<div class="medium-6 medium-offset-4 column">
								<button type="submit" class="btn btn-secondary btn-fill">
									<i class="fa fa-btn fa-user"></i>Registrieren
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
