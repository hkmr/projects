<div class="uk-container">
  {{-- Week's Trending Stories --}}

<h1 class="uk-heading-divider uk-margin-top-small">Week's Trending <span class="uk-text-small"><a href="/trending"> Show more...</a></span></h1>
<div class="uk-grid-large uk-grid-match uk-text-center uk-padding-large@s uk-child-width-1-3@m" uk-grid>

@foreach($weekTrends as $weekTrend)
 <div>
     <div class="uk-card uk-card-default">
      <div class="uk-card-header uk-padding-small">
          <h1 class="uk-card-title uk-text-uppercase"><a class="uk-link-reset" href="{{ route('blog.single', $weekTrend->slug) }}"> {{ $weekTrend->title }} </a> </h1>
          <span class="uk-badge uk-text-center uk-align-right"><a class="uk-link-reset" href="{{'/categories/'.$weekTrend->category->id }}">{{ $weekTrend->category->name }}</a></span>
          <div class="uk-grid-small uk-flex-middle" uk-grid>
              <div class="">
                  <img class="uk-border-circle uk-icon uk-icon-image" width="30" height="30" src="{{ strpos($weekTrend->user->avatar, "http",0) ===0 ? $weekTrend->user->avatar : '/images/user-profile/'.$weekTrend->user->avatar   }}">
              </div>
              <div class="uk-text-left">
                <h3 class="uk-text-small uk-margin-remove-bottom"><a class="uk-link-reset" href="{{ '/profile/'. $weekTrend->user_id }}">{{ $weekTrend->user->name }}</a></h3>
                  <p class="uk-text-meta uk-margin-remove-top"><time>{{$weekTrend->created_at->diffForHumans()}}</time></p>
              </div>
              <div >
                  <p class="uk-text-right"><a uk-icon="icon: clock; ratio: 0.6"></a><span class="uk-text-meta uk-text-small"> 3min</span></p>
              </div>
          </div>
      </div>
      <div class="uk-card-body">
        <div class="uk-background-blend-darken uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url({{'/images/blog/'.$weekTrend->image}});">

        </div>
          <p>{{ substr(strip_tags($weekTrend->body), 0 ,100) }} {{ strlen(strip_tags($weekTrend->body)) >250 ? '...' : '' }}<a href="{{ route('blog.single', $weekTrend->slug) }}">read more.</a></p>
      </div>
      <div class="uk-card-footer">
        <div class="uk-grid-small uk-child-width-1-4" uk-grid>
          <favorite :post= {{ $weekTrend->id }} :favorited= {{ $weekTrend->favorited() ? 'true' : 'false' }}
            :likes={{ $weekTrend->likes }} >
          </favorite>
          <div class="uk-child-width-auto"><a href="" uk-icon="icon: comments" title="Comment" uk-tooltip></a><span class="uk-text-meta uk-text-small"> {{ $weekTrend->comments()->count() }}</span> </div>
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
          <bookmark :post= {{ $weekTrend->id }} :bookmarked = {{ $weekTrend->bookmarked() ? 'true': 'false' }} :bookmarks ={{ $weekTrend->bookmarks }}
              ></bookmark> 
        </div>
      </div>
    </div>
 </div>
     
 @endforeach

</div>
</div>

<hr class="uk-divider-icon">