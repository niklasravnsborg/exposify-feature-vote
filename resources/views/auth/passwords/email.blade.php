@extends('layouts.app')

<!-- Main Content -->
@section('content')
	<div class="container">
		<div class="row">
			<div class="small-12 column">
				<div class="panel panel-default">
					<div class="panel-heading">Passwort zurücksetzen</div>
					<div class="panel-body">
						@if (session('status'))
							<div class="alert alert-success">
								{{ session('status') }}
							</div>
						@endif

						<form class="form" role="form" method="POST" action="{{ url('/password/email') }}">
							{!! csrf_field() !!}

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

							<div class="row">
								<div class="medium-6 medium-push-4 column">
									<button type="submit" class="btn btn-secondary btn-fill">
										<i class="fa fa-btn fa-envelope"></i>Link zum Passwort-Zurücksetzen senden
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
