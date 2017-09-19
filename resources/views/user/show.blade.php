@extends('main')

@section('title', '| Profile')


@section('content')

	  {{-- <section id="portfolio-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-offset-1" >
                    <div class="ui centered card">
                      <div class="image">
                        <img src="{{ preg_match('/https/', $user->avatar)  ? $user->avatar : asset('images/user-profile/'. $user->avatar ) }}" alt="{{$user->name}}">
                      </div>
                      <div class="content">
                        <a class="header">{{ $user->name }}</a>
                      </div>
                    </div>
                        <h2>{!! $user->info !!}</h2>
                        <p>

                            @if( Auth::check() )

                                @if( $user->id == Auth::id() )
                                        {!! Html::linkRoute('profile.edit', 'Update' , array($user->id), array('class' => 'btn btn-sm btn-primary') ) !!} 
                                @endif
                            @endif

                        </p>
                </div>
                <h4 class="ui vertical divider header">
                </h4>
                <div class="col-sm-6 col-md-offset-2">
                    <div class="project-name overflow">
                        <h2 class="bold"><i class="fa fa-envelope"></i> {{ $user->email }}</h2>
                    </div><br>
                    <div class="project-name overflow">
                        <h2 class="blod"><b>Stories Published:</b> {{ $posts->total() }} </h2>
                        <h2 class="blod"><b>Total views:</b> {{$total_view}} </h2>
                        <h2 class="blod"><b>Joined from:</b> {{$user->created_at}} </h2>
                        <h2 class="blod"><b>Follow Me:</b> 
                        @if($user->facebook !=null )
                        <a href="{{$user->facebook}}" title="FACEBOOK"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> 
                        @endif
                        @if($user->twitter !=null )
                        <a href="{{$user->twitter}}" title="TWITTER"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                        @endif
                        @if($user->instagram !=null )
                        <a href="{{$user->instagram}}" title="INSTAGRAM"><i class="fa fa-instagram" aria-hidden="true"></i></a> 
                        @endif
                        @if($user->tumblr !=null )
                        <a href="{{$user->tumblr}}" title="TUMBLR"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a> 
                        @endif
                        @if($user->youtube !=null )
                        <a href="{{$user->youtube}}" title="YOUTUBE"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        @endif 
                       </h2>
                    </div>
                    <div class="project-info overflow">
                        
                    </div>
                                        
                </div>
            </div>
        </div>
    </section>
     <!--/#portfolio-information-->
     
     <section id="portfolio-information" >
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-offset-2" style="border-top: 2px solid #e3e3e3;">
                    <div class="editor">
                        <h1>Editor In:</h1>
                         @foreach($categories as $category)
                                <h3 class="cat-box">{{$category}}</h3>
                            @endforeach
                    </div> 
                </div>
            </div>
        </div>
                    <hr>   
    </section>
     <!--/#portfolio-information-->
     

     <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                	<h1 class="title padding-bottom">{{$user->name}}'s Posts:</h1>

                    @foreach( $posts as $post )
                         <div class="col-md-5 col-sm-12 blog-padding-right blog-box">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="{{ route('posts.show',$post->id) }}">
                                    @if($post->image == null)
                        
                                    @else
                                    <img src="{{asset('/images/blog/' . $post->image)}}" class="img-responsive" alt="{{$post->title}}">
                                    @endif
                                    </a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="{{ route('blog.single', $post->slug) }}"><small>{{$post->created_at->diffForHumans() }}</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="{{ route('posts.show',$post->id) }}">{{ $post->title }}</a></h2>
                                    <h3 class="post-author"><a href="{{ '/profile/'. $post->user_id }}">Posted by {{ $user->where('id',$post->user_id)->pluck('name')->first() }}</a></h3>
                                    <p> {{ substr(strip_tags($post->body), 0 ,250) }} {{ strlen(strip_tags($post->body)) >250 ? '...' : '' }} </p>
                                    <a href="{{ route('posts.show',$post->id) }}" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="{{'/categories/'.$post->category->id }}"><i class="fa fa-tag"></i>{{ $post->category->name }}</a></li>
                                            <li><a href="{{ route('posts.show',$post->id) }}"><i class="fa fa-eye"></i>{{ $post->views }} Views</a></li>
                                            <li><a href="{{ route('posts.show',$post->id).'#comments' }}"><i class="fa fa-comments"></i>{{ $post->comments()->count() }} Comments</a></li>
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
                        
                        <div class="sidebar-item popular">
                            <h3>Advertisment</h3>
                            
                        </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--/#blog-->

	
{{-- ########################################################################################################## --}}


    <div class="uk-container uk-padding-large">
        {{-- backgroud image --}}
        <div class="uk-background-cover uk-background-muted uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/images/blog/1493449659.jpg);">
            {{-- user profile image --}}
                <div uk-lightbox>
                    <a href="{{ asset('/images/user-profile/1494097628.jpg') }}"><img  class="uk-position-bottom uk-border-circle uk-padding-small" style="z-index: 100;" width="150" height="150" src="../images/user-profile/1494097628.jpg"></a>
                </div>
                <div class="uk-overlay-default">
                <p class="uk-heading-primary">Harsh Kumar</p>
                </div>

                <ul class="uk-breadcrumb uk-position-bottom-right uk-text-meta uk-margin-small-right" style="color:#ffffff; z-index: 100;">
                    <li>111 Stories</li>
                    <li>15K Views</li>
                    <li>7K Likes</li>
                </ul>
                <p class="uk-position-bottom uk-overlay uk-overlay-primary">
                </p>
        </div>
        <div class="uk-flex uk-flex-right uk-padding-small">
            <a class="uk-button uk-button-default uk-margin-small-right" href="/profile/13/edit"><span uk-icon="icon: pencil"></span> Edit Profile</a>
            <a class="uk-button uk-button-default" href="#"><span uk-icon="icon: cog"></span> Setting</a>
        </div>

        <div class="uk-container uk-width-1-2@m uk-width-1-1 uk-padding-large">
            <div class="uk-text-lead"><i uk-icon="icon: clock; ratio:1.5"></i> 2:00 PM - April 01, 2016</div>
            <div class="uk-divider-small"></div>
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
                  <div class="uk-child-width-auto">
                    <a uk-icon="icon: social" title="Share" uk-tooltip></a>
                    {{-- <button class="uk-button uk-button-default" uk-icon="icon: social" type="button"></button> --}}
                    <div uk-dropdown="mode: click">
                        <ul class="uk-iconnav uk-padding-remove">
                            <li><a href="#" uk-icon="icon: facebook" title="Facebook" uk-tooltip></a></li>
                            <li><a href="#" uk-icon="icon: twitter" title="Twiiter" uk-tooltip></a></li>
                            <li><a href="#" uk-icon="icon: google-plus" title="Google Plus" uk-tooltip></a></li>
                            <li><a href="#" uk-icon="icon: instagram" title="Instagram" uk-tooltip></a></li>
                        </ul>
                    </div>
                   </div>
                  <div class="uk-child-width-auto"><a href="" uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></a> </div>
                </div>
              </div>
            </div>

            {{-- <div class="uk-align-center uk-text-center" uk-spinner></div> --}}
        </div>
    </div>


@endsection