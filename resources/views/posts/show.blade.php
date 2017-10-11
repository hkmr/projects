@extends('main')

@section('title' , '| '. $post->title)

@section('description', $post->title)

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
      <img uk-cover src="/images/blog/{{$post->image}}" alt="" >
  </div>
    <div class="uk-padding-large">
        <div uk-grid>
            <div class="uk-width-1-6@m"></div>
            <div class="uk-width-3-5@m">
                <div class="uk-flex uk-flex-center">
                  <div uk-grid>
                  <div>ABC</div>
                  <div>ABC</div>
                  <div>ABC</div>
                </div>
                </div>
                <p class="uk-text-lead">
                    <article class="uk-article">
                        <h1 class="uk-article-title"> <a class="uk-link-reset" href="{{ route('blog.single', $post->slug) }}"> {{ $post->title }} </a></h1>
                        <p class="uk-article-meta"><span class="uk-icon uk-icon-image" style="background-image: url(../images/user-profile/1494097628.jpg);"></span><a href="{{ '/profile/'. $post->user_id }}"> {{ $post->user->name }}</a> . {{ $post->created_at->diffForHumans() }}.
                        <span class="uk-badge uk-text-center uk-align-right"><a class="uk-link-reset" href="/categories/{{$post->category_id}}">{{ $post->category->name }}</a></span></p>

                        <div>
                          {!! $post->body !!}
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
                    <div><a href="http://www.facebook.com/share.php?u={{route('blog.single', $post->slug)}}&title={{$post->slug}}" target="_blank" title="Share this story on Facebook" uk-icon="icon: facebook"></a></div>
                    <div><a href="http://twitter.com/home?status={{$post->slug}}+https://laravel.com/docs/5.5/collections#method-push" target="_blank" title="Share this story on Twiiter" uk-icon="icon: twitter"></a></div>
                    <div><a href="https://plus.google.com/share?url={{route('blog.single', $post->slug)}}" target="_blank" title="Share this story on Google-plus" uk-icon="icon: google-plus"></a></div>
                </div>

                <hr class="uk-divider-icon">
                {{-- comment section --}}
                <div class="ui comments">
                  <h3 class="ui dividing header">Comments</h3>
                  @if (Auth::check())

                    {{ Form::open(['route' => ['comments.store', $post->id ], 'method' => 'POST', 'class'=>'ui reply form']) }}
                    <div class="field">
                      {{ Form::textarea('comment',null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Enter Your comment here..']) }}
                    </div>
                    {{ Form::submit('Comment', ['class' => 'uk-button uk-button-primary']) }}
                    {{ Form::close() }}

                  @else

                    {{ Form::open(['route' => ['comments.store', $post->id ], 'method' => 'POST']) }}

                    <div class="field uk-margin">
                      {{ Form::text('name', null, ['class' => 'uk-input', 'placeholder' => 'Name']) }}
                    </div>

                    <div class="field uk-margin">
                      {{ Form::text('email', null, ['class' => 'uk-input', 'placeholder' => 'Email']) }}
                    </div>

                    <div class="field uk-margin">
                      {{ Form::textarea('comment',null, ['class' => 'uk-textarea', 'rows' => '5', 'placeholder' => 'Write Comment']) }}
                    </div>

                    {{ Form::submit('Add Comment', ['class' => 'uk-button uk-button-primary']) }}

                    {{ Form::close() }}
                  @endif

                  <hr class="uk-divider-small">
                  @forelse($comments as $comment)

                    <div class="comment">
                    <a class="avatar">
                      <img src="{{$comment->user->avatar}}">
                    </a>
                    <div class="content">
                      <a href="/profile/{{$comment->user->id}}" class="author">{{ $comment->user->name }}</a>
                      <div class="metadata">
                        <span class="date">{{$comment->created_at->diffForHumans()}}</span>
                      </div>
                      <div class="text">
                        {!! $comment->comment !!}
                      </div>
                    </div>
                  </div>

                  @empty
                    <div class="uk-text-lead">No One has Commented</div>
                  @endforelse

                </div>
            </div>

            <div class="uk-margin">
                <ul class="uk-iconnav uk-iconnav-vertical uk-position-fixed">
                    {{-- <li><a href="#" uk-icon="icon: plus; ratio:1.7"></a></li> --}}
                    <li><a href="/posts/{{$post->id}}/edit" uk-icon="icon: file-edit; ratio:1.7" title="Edit this Story" uk-tooltip></a><p class="uk-text-meta">EDIT</p> </li>
                    <li>
                      {!! Form::open([ 'route' =>['posts.destroy',$post->id] , 'method' => 'DELETE' ]) !!}

                      {!! Form::submit('Delete' , ['class' =>'uk-button uk-button-default'  ,'onclick'=> 'return confirm("Delete This story ?")', 'id'=>'delete']) !!}

                      {!! Form::close() !!}
                      {{-- <a href="#" uk-icon="icon: trash; ratio:1.7" title="Delete this Story" uk-tooltip></a> --}}
                      <p class="uk-text-meta">DELETE</p>
                    </li>
                    <li><a href="#" uk-icon="icon: list; ratio:1.7" title="See all Stories" uk-tooltip></a> <p class="uk-text-meta">STORIES</p></li>
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