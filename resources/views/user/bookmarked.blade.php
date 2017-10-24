@extends('main')

@section('title', '')

@section('description' , 'tweblog ,best blogging sites ')

@section('content')

<div class="uk-container uk-margin-xlarge-top">
	<h1 class="uk-heading-primary">Bookmark List</h1>

	<div class="uk-container">

		<div uk-grid>
		<div class="uk-width-1-5@m"></div>
		<div class="uk-width-3-5@m">
		
		@foreach($myBookmarks as $myBookmark)

			<div class="uk-card uk-card-default uk-margin">
	          <div class="uk-card-header uk-padding-small">
	              <h1 class="uk-card-title uk-text-uppercase"><a class="uk-link-reset" href="#">
	              	{{ substr(strip_tags($myBookmark->title), 0 ,50) }} {{ strlen( strip_tags($myBookmark->title )) >30 ? '...' : '' }}
	              </a> </h1>
	              <span class="uk-badge uk-text-center uk-align-right"><a class="uk-link-reset" href="{{'/categories/'.$myBookmark->category->id }}">{{ $myBookmark->category->name }}</a></span>
	              <div class="uk-grid-small uk-flex-middle" uk-grid>
	                  <div class="">
	                      <img class="uk-border-circle uk-icon uk-icon-image" width="30" height="30" src="../images/user-profile/1494097628.jpg">
	                  </div>
	                  <div class="uk-text-left">
	                    <h3 class="uk-text-small uk-margin-remove-bottom"><a class="uk-link-reset" href="{{ '/profile/'. $myBookmark->user_id }}">{{ $myBookmark->user->name }}</a></h3>
	                      <p class="uk-text-meta uk-margin-remove-top"><time>{{ $myBookmark->created_at->format('d.m.y') }}</time></p>
	                  </div>
	                  <div >
	                      <p class="uk-text-right"><a uk-icon="icon: clock; ratio: 0.6"></a><span class="uk-text-meta uk-text-small"> 3min</span></p>
	                  </div>
	              </div>
	          </div>
	          <div class="uk-card-body">
	            <div class="uk-background-blend-darken uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url({{$myBookmark->featured_image}});">

	            </div>
	              <p>{{ substr(strip_tags($myBookmark->body), 0 ,100) }} {{ strlen(strip_tags($myBookmark->body)) >250 ? '...' : '' }} <a href="{{ route('blog.single', $myBookmark->slug) }}">read more.</a></p>
	          </div>
	          <div class="uk-card-footer">
	            <div class="uk-grid-small uk-child-width-1-4" uk-grid>

		          <favorite :post= {{ $myBookmark->id }} :favorited= {{ $myBookmark->favorited() ? 'true' : 'false' }}
	                :likes={{ $myBookmark->likes }} :user = {{ Auth::check() ? 'true' : 'false' }} >
	              </favorite>

	              <div class="uk-child-width-auto"><a href="{{ route('blog.single', $myBookmark->slug.'#comments') }}" uk-icon="icon: comments" title="Comments" uk-tooltip></a><span class="uk-text-meta uk-text-small"> {{ $myBookmark->comments()->count() }} </span> </div>
	              <div class="uk-child-width-auto">
	                <a uk-icon="icon: social" title="Share" uk-tooltip></a>
	                {{-- <button class="uk-button uk-button-default" uk-icon="icon: social" type="button"></button> --}}
	                <div uk-dropdown="mode: click">
	                    <ul class="uk-iconnav uk-padding-remove">
	                        <li><a href="#" uk-icon="icon: facebook" title="Facebook" uk-tooltip></a></li>
	                        <li><a href="#" uk-icon="icon: twitter" title="Twiiter" uk-tooltip></a></li>
	                        <li><a href="#" uk-icon="icon: google-plus" title="Google Plus" uk-tooltip></a></li>
	                        <li><a href="#" uk-icon="icon: instagram" title="Instagram" uk-tooltip></a></li>
	                    </ul>
	                </div>
	               </div>
	              <bookmark :post= {{ $myBookmark->id }} :bookmarked = {{ $myBookmark->bookmarked() ? 'true': 'false' }} :bookmarks ={{ $myBookmark->bookmarks }} :user = {{ Auth::check() ? 'true' : 'false' }}
              		></bookmark> 
	            </div>
	          </div>
	        </div>
	        
		@endforeach

		</div>
		</div>

	</div>
</div>

@endsection