@extends('main')


@section('title', 'Account Setting')

@section('description', 'about tweBox')

@section('content')

	<div class="uk-padding-large uk-margin-large-top">
		
		<div uk-grid>
			
			<div class="uk-width-1-6@m"></div>

			<div class="uk-width-3-5@m">
				
				<h2 class="uk-heading-primary">Settings</h2>

				<div class=" uk-margin-large-top uk-text-bold uk-text-large"><span uk-icon="icon: hashtag;ratio:1.3"></span>Privacy</div>

				{!! Form::open(['route' => 'setting.update', 'method' => "POST"]) !!}
				<div class="uk-margin uk-width uk-inline uk-margin-medium-top">
					<div class="uk-position-left uk-text-lead">Show Social Links on Profile Page </div>
					<div class="uk-position-right">
						<div class="uk-margin">
						  <label class="uk-switch">
						  	<input type="checkbox" name="show_social_link" {{ $user->show_social_links =="on" ? 'checked' : '' }}>
						  	<span class="uk-slider uk-slider-round"></span>
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="uk-margin uk-width uk-inline uk-margin-small-top">
					<div class="uk-position-left uk-text-lead">Show Email Publicly </div>
					<div class="uk-position-right">
						<div class="uk-margin">
						  <label class="uk-switch">
						  	<input type="checkbox" name="show_email_id" {{ $user->show_email_id =="on" ? 'checked' : '' }}>
						  	<span class="uk-slider uk-slider-round"></span>
						  </label>
						</div>
					</div>
				</div>
				<hr>
				<div class="uk-margin uk-width uk-inline uk-margin-small-top">
					<div class="uk-position-left uk-text-lead">Show My Achievements </div>
					<div class="uk-position-right">
						<div class="uk-margin">
						  <label class="uk-switch">
						  	<input type="checkbox" name="show_my_achieve" >
						  	<span class="uk-slider uk-slider-round"></span>
						  </label>
						</div>
					</div>
				</div>
				<hr class="uk-divider-icon">

				<div class="uk-margin-large-top uk-flex uk-flex-right">
				<a href="{{'/profile/'.Auth::user()->username}}" class="uk-button uk-button-danger uk-margin-right" >Cancel</a>
					
				{{ Form::submit('Save',['class' => 'uk-button uk-button-primary']) }}
				
				</div>

				{!! Form::close() !!}
					
			</div>

		</div>

	</div>

@endsection