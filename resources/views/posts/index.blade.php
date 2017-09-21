@extends('main')

@section('title','| All Posts')


@section('content')

    <div class="uk-padding-large">
        
    <div uk-grid>
        <div class="uk-width-1-6@m"></div>
        <div class="uk-width-3-5@m">
            <h1 class="uk-heading-divider">Stories Written by You</h1>
            <a class="uk-button uk-button-default" href="#">Write New Story</a>

            @foreach( $posts as $post )

            <h4 class="uk-heading-bullet uk-text-meta">{{ $post->created_at->diffForHumans() }}</h4>
            <div class="uk-card-default uk-card-body">
                <div class="uk-card-header">
                    <h3 class="uk-card-title"> <a class="uk-link-reset" href="{{ route('posts.show',$post->id) }}">
                        {{ $post->title }}
                    </a>
                    <span class="uk-align-right uk-badge">{{ $post->category->name }}</span>
                    </h3>
                    <p class="uk-align-right"><span uk-icon="icon: clock; ratio: 0.7"></span> 3 min</p>

                </div>
                <p>{{ substr(strip_tags($post->body),0,250)}} {{ strlen(strip_tags($post->body)) >250 ? "..." : "" }} <a class="uk-link-reset" href="{{ route('posts.show',$post->id) }}"> read more.</a></p>
                <div class="uk-card-footer ">
                    <div class="uk-child-width-1-5" uk-grid>
                        <div><a href="#" uk-icon="icon: heart"></a> 15K</div>
                        <div><a href="#" uk-icon="icon: comments"></a> {{ $post->comments()->count() }} </div>
                        <div><a href="#" uk-icon="icon: social"></a> 15K</div>
                        <div><a href="#" uk-icon="icon: bookmark"></a> 15K</div>
                        <div><a href="#" class="uk-link-muted" uk-icon="icon: chevron-down"> More</a></div>
                        
                    </div>
                </div>
            </div>

            @endforeach

            {{-- loader --}}
            <div class="uk-align-center uk-text-center" uk-spinner></div>
        </div>
    </div>

    </div>



@endsection