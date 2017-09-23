<div class="uk-container">
    {{-- User Recommended Section --}}
<h1 class="uk-heading-divider">Recommended for you <span class="uk-text-small"><a href="#"> Show more...</a></span></h1>
<div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
  @foreach($recomends as $recomend)
    <div>
        <div class="uk-card uk-card-primary uk-card-body">
            <h3 class="uk-card-title">{{ $recomend->title }}</h3>
            <p>{{ substr(strip_tags($recomend->body), 0 ,100) }} {{ strlen(strip_tags($recomend->body)) >250 ? '...' : '' }} <a href="#" class="uk-link-reset">Read More</a></p>
            <div class="uk-child-width-1-4" uk-grid>
                <favorite :post= {{ $recomend->id }} :favorited= {{ $recomend->favorited() ? 'true' : 'false' }}
                :likes={{ $recomend->likes }} >
              </favorite>
                <div><a href="" uk-icon="icon: comments" title="Comment" uk-tooltip></a> 111</div>
                <div class="uk-child-width-auto">
                <a uk-icon="icon: social" title="Share" uk-tooltip></a>
                <div uk-dropdown="mode: click" class="uk-dark uk-background-secondary">
                    <ul class="uk-iconnav uk-padding-remove">
                        <li><a href="#" uk-icon="icon: facebook" title="Facebook" uk-tooltip></a></li>
                        <li><a href="#" uk-icon="icon: twitter" title="Twiiter" uk-tooltip></a></li>
                        <li><a href="#" uk-icon="icon: google-plus" title="Google Plus" uk-tooltip></a></li>
                        <li><a href="#" uk-icon="icon: instagram" title="Instagram" uk-tooltip></a></li>
                    </ul>
                </div>
               </div>
                <div><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a> 154</div>
            </div>
        </div>
    </div>

    @endforeach
    
</div>
</div>