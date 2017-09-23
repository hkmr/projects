@extends('main')

<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', '| '.$titleTag )

@section('og-url', route('blog.single', $post->slug) )

@section('og-title', $post->title )

@section('og-description', $post->category->name )

@section('og-image', asset('/images/blog/' . $post->image) )

@section('description', $post->title.','.$post->category->name)


@section('content')
    
    <div class="uk-cover-container uk-margin-large-top">
        <canvas width="400" height="200"></canvas>
        <img uk-cover src="{{$post->featured_image}}" alt="" >
    </div>
    <div class="uk-padding-large">
        <div uk-grid>
            <div class="uk-width-1-6@m"></div>
            <div class="uk-width-3-5@m">
                <p class="uk-text-lead">
                    <article class="uk-article">
                        <h1 class="uk-article-title">{{ $post->title}}</h1>
                        <p class="uk-article-meta"><span class="uk-icon uk-icon-image" style="background-image: url({{$post->user->avatar}});"></span><a href="#"> {{$post->user->name}}</a> . {{ $post->created_at->format('d-m-y') }}
                        <span class="uk-badge uk-text-center uk-align-right"><a class="uk-link-reset" href="#">{{$post->category->name}}</a></span></p>

                        <h4 class="uk-text-background">If you believe you’ve got ideas running in you head and are creative, Microsoft is the place you should be.</h4>

                        <p class="uk-text-lead">
                          {!! $post->body!!}
                        </p>

                        <div class="uk-cover-container" uk-lightbox>
                            <a href="/images/blog/1493449659.jpg" data-caption="Caption">
                              <canvas width="400" height="200"></canvas>
                              <img uk-cover src="/images/blog/1493449659.jpg" alt="">
                            </a>
                        </div>

                    </article>  
                </p>

                <div class="uk-flex-center" uk-grid>
                    <favorite :post= {{ $post->id }} :favorited= {{ $post->favorited() ? 'true' : 'false' }}
                      :likes={{ $post->likes }} >
                    </favorite>
                    <div class="uk-child-width-auto">
                      <a href="{{ route('blog.single', $post->slug.'#comments') }}">
                          <span uk-icon="icon: comments" title="Comment" uk-tooltip></span>
                        <span class="uk-text-meta uk-text-small"> {{ $post->comments()->count() }}</span> 
                      </a>
                    </div>
                    <bookmark :post= {{ $post->id }} :bookmarked = {{ $post->bookmarked() ? 'true': 'false' }} :bookmarks ={{ $post->bookmarks }}
                    ></bookmark> 
                    <div><a href="" uk-icon="icon: facebook"></a></div>
                    <div><a href="" uk-icon="icon: twitter"></a></div>
                    <div><a href="" uk-icon="icon: google-plus"></a></div>
                </div>

                <hr class="uk-divider-icon">
                {{-- comment section --}}
                <div class="ui comments">
                  <h3 class="ui dividing header">Comments</h3>
                  <form class="ui reply form">
                    <div class="field">
                      <textarea></textarea>
                    </div>
                    <div class="uk-button uk-button-primary">
                      Add Reply
                    </div>
                  </form>
                  <hr class="uk-divider-small">
                  <div class="comment">
                    <a class="avatar">
                      <img src="../images/user-profile/1494097628.jpg">
                    </a>
                    <div class="content">
                      <a class="author">Matt</a>
                      <div class="metadata">
                        <span class="date">Today at 5:42PM</span>
                      </div>
                      <div class="text">
                        How artistic!
                      </div>
                      <div class="actions">
                        <a class="reply">Reply</a>
                      </div>
                    </div>
                  </div>
                  <div class="comment">
                    <a class="avatar">
                      <img src="../images/user-profile/1494097628.jpg">
                    </a>
                    <div class="content">
                      <a class="author">Elliot Fu</a>
                      <div class="metadata">
                        <span class="date">Yesterday at 12:30AM</span>
                      </div>
                      <div class="text">
                        <p>This has been very useful for my research. Thanks as well!</p>
                      </div>
                      <div class="actions">
                        <a class="reply">Reply</a>
                      </div>
                    </div>
                    <div class="comments">
                      <div class="comment">
                        <a class="avatar">
                          <img src="../images/user-profile/1494097628.jpg">
                        </a>
                        <div class="content">
                          <a class="author">Jenny Hess</a>
                          <div class="metadata">
                            <span class="date">Just now</span>
                          </div>
                          <div class="text">
                            Elliot you are always so right :)
                          </div>
                          <div class="actions">
                            <a class="reply">Reply</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="comment">
                    <a class="avatar">
                      <img src="../images/user-profile/1494097628.jpg">
                    </a>
                    <div class="content">
                      <a class="author">Joe Henderson</a>
                      <div class="metadata">
                        <span class="date">5 days ago</span>
                      </div>
                      <div class="text">
                        Dude, this is awesome. Thanks so much
                      </div>
                      <div class="actions">
                        <a class="reply">Reply</a>
                      </div>
                    </div>
                  </div>
                  <a class="uk-link-muted">Load more...</a>
                </div>
            </div>
        </div>

        {{-- recommends section --}}
        <hr class="uk-divider-icon">
            <h1 class="uk-heading-divider uk-padding-remove-bottom">More Like This ...<span class="uk-text-small uk-align-right "><a href="#"> Show more...</a></span></h1>
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