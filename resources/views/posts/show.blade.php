@extends('main')

@section('title' , '| View Post')

@section('description', 'show all your twebox posts')

@section('content')

		{{-- <section id="blog-details" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                <div class="post-thumb">
                                    <a href="{{ route('blog.single', $post->slug) }}">
                                    @if($post->image == null)
                                    <!-- <img src=" {{ asset('images/blog/blog-default.jpg') }} " alt="default-image" class="img-responsive" /> -->

                                    @else
                                    <img src="{{asset('/images/blog/' . $post->image)}}" class="img-responsive" />

                                    @endif
                                    </a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="{{ route('blog.single', $post->slug) }}"><small>{{ $post->created_at->diffForHumans() }}</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }} </a></h2>
                                    <p>Read time: <span class="eta"></span></p>
                                    <h3 class="post-author"><a href="{{ '/profile/'. $post->user_id }}">Posted by {{ $users->where('id',$post->user_id)->pluck('name')->first() }}</a></h3>
                                    <div class="post-body">
                                    <article>
                                        <p>{!! $post->body !!}</p>
                                    </article>
                                    </div>
                                    <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                            <li><i class="fa fa-tag"></i> {{ $post->category->name }}</li>
                                            <li><i class="fa fa-eye"></i> {{$post->views}} Views</li>
                                            <li><i class="fa fa-comments"></i> {{ $post->comments()->count() }} Comments</li>
                                        </ul>
                                        <ul class="nav navbar-nav post-nav">
                                        	
												<li>
												<span id="tags-container"></span>
												</li>
										</ul>
                                    </div>
                                    
                                    
                                    <div class="response-area" id="comments">
                                    <h2 class="bold">Comments</h2>
                                    <ul class="media-list">
                                    	@foreach( $post->comments as $comment)

                                    
                                        <li class="media">
                                            <div class="post-comment">
                                                <div class="media-body">
                                                    <span><i class="fa fa-user"></i>Posted by <a href="{{ $comment->user_id }}">{{ $comment->name }}</a></span>
                                                    <p> {{ $comment->comment }} </p>
                                                    <ul class="nav navbar-nav post-nav">
                                                        <li><a href="#"><i class="fa fa-clock-o"></i>{{ $comment->created_at->diffForHumans() }}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>                   
                                </div><!--/Response-area-->
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                            <div class="media">
                                {!! Html::linkRoute('posts.edit', 'Edit' , array($post->id), array('class' => 'btn btn-primary btn-block') ) !!}
                            </div>
                            <div class="media">
                                {!! Form::open([ 'route' =>['posts.destroy',$post->id] , 'method' => 'DELETE' ]) !!}

                                {!! Form::submit('Delete' , ['class' => 'btn btn-danger btn-block' ,'onclick'=> 'return confirm("Delete This story ?")', 'id'=>'delete']) !!}

								{!! Form::close() !!}
                            </div>
                            <div class="media">
                                {{ Html::linkRoute('posts.index', '<< See all Posts', [], ['class' => 'btn btn-warning btn-block'] ) }}
                            </div>
                        </div>
                        <div class="sidebar-item categories">
                            <h3>Categories</h3>
                            <ul class="nav navbar-stacked">
                              @foreach( $categories as $category)
                                <li><a href="{{'categories/'. $category->id }}">{{ $category->name }}</a></li>
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
    </section> --}}

{{-- ################################################################################################################# --}}

 <div class="uk-cover-container uk-margin-large-top">
        <canvas width="400" height="200"></canvas>
        <img uk-cover src="/images/blog/1493449659.jpg" alt="" >
    </div>
    <div class="uk-padding-large">
        <div uk-grid>
            <div class="uk-width-1-6@m"></div>
            <div class="uk-width-3-5@m">
                <p class="uk-text-lead">
                    <article class="uk-article">
                        <h1 class="uk-article-title">The 5 Questions Asked in Every Microsoft Interview & How to Answer Them</h1>
                        <p class="uk-article-meta"><span class="uk-icon uk-icon-image" style="background-image: url(../images/user-profile/1494097628.jpg);"></span><a href="#"> Super User</a> . 12 April 2012.
                        <span class="uk-badge uk-text-center uk-align-right"><a class="uk-link-reset" href="#">Interview</a></span></p>

                        <h4 class="uk-text-background">If you believe you’ve got ideas running in you head and are creative, Microsoft is the place you should be.</h4>

                        <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                        <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                        <div class="uk-cover-container">
                            <canvas width="400" height="200"></canvas>
                            <img uk-cover src="/images/blog/1493449659.jpg" alt="">
                        </div>

                        <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                        <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <hr>
                        <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </article>  
                </p>

                <div class="uk-flex-center" uk-grid>
                    <div><a href="" uk-icon="icon: heart"></a> 15K</div>
                    <div><a href="" uk-icon="icon: bookmark"></a> 12.5K</div>
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
                    <div class="ui blue labeled submit icon button">
                      <i class="icon edit"></i> Add Reply
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

            <div class="uk-margin">
                <ul class="uk-iconnav uk-iconnav-vertical uk-position-fixed">
                    {{-- <li><a href="#" uk-icon="icon: plus; ratio:1.7"></a></li> --}}
                    <li><a href="#" uk-icon="icon: file-edit; ratio:1.7" title="Edit this Story" uk-tooltip></a></li>
                    <li><a href="#" uk-icon="icon: trash; ratio:1.7" title="Delete this Story" uk-tooltip></a></li>
                    <li><a href="#" uk-icon="icon: list; ratio:1.7" title="See all Stories" uk-tooltip></a></li>
                </ul>
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