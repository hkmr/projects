{{-- Categories Section --}}

<div class="uk-container">
 <h1 class="uk-heading-divider">Categories <span class="uk-text-small"><a href="/categories/"> Show more...</a></span></h1>
<div class="uk-child-width-1-5@m" uk-grid>

@forelse ($categories as $category)

    <div class="uk-padding-small">
        <div class="uk-inline uk-light uk-margin">
            
                <img src="/images/categories/{{ $category->image }}" alt="">
                <div class="uk-overlay-primary uk-position-cover"></div>
                <div class="uk-position-center">
                    <span class="uk-text-large uk-text-bold uk-text-uppercase">
                    <a class="uk-link-reset" href="{{'/category/'. $category->name }}"> {{ $category->name }} </a>
                    </span><br>
                    <small class="uk-text-meta">{{ $category->total_posts }} Stories</small>
                    <follow
                        :category ={{ $category->id }}
                        :followed = {{ $category->followed() ? 'true' : 'false' }}
                        :followers ={{ $category->total_followers }}
                        :user = {{ Auth::check() ? 'true' : 'false' }}
                    ></follow>
                </div>
        </div>
    </div>

@empty

    <div class="uk-flex uk-flex-center">
        <p class="uk-text-lead">Sorry no Stories...</p>
    </div>
    
@endforelse

</div>
</div>

<hr class="uk-divider-icon">