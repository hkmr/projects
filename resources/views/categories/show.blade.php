@extends('main')

@section('title' , " Blogs ")

@section('description',' blogs category')

@section('content')

{{-- 	<section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">

                        @if($posts->count() == 0 )

                        <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <h1>Sorry ! No posts yet.. </h1>
                                <h2>Stay tuned !</h2>                                        
                            </div>
                        </div>

                        @else
                    	@foreach ($posts as $post)
                         <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <div class="post-thumb">
                                    <a href="{{ route('blog.single', $post->slug) }}">
                                    @if($post->image == null)
									<img src=" {{ asset('images/blog/blog-default.jpg') }} " alt="default-image" height="270" width="480" />
									@else
										<img src=" {{ asset('images/blog/'. $post->image) }} " alt="{{$post->name}}" height="270" width="480" />
									@endif
                                    </a>
                                    <div class="post-overlay">
                                       <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                   </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></h2>
                                    <h3 class="post-author"><a href="{{ '/profile/'. $post->user_id }}">Posted by {{ $users->where('id',$post->user_id)->pluck('name')->first() }}</a></h3>
                                    <p>{{ substr(strip_tags($post->body), 0, 250) }} {{ strlen(strip_tags($post->body)) >250 ? '...' : '' }}</p>
                                    <a href="{{ route('blog.single', $post->slug) }}" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                            <li><a href="{{'/categories/'.$post->category->id }}"><i class="fa fa-tag"></i>{{ $post->category->name }}</a></li>
                                            <li><a href="{{ route('blog.single', $post->slug) }}"><i class="fa fa-heart"></i>{{ $post->views }} Views</a></li>
                                            <li><a href="{{ route('blog.single', $post->slug.'#comments') }}"><i class="fa fa-comments"></i>{{$post->comments->count() }} Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        
                        @endif

                    </div>
                    <div class="blog-pagination">
                        <ul class="pagination">
                          {!! $posts->links(); !!}
                        </ul>
                    </div>
                 </div>
            </div>
        </div>
    </section>
	 --}}

     <div class="uk-padding-large">

         <div class="uk-flex uk-flex-center">
             <div class="uk-width-1-2@m">
                 <h2 class="uk-heading-primary">All stories of {{ $posts->first()->category->name }}</h2>
                 <div class="infinite-scroll">
                 @forelse ($posts as $post)
                     
                    <div class="uk-card uk-card-default uk-margin">
                      <div class="uk-card-header uk-padding-small">
                          <h1 class="uk-card-title uk-text-uppercase"><a class="uk-link-reset" href="{{ route('blog.single', $post->slug) }}" title="{{ $post->title }}">
                          {{ substr(strip_tags($post->title), 0 ,20) }} {{ strlen( strip_tags($post->title )) >30 ? '...' : '' }}</a> </h1>
                          <span class="uk-badge uk-text-center uk-align-right"><a class="uk-link-reset" href="{{'/categories/'.$post->category->id }}">{{$post->category->name}}</a></span>
                          <div class="uk-grid-small uk-flex-middle" uk-grid>
                              <div class="">
                                  <img class="uk-border-circle uk-icon uk-icon-image" width="30" height="30" 
                                  src="{{ $post->user->avatar }}">
                              </div>
                              <div class="uk-text-left">
                                <h3 class="uk-text-small uk-margin-remove-bottom"><a class="uk-link-reset" href="/profile/{{$post->user->id}}">{{$post->user->name}}</a></h3>
                                  <p class="uk-text-meta uk-margin-remove-top"><time>{{$post->created_at->diffForHumans()}}</time></p>
                              </div>
                              <div >
                                  <p class="uk-text-right"><a uk-icon="icon: clock; ratio: 0.6"></a><span class="uk-text-meta uk-text-small"> 3min</span></p>
                              </div>
                          </div>
                      </div>
                      <div class="uk-card-body">
                        <div class="uk-background-blend-darken uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url( {{ $post->featured_image  }} );">

                        </div>
                          <p>{{ substr(strip_tags($post->body), 0 ,100) }} {{ strlen(strip_tags($post->body)) >250 ? '...' : '' }}<a href="{{ route('blog.single', $post->slug) }}">read more.</a></p>
                      </div>
                      <div class="uk-card-footer">
                        <div class="uk-grid-small uk-child-width-1-4" uk-grid>
                          <favorite :post= {{ $post->id }} :favorited= {{ $post->favorited() ? 'true' : 'false' }}
                            :likes={{ $post->likes }} >
                          </favorite>

                          <div class="uk-child-width-auto">
                            <a href="{{ route('blog.single', $post->slug.'#comments') }}" uk-icon="icon: comments" title="Comment" uk-tooltip></a><span class="uk-text-meta uk-text-small"> {{ $post->comments()->count() }}</span> 
                          </div>

                          <div class="uk-child-width-auto">
                            <a uk-icon="icon: social" title="Share" uk-tooltip></a>
                            <div uk-dropdown="mode: click">
                                <ul class="uk-iconnav uk-padding-remove">
                                    <li><a href="#" uk-icon="icon: facebook" title="Facebook" uk-tooltip></a></li>
                                    <li><a href="#" uk-icon="icon: twitter" title="Twiiter" uk-tooltip></a></li>
                                    <li><a href="#" uk-icon="icon: google-plus" title="Google Plus" uk-tooltip></a></li>
                                    <li><a href="#" uk-icon="icon: instagram" title="Instagram" uk-tooltip></a></li>
                                </ul>
                            </div>
                           </div>
                          <bookmark :post= {{ $post->id }} :bookmarked = {{ $post->bookmarked() ? 'true': 'false' }} :bookmarks ={{ $post->bookmarks }}
                          ></bookmark>
                        </div>
                      </div>
                    </div>

                 @empty

                    <div class="uk-text-lead">Sorry No Story published yet!</div>

                 @endforelse

                    <div> {{ $posts->links() }} </div>

                </div>
             </div>
         </div>
     </div>

@endsection