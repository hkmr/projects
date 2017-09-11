@extends('main')

@section('title' , '| Blogs')

@section('description', 'tweBox all blogs')

@section('content')

{{-- 	  <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                    	@foreach ($posts as $post)
                         <div class="col-md-8 col-sm-12 blog-padding-right blog-box">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="{{ route('blog.single', $post->slug) }} ">
                                    @if($post->image == null)

									@else

										<img src=" {{ asset('images/blog/'. $post->image) }} " alt=" {{ $post->title }} " class="img-responsive" />

									@endif
                                    </a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="{{ route('blog.single', $post->slug) }} "><small>{{$post->created_at->diffForHumans() }}</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></h2>
                                    <h3 class="post-author"><a href="{{ '/profile/'. $post->user_id }}">Posted by {{ $user->where('id',$post->user_id)->pluck('name')->first() }}</a></h3>
                                    <p>{{ substr(strip_tags($post->body), 0, 250) }} {{ strlen(strip_tags($post->body)) >250 ? '...' : '' }}</p>
                                    <a href="{{ route('blog.single', $post->slug) }} " class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="{{'categories/'.$post->category->id }}"><i class="fa fa-tag fa-2x"></i>{{ $post->category->name }}</a></li>
                                            <li><a href="{{ route('blog.single', $post->slug) }}"><i class="fa fa-eye fa-2x"></i>{{ $post->views }} Views</a></li>
                                            <li><a href="{{ route('blog.single', $post->slug.'#comments') }}"><i class="fa fa-comment-o fa-2x"></i>{{ $post->comments()->count() }} Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="blog-pagination">
                        <ul class="pagination">
                          {!! $posts->links(); !!}
                        </ul>
                    </div>
                 </div>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                            <h3>Recent Posts</h3>
                            @foreach( $recents as $post )
                            <div class="media">
                                <div class="pull-left">
                                    <a href="{{ route('blog.single', $post->slug) }}">
                                    @if($post->image == null)
                                    <img src=" {{ asset('images/blog/blog-default.jpg') }} " alt="default-image" height="52" width="52" />
                                    @else
                                        <img src=" {{ asset('images/blog/'. $post->image) }} " alt="{{$post->name}}" height="52" width="52" />
                                    @endif
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="{{ route('blog.single', $post->slug) }}">{{$post->title}}</a></h4>
                                    <p>posted on  {{$post->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="sidebar-item categories">
                            <h3>Categories</h3>
                            <ul class="nav navbar-stacked">
                            	@foreach( $categories as $category)
                                <li><a href="{{'categories/'. $category->id }}">{{ $category->name }}<span class="pull-right">{{ $posts->where('category_id', $category->id)->count() }}</span></a></li>
                              	@endforeach
                            </ul>
                        </div>
                        <div class="sidebar-item tag-cloud">
                            <h3>Advertisment</h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog--> --}}

    {{-- ############################################################################################################ --}}

<div class="uk-child-width-1-3@m uk-grid-large uk-text-center uk-padding-large" uk-grid>
    {{-- Story One --}}
    <div>
        <div class="uk-card uk-card-default">
          <div class="uk-card-header uk-padding-small">
              <h1 class="uk-card-title uk-text-uppercase"><a class="uk-link-reset" href="#">Title Of Story Of This Post and testing</a> </h1>
              <span class="uk-badge uk-text-center uk-align-right"><a class="uk-link-reset" href="#">Category</a></span>
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                  <div class="">
                      <img class="uk-border-circle uk-icon uk-icon-image" icon-ratio="1.5" src="../images/user-profile/1494097628.jpg">
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
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a><span class="uk-text-meta"> 150</span></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: comment" title="Comment" uk-tooltip></a><span class="uk-text-meta"> 78</span></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a></div>
            </div>
          </div>
        </div>

    </div>
    <div>
    {{-- Story two --}}
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
            <div class="uk-background-blend-multiply uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../images/blog/1493449659.jpg);">

            </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt... <a href="#">read more.</a></p>
          </div>
          <div class="uk-card-footer">
            <div class="uk-grid-small uk-child-width-1-4" uk-grid>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a><span class="uk-text-meta"> 150</span></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: comment" title="Comment" uk-tooltip></a><span class="uk-text-meta"> 78</span></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a></div>
            </div>
          </div>
        </div>
    </div>
    <div>
    {{-- Story Three --}}
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
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a><span class="uk-text-meta"> 150</span></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: comment" title="Comment" uk-tooltip></a><span class="uk-text-meta"> 78</span></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a></div>
            </div>
          </div>
        </div>
    </div>
    <div>
    {{-- Story Four --}}
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
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a><span class="uk-text-meta"> 150</span></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: comment" title="Comment" uk-tooltip></a><span class="uk-text-meta"> 78</span></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a></div>
            </div>
          </div>
        </div>
    </div>
    <div>
    {{-- Story Five --}}
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
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a><span class="uk-text-meta"> 150</span></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: comment" title="Comment" uk-tooltip></a><span class="uk-text-meta"> 78</span></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a></div>
            </div>
          </div>
        </div>
    </div>
    <div>
    {{-- Story Six --}}
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
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: heart" title="Like" uk-tooltip></a><span class="uk-text-meta"> 150</span></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: comment" title="Comment" uk-tooltip></a><span class="uk-text-meta"> 78</span></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: social" title="Share" uk-tooltip></a></div>
              <div class="uk-child-width-auto"><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a></div>
            </div>
          </div>
        </div>
    </div>
    

</div>



@endsection