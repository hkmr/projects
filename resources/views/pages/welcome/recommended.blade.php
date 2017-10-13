<div class="uk-container">
    {{-- User Recommended Section --}}
<h1 class="uk-heading-divider">Recommended for you <span class="uk-text-small"><a href= {{ Auth::check() ? "/recommend/".Auth::user()->id."/blog" : "recommend/blog" }} > Show more...</a></span></h1>
<div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
  @foreach($recomends as $recomend)
    <div>
        <div class="uk-card uk-card-primary uk-card-body">
            <h3 class="uk-card-title"><a class="uk-link-reset" href="{{ route('blog.single', $recomend->slug) }}">{{ substr(strip_tags($recomend->title), 0 ,15) }} {{ strlen( strip_tags($recomend->title )) >15 ? '...' : '' }}</a></h3>
            <p>{{ substr(strip_tags($recomend->body), 0 ,100) }} {{ strlen(strip_tags($recomend->body)) >250 ? '...' : '' }} <a href="{{ route('blog.single', $recomend->slug) }}" class="uk-link-reset">Read More</a></p>
            <div class="uk-child-width-1-4" uk-grid>
                <favorite :post= {{ $recomend->id }} :favorited= {{ $recomend->favorited() ? 'true' : 'false' }}
                :likes={{ $recomend->likes }} >
                </favorite>
                <div><a href="" uk-icon="icon: comments" title="Comment"></a> {{ $recomend->comments()->count() }}</div>
                <div class="uk-child-width-auto">
                <a uk-icon="icon: social" title="Share"></a>
                <div uk-dropdown="mode: click" class="uk-dark uk-background-secondary">
                    <ul class="uk-iconnav uk-padding-remove">
                        <li><a href="#" uk-icon="icon: facebook" title="Facebook" ></a></li>
                        <li><a href="#" uk-icon="icon: twitter" title="Twiiter" ></a></li>
                        <li><a href="#" uk-icon="icon: google-plus" title="Google Plus" ></a></li>
                        <li><a href="#" uk-icon="icon: instagram" title="Instagram" ></a></li>
                    </ul>
                </div>
               </div>
                <bookmark :post= {{ $recomend->id }} :bookmarked = {{ $recomend->bookmarked() ? 'true': 'false' }} :bookmarks ={{ $recomend->bookmarks }}
              ></bookmark> 
            </div>
        </div>
    </div>

    @endforeach
    
</div>
</div>

<hr class="uk-divider-icon">