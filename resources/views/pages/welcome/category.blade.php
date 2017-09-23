{{-- Categories Section --}}

<div class="uk-container">
 <h1 class="uk-heading-divider">Categories <span class="uk-text-small"><a href="/categories/"> Show more...</a></span></h1>
<div class="uk-child-width-1-5@s" uk-grid>

@foreach ($categories as $category)

    <div class="uk-padding-small">
        <div class="uk-inline uk-light uk-margin">
            
                <img src="/images/categories/gaming.jpeg" alt="">
                <div class="uk-overlay-primary uk-position-cover"></div>
                <div class="uk-position-center">
                    <span class="uk-text-large uk-text-bold uk-text-uppercase">
                    <a href="{{'categories/'. $category->id }}"> {{ $category->name }} </a>
                    </span><br>

                    <small class="uk-text-meta">123 Stories</small>
                    <p><button class="uk-button uk-button-default uk-button-small">Follow</button></p>
                </div>
        </div>
    </div>
    
@endforeach

</div>
</div>

<hr class="uk-divider-icon">