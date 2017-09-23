@extends('main')

@section('title' , " Blogs ")

@section('description',' blogs category')

@section('content')

	<div class="uk-container uk-padding-large">
		
		@foreach($categories as $category)

			<h2 class="uk-text-large">{{ $category->id }}</h2>

		@endforeach

	</div>

@endsection