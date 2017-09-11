@extends('main')

@section('title','| All Posts')


@section('content')

	{{-- <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                <div class="infinite-scroll">
                    <div class="row">

                    	@foreach($posts as $post)
                         <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <div class="post-thumb">
                                    <a href="{{ route('posts.show',$post->id) }}">
                                    @if($post->image == null)
                           

                                    @else
                                    <img src="{{asset('/images/blog/' . $post->image)}}" class="img-responsive" alt="{{$post->title}}">
                                    @endif
                                    </a>
                                    <div class="post-overlay">
                                       <span class="uppercase"><a href="{{ route('posts.show',$post->id) }}"><small>{{ $post->created_at->diffForHumans() }}</small></a></span>
                                   </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="{{ route('posts.show',$post->id) }}">{{ $post->title}}</a></h2>
                                    <h3 class="post-author"><a href="{{ '/profile/'. $post->user_id }}">Posted by {{ $user->where('id',$post->user_id)->pluck('name')->first() }}</a></h3>
                                    <p>{{ substr(strip_tags($post->body),0,50)}} {{ strlen(strip_tags($post->body)) >50 ? "..." : "" }}</p>
                                    <a href="{{ route('posts.show',$post->id) }}" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                            <li><a href="{{'/categories/'.$post->category->id }}"><i class="fa fa-tag"></i>{{ $post->category->name }}</a></li>
                                            <li><a href="{{ route('blog.single', $post->slug) }}"><i class="fa fa-eye"></i>{{ $post->views }} Views</a></li>
                                            <li><a href="{{ route('posts.show',$post->id) }}"><i class="fa fa-comments"></i>{{ $post->comments()->count() }} Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {!! $posts->links() !!}
                    </div>
                    
                   </div>
                 </div>
                <div class="col-md-3 col-sm-5">
                    <a href=" {{route('posts.create')}} " class="btn btn-submit">Create New Post</a><hr>
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                            <h3>Popular Stories</h3>
                            @foreach($populars as $post)
                            <div class="media">
                                <div class="pull-left">
                                    <a href="{{ route('blog.single', $post->slug) }}">
                                    @if($post->image == null)
                                    
                                    @else
                                        <img src=" {{ asset('images/blog/'. $post->image) }} " alt="{{$post->name}}" height="52" width="52" />
                                    @endif
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="{{ route('blog.single', $post->slug) }}">{{ substr(strip_tags($post->title), 0 ,50) }} {{ strlen(strip_tags($post->body)) >30 ? '...' : '' }}</a></h4>
                                    <p>posted {{$post->created_at->diffForHumans()}}</p>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        <div class="sidebar-item categories">
                            <h3>Categories</h3>
                            <ul class="nav navbar-stacked">
                                @foreach( $categories as $category)
                                <li><a href="{{'categories/'. $category->id }}">{{ $category->name }}<span class="pull-right">({{ $posts->where('category_id', $category->id)->count() }})</span></a></li>
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
     --}}

{{-- ########################################################################################################### --}}

    <div class="uk-padding-large">
        
    <div uk-grid>
        <div class="uk-width-1-6@m"></div>
        <div class="uk-width-3-5@m">
            <h1 class="uk-heading-divider">Stories Written by You</h1>
            <a class="uk-button uk-button-default" href="#">Write New Story</a>
            <h4 class="uk-heading-bullet uk-text-meta">5 Sept, 2017</h4>
            <div class="uk-card-default uk-card-body">
                <div class="uk-card-header">
                    <h3 class="uk-card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    <span class="uk-align-right uk-badge">Category</span>
                    </h3>
                    <p class="uk-align-right"><span uk-icon="icon: clock; ratio: 0.7"></span> 3 min</p>

                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ...</p>
                <div class="uk-card-footer ">
                    <div class="uk-child-width-1-5" uk-grid>
                        <div><a href="#" uk-icon="icon: heart"></a> 15K</div>
                        <div><a href="#" uk-icon="icon: comments"></a> 1.2K</div>
                        <div><a href="#" uk-icon="icon: social"></a> 15K</div>
                        <div><a href="#" uk-icon="icon: bookmark"></a> 15K</div>
                        <div><a href="#" class="uk-link-muted" uk-icon="icon: chevron-down"> More</a></div>
                        
                    </div>
                </div>
            </div>

            <h4 class="uk-heading-bullet uk-text-meta">5 Sept, 2017</h4>
            <div class="uk-card-default uk-card-body">
                <div class="uk-card-header">
                    <h3 class="uk-card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    <span class="uk-align-right uk-badge">Category</span>
                    </h3>
                    <p class="uk-align-right"><span uk-icon="icon: clock; ratio: 0.7"></span> 3 min</p>

                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ...</p>
                <div class="uk-card-footer ">
                    <div class="uk-child-width-1-5" uk-grid>
                        <div><a href="#" uk-icon="icon: heart"></a> 15K</div>
                        <div><a href="#" uk-icon="icon: comments"></a> 1.2K</div>
                        <div><a href="#" uk-icon="icon: social"></a> 15K</div>
                        <div><a href="#" uk-icon="icon: bookmark"></a> 15K</div>
                        <div><a href="#" class="uk-link-muted" uk-icon="icon: chevron-down"> More</a></div>
                        
                    </div>
                </div>
            </div>

            <h4 class="uk-heading-bullet uk-text-meta">5 Sept, 2017</h4>
            <div class="uk-card-default uk-card-body">
                <div class="uk-card-header">
                    <h3 class="uk-card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    <span class="uk-align-right uk-badge">Category</span>
                    </h3>
                    <p class="uk-align-right"><span uk-icon="icon: clock; ratio: 0.7"></span> 3 min</p>

                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ...</p>
                <div class="uk-card-footer ">
                    <div class="uk-child-width-1-5" uk-grid>
                        <div><a href="#" uk-icon="icon: heart"></a> 15K</div>
                        <div><a href="#" uk-icon="icon: comments"></a> 1.2K</div>
                        <div><a href="#" uk-icon="icon: social"></a> 15K</div>
                        <div><a href="#" uk-icon="icon: bookmark"></a> 15K</div>
                        <div><a href="#" class="uk-link-muted" uk-icon="icon: chevron-down"> More</a></div>
                        
                    </div>
                </div>
            </div>

            <h4 class="uk-heading-bullet uk-text-meta">5 Sept, 2017</h4>
            <div class="uk-card-default uk-card-body">
                <div class="uk-card-header">
                    <h3 class="uk-card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    <span class="uk-align-right uk-badge">Category</span>
                    </h3>
                    <p class="uk-align-right"><span uk-icon="icon: clock; ratio: 0.7"></span> 3 min</p>

                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ...</p>
                <div class="uk-card-footer ">
                    <div class="uk-child-width-1-5" uk-grid>
                        <div><a href="#" uk-icon="icon: heart"></a> 15K</div>
                        <div><a href="#" uk-icon="icon: comments"></a> 1.2K</div>
                        <div><a href="#" uk-icon="icon: social"></a> 15K</div>
                        <div><a href="#" uk-icon="icon: bookmark"></a> 15K</div>
                        <div><a href="#" class="uk-link-muted" uk-icon="icon: chevron-down"> More</a></div>
                        
                    </div>
                </div>
            </div>

            <h4 class="uk-heading-bullet uk-text-meta">5 Sept, 2017</h4>
            <div class="uk-card-default uk-card-body">
                <div class="uk-card-header">
                    <h3 class="uk-card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    <span class="uk-align-right uk-badge">Category</span>
                    </h3>
                    <p class="uk-align-right"><span uk-icon="icon: clock; ratio: 0.7"></span> 3 min</p>

                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ...</p>
                <div class="uk-card-footer ">
                    <div class="uk-child-width-1-5" uk-grid>
                        <div><a href="#" uk-icon="icon: heart"></a> 15K</div>
                        <div><a href="#" uk-icon="icon: comments"></a> 1.2K</div>
                        <div><a href="#" uk-icon="icon: social"></a> 15K</div>
                        <div><a href="#" uk-icon="icon: bookmark"></a> 15K</div>
                        <div><a href="#" class="uk-link-muted" uk-icon="icon: chevron-down"> More</a></div>
                        
                    </div>
                </div>
            </div>

            {{-- loader --}}
            <div class="uk-align-center uk-text-center" uk-spinner></div>
        </div>
    </div>

    </div>



@endsection