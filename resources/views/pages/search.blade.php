@extends('main')

@section('title', '')

@section('description' , 'tweblog ,best blogging sites ')

@section('content')


<div class="uk-padding-large">
	
	<div uk-grid>
		<div class="uk-width-1-5@m"></div>
		<div class="uk-width-3-5@m">
			<h1 class="uk-heading-primary">Search result...</h1>
			<hr>

			<dl class="uk-description-list uk-description-list-divider">
			    

			@forelse($results as $result)

				<dt><h2 class="uk-text-large">
					<a class="uk-link-reset" href="{{ route('blog.single', $result->slug) }}" title="{{ $result->title }}">
				 {{ substr(strip_tags($result->title), 0 ,60) }} {{ strlen( strip_tags($result->title )) >30 ? '...' : '' }}
				 </a>
				</h2></dt>
			    <dd> {{ substr(strip_tags($result->body), 0 ,100) }} {{ strlen(strip_tags($result->body)) >250 ? '...' : '' }}<a href="{{ route('blog.single', $result->slug) }}">read more.</a> </dd>

			@empty

				<p>No result found...</p>
			@endforelse

			</dl>

			<p>{{ $results->links() }}</p>
		</div>
	</div>

</div>

@endsection