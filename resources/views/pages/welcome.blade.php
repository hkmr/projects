@extends('main')

@section('title' , '| HomePage')

@section('description' , 'tweblog ,best blogging sites ')


@section('content')


<div class="uk-padding-large">
    
    {{-- Welcome Message --}}
    <div uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <div class="uk-padding-small">
        <i uk-icon="icon: info; ratio: 1.5"></i>
        <span class="uk-text-middle uk-text-large type-it"> Welcome to twebox. <br> We Are happy to have you here.</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>

{{-- Latest Stories Section --}}

<h1 class="uk-heading-divider uk-margin-top-small">Latest Stories <span class="uk-text-small"><a href="/blog"> Show more...</a></span></h1>
<div class="uk-grid-large uk-text-center uk-padding-large@s uk-child-width-1-3@m" uk-grid>
 
 @foreach ($posts as $post)
    
        <div>
         <div class="uk-card uk-card-default">
          <div class="uk-card-header uk-padding-small">
              <h1 class="uk-card-title uk-text-uppercase"><a class="uk-link-reset" href="{{ route('blog.single', $post->slug) }}"> {{ $post->title }} </a> </h1>
              <span class="uk-badge uk-text-center uk-align-right"><a class="uk-link-reset" href="{{'/categories/'.$post->category->id }}">{{ $post->category->name }}</a></span>
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                  <div class="">
                      <img class="uk-border-circle uk-icon uk-icon-image" width="30" height="30" src="../images/user-profile/1494097628.jpg">
                  </div>
                  <div class="uk-text-left">
                    <h3 class="uk-text-small uk-margin-remove-bottom"><a class="uk-link-reset" href="{{ '/profile/'. $post->user_id }}">{{ $user->where('id',$post->user_id)->pluck('name')->first() }}</a></h3>
                      <p class="uk-text-meta uk-margin-remove-top"><time>April 01, 2016</time></p>
                  </div>
                  <div >
                      <p class="uk-text-right"><a uk-icon="icon: clock; ratio: 0.6"></a><span class="uk-text-meta uk-text-small"> 3min</span></p>
                  </div>
              </div>
          </div>
          <div class="uk-card-body">
            <div class=" uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url({{asset('/images/blog/' . $post->image)}});">

            </div>
              <p>{{ substr(strip_tags($post->body), 0 ,100) }} {{ strlen(strip_tags($post->body)) >250 ? '...' : '' }}<a href="{{ route('blog.single', $post->slug) }}">read more.</a></p>
          </div>
          <div class="uk-card-footer">
            <div class="uk-grid-small uk-child-width-1-4" uk-grid>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a><span class="uk-text-meta uk-text-small">150</span> </div>
              <div class="uk-child-width-auto"><a href="{{ route('blog.single', $post->slug.'#comments') }}" uk-icon="icon: comments" title="Comment" uk-tooltip></a><span class="uk-text-meta uk-text-small"> {{ $post->comments()->count() }}</span> </div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a> </div>
              <div class="uk-child-width-auto"><a uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a> {{ $post->views }}</div>
            </div>
          </div>
        </div>
     </div>

 @endforeach
 
</div>

{{-- Week's Trending Stories --}}

<h1 class="uk-heading-divider uk-margin-top-small">Week's Trending <span class="uk-text-small"><a href="/blog"> Show more...</a></span></h1>
<div class="uk-grid-large uk-text-center uk-padding-large@s uk-child-width-1-3@m" uk-grid>
 <div>
     <div class="uk-card uk-card-default">
      <div class="uk-card-header uk-padding-small">
          <h1 class="uk-card-title uk-text-uppercase"><a class="uk-link-reset" href="#">Title Of Story Of This Post and testing</a> </h1>
          <span class="uk-badge uk-text-center uk-align-right"><a class="uk-link-reset" href="#">Category</a></span>
          <div class="uk-grid-small uk-flex-middle" uk-grid>
              <div class="">
                  <img class="uk-border-circle uk-icon uk-icon-image" width="30" height="30" src="../images/user-profile/1494097628.jpg">
              </div>
              <div class="uk-text-left">
                <h3 class="uk-text-small uk-margin-remove-bottom"><a class="uk-link-reset" href="#">Author</a></h3>
                  <p class="uk-text-meta uk-margin-remove-top"><time>April 01, 2016</time></p>
              </div>
              <div >
                  <p class="uk-text-right"><a uk-icon="icon: clock; ratio: 0.6"></a><span class="uk-text-meta uk-text-small"> 3min</span></p>
              </div>
          </div>
      </div>
      <div class="uk-card-body">
        <div class="uk-background-blend-darken uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../images/blog/1493449659.jpg);">

        </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt... <a href="#">read more.</a></p>
      </div>
      <div class="uk-card-footer">
        <div class="uk-grid-small uk-child-width-1-4" uk-grid>
          <div class="uk-child-width-auto"><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a><span class="uk-text-meta uk-text-small">150</span> </div>
          <div class="uk-child-width-auto"><a href="" uk-icon="icon: comments" title="Comment" uk-tooltip></a><span class="uk-text-meta uk-text-small"> 78</span> </div>
          <div class="uk-child-width-auto"><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a> </div>
          <div class="uk-child-width-auto"><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a> </div>
        </div>
      </div>
    </div>
 </div>
     
 <div>
     <div class="uk-card uk-card-default">
      <div class="uk-card-header uk-padding-small">
          <h1 class="uk-card-title uk-text-uppercase"><a class="uk-link-reset" href="#">Title Of Story Of This Post and testing</a> </h1>
          <span class="uk-badge uk-text-center uk-align-right"><a class="uk-link-reset" href="#">Category</a></span>
          <div class="uk-grid-small uk-flex-middle" uk-grid>
              <div class="">
                  <img class="uk-border-circle uk-icon uk-icon-image" width="30" height="30" src="../images/user-profile/1494097628.jpg">
              </div>
              <div class="uk-text-left">
                <h3 class="uk-text-small uk-margin-remove-bottom"><a class="uk-link-reset" href="#">Author</a></h3>
                  <p class="uk-text-meta uk-margin-remove-top"><time>April 01, 2016</time></p>
              </div>
              <div >
                  <p class="uk-text-right"><a uk-icon="icon: clock; ratio: 0.6"></a><span class="uk-text-meta uk-text-small"> 3min</span></p>
              </div>
          </div>
      </div>
      <div class="uk-card-body">
        <div class="uk-background-blend-darken uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../images/blog/1493449659.jpg);">

        </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt... <a href="#">read more.</a></p>
      </div>
      <div class="uk-card-footer">
        <div class="uk-grid-small uk-child-width-1-4" uk-grid>
          <div class="uk-child-width-auto"><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a><span class="uk-text-meta uk-text-small">150</span> </div>
          <div class="uk-child-width-auto"><a href="" uk-icon="icon: comments" title="Comment" uk-tooltip></a><span class="uk-text-meta uk-text-small"> 78</span> </div>
          <div class="uk-child-width-auto"><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a> </div>
          <div class="uk-child-width-auto"><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a> </div>
        </div>
      </div>
    </div>
 </div>
     
 <div>
     <div class="uk-card uk-card-default">
      <div class="uk-card-header uk-padding-small">
          <h1 class="uk-card-title uk-text-uppercase"><a class="uk-link-reset" href="#">Title Of Story Of This Post and testing</a> </h1>
          <span class="uk-badge uk-text-center uk-align-right"><a class="uk-link-reset" href="#">Category</a></span>
          <div class="uk-grid-small uk-flex-middle" uk-grid>
              <div class="">
                  <img class="uk-border-circle uk-icon uk-icon-image" width="30" height="30" src="../images/user-profile/1494097628.jpg">
              </div>
              <div class="uk-text-left">
                <h3 class="uk-text-small uk-margin-remove-bottom"><a class="uk-link-reset" href="#">Author</a></h3>
                  <p class="uk-text-meta uk-margin-remove-top"><time>April 01, 2016</time></p>
              </div>
              <div >
                  <p class="uk-text-right"><a uk-icon="icon: clock; ratio: 0.6"></a><span class="uk-text-meta uk-text-small"> 3min</span></p>
              </div>
          </div>
      </div>
      <div class="uk-card-body">
        <div class="uk-background-blend-darken uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../images/blog/1493449659.jpg);">

        </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt... <a href="#">read more.</a></p>
      </div>
      <div class="uk-card-footer">
        <div class="uk-grid-small uk-child-width-1-4" uk-grid>
          <div class="uk-child-width-auto"><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a><span class="uk-text-meta uk-text-small">150</span> </div>
          <div class="uk-child-width-auto"><a href="" uk-icon="icon: comments" title="Comment" uk-tooltip></a><span class="uk-text-meta uk-text-small"> 78</span> </div>
          <div class="uk-child-width-auto"><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a> </div>
          <div class="uk-child-width-auto"><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a> </div>
        </div>
      </div>
    </div>
 </div>

</div>
    
    {{-- Categories Section --}}

   <h1 class="uk-heading-divider">Categories <span class="uk-text-small"><a href="#"> Show more...</a></span></h1>
   <div class="uk-child-width-1-5@s" uk-grid>

    @foreach ($categories as $category)

        <div class="uk-padding-small">
            <div class="uk-inline uk-light uk-margin">
                <a href="{{'categories/'. $category->id }}">
                    <img src="/images/blog/1493449659.jpg" alt="">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-position-center">
                        <span class="uk-text-large uk-text-bold uk-text-uppercase"> {{ $category->name }} </span>
                    </div>
                </a>
            </div>
        </div>
        
    @endforeach
    
</div>

<hr class="uk-divider-icon">

{{-- User Recommended Section --}}
<h1 class="uk-heading-divider">Recommended for you <span class="uk-text-small"><a href="#"> Show more...</a></span></h1>
<div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-primary uk-card-body">
            <h3 class="uk-card-title">Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit... <a href="#" class="uk-link-reset">Read More</a></p>
            <div class="uk-child-width-1-4" uk-grid>
                <div><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: comments" title="Comment" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a></div>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary uk-card-body">
            <h3 class="uk-card-title">Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="uk-child-width-1-4" uk-grid>
                <div><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: comments" title="Comment" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a></div>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary uk-card-body">
            <h3 class="uk-card-title">Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="uk-child-width-1-4" uk-grid>
                <div><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: comments" title="Comment" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a></div>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary uk-card-body">
            <h3 class="uk-card-title">Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="uk-child-width-1-4" uk-grid>
                <div><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: comments" title="Comment" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a></div>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary uk-card-body">
            <h3 class="uk-card-title">Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="uk-child-width-1-4" uk-grid>
                <div><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: comments" title="Comment" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a></div>
                <div><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a></div>
            </div>
        </div>
    </div>
</div>

</div>


@endsection