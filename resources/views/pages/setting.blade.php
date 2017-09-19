@extends('main')


@section('title', 'Account Setting')

@section('description', 'about tweBox')

@section('content')

	<div class="uk-padding-large">
		
		<div uk-grid>
			
			<div class="uk-width-1-6@m"></div>

			<div class="uk-width-3-5@m">
				
				<h2 class="uk-heading-primary">Heading</h2>
				<hr>
				<div class="uk-margin uk-width uk-inline">
					<div class="uk-position-left uk-text-lead">Text</div>
					<div class="uk-position-right">
						<div class="ui toggle checkbox">
						  <label>Subscribe to weekly newsletter</label>
						  <input  type="checkbox" name="public">
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

@endsection