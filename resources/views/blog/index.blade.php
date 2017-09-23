@extends('main')

@section('title' , '| Blogs')

@section('description', 'tweBox all blogs')

@section('content')

<div class="uk-child-width-1-3@m uk-grid-large uk-grid-match uk-text-center uk-padding-large" uk-grid>
    
    @foreach($posts as $post)

    <div>
        <div class="uk-card uk-card-default">
          <div class="uk-card-header uk-padding-small">
              <h1 class="uk-card-title uk-text-uppercase"><a class="uk-link-reset" href="{{ route('blog.single', $post->slug) }}">{{ substr(strip_tags($post->title), 0, 30 ) }} {{ strlen(strip_tags($post->title)) > 30 ? '...' : '' }} </a> </h1>
              <span class="uk-badge uk-text-center uk-align-right"><a class="uk-link-reset" href="{{'categories/'.$post->category->id }}">{{ $post->category->name }}</a></span>
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                  <div>
                      <img class="uk-border-circle uk-icon uk-icon-image" icon-ratio="1.5" src="../images/user-profile/1494097628.jpg">
                  </div>
                  <div class="uk-text-left">
                    <h3 class="uk-text-small uk-margin-remove-bottom"><a class="uk-link-reset" href="#">{{ $user->where('id',$post->user_id)->pluck('name')->first() }}</a></h3>
                      <p class="uk-text-meta uk-margin-remove-top"><time>{{ $post->created_at->diffForHumans() }}</time></p>
                  </div>
                  <div >
                      <p class="uk-text-right"><a uk-icon="icon: clock; ratio: 0.6"></a><span class="uk-text-meta uk-text-small"> 3min read</span></p>
                  </div>
              </div>
          </div>
          <div class="uk-card-body">
            <div class="uk-background-blend-darken uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url({{ asset('images/blog/'. $post->image) }} " alt="{{$post->name}});">

            </div>
              <p>{{ substr(strip_tags($post->body), 0, 200) }} {{ strlen(strip_tags($post->body)) >200 ? '...' : '' }}<a href="{{ route('blog.single', $post->slug) }}">read more.</a></p>
          </div>
          <div class="uk-card-footer">
            <div class="uk-grid-small uk-child-width-1-4" uk-grid>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a><span class="uk-text-meta"> 150</span></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: comment" title="Comment" uk-tooltip></a><span class="uk-text-meta"> {{ $post->comments()->count() }}</span></div>
              <div class="uk-child-width-auto">
                <a uk-icon="icon: social" title="Share" uk-tooltip></a>
                <div uk-dropdown="mode: click">
                    <ul class="uk-iconnav uk-padding-remove">
                        <li><a href="#" uk-icon="icon: facebook" title="Facebook" uk-tooltip></a></li>
                        <li><a href="#" uk-icon="icon: twitter" title="Twiiter" uk-tooltip></a></li>
                        <li><a href="#" uk-icon="icon: google-plus" title="Google Plus" uk-tooltip></a></li>
                        <li><a href="#" uk-icon="icon: instagram" title="Instagram" uk-tooltip></a></li>
                    </ul>
                </div>
               </div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a></div>
            </div>
          </div>
        </div>
    </div>

    @endforeach

    {{-- <p>{{ $posts->links() }}</p> --}}
</div>



@endsection