@extends('main')

@section('title', '| All Categories')

@section('description', 'tweBox all categories')

@section('content')

    <div class="uk-padding-large">

        <div class="uk-margin">
            <h2 class="uk-heading-primary">Categories List</h2>
            <hr class="uk-divider-small">
        </div>
        <div class="uk-child-width-1-4@m uk-text-center" uk-grid>

            @foreach( $categories as $category )
            <div class="uk-padding-small">
                <div class="uk-inline uk-light uk-margin uk-inline-clip uk-transition-toggle">

                    <img class="uk-transition-scale-up uk-transition-opaque" src="/images/categories/gaming.jpeg" alt="">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-position-center">
                        <a class="uk-link-reset" href="{{'/categories/'.$category->id }}">
                            <span class="uk-text-large uk-text-bold uk-text-uppercase"> {{ $category->name }} </span>
                        </a><br>
                        <small class="uk-text-meta">123 Stories</small>
                        <p><button class="uk-button uk-button-default uk-button-small">Follow</button></p>
                    </div>

                </div>
            </div>

            @endforeach
            
        </div>

        {{-- <div class="uk-child-width-expand@s uk-text-center" uk-grid>
           
            <div class="uk-padding-small">
                <div class="uk-inline uk-light uk-margin">

                    <img src="/images/categories/gaming.jpeg" alt="">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-position-center">
                        <a href="#" class="uk-link-reset">
                            <span class="uk-text-large uk-text-bold uk-text-uppercase"> Category Name </span>
                        </a><br>
                        <small class="uk-text-meta">123 Stories</small>
                        <p><button class="uk-button uk-button-default uk-button-small"><span uk-icon="icon: check" style="color: green"></span> Following</button></p>
                    </div>

                </div>
            </div>

            <div class="uk-padding-small">
                <div class="uk-inline uk-light uk-margin">

                    <img src="/images/categories/gaming.jpeg" alt="">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-position-center">
                        <a href="#" class="uk-link-reset">
                            <span class="uk-text-large uk-text-bold uk-text-uppercase"> Category Name </span>
                        </a><br>
                        <small class="uk-text-meta">123 Stories</small>
                        <p><button class="uk-button uk-button-default uk-button-small"><span uk-icon="icon: check" style="color: green"></span> Following</button></p>
                    </div>

                </div>
            </div>

            <div class="uk-padding-small">
                <div class="uk-inline uk-light uk-margin">

                    <img src="/images/categories/gaming.jpeg" alt="">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-position-center">
                        <a href="#" class="uk-link-reset">
                            <span class="uk-text-large uk-text-bold uk-text-uppercase"> Category Name </span>
                        </a><br>
                        <small class="uk-text-meta">123 Stories</small>
                        <p><button class="uk-button uk-button-default uk-button-small"><span uk-icon="icon: check" style="color: green"></span> Following</button></p>
                    </div>

                </div>
            </div>

            <div class="uk-padding-small">
                <div class="uk-inline uk-light uk-margin">

                    <img src="/images/categories/gaming.jpeg" alt="">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-position-center">
                        <a href="#" class="uk-link-reset">
                            <span class="uk-text-large uk-text-bold uk-text-uppercase"> Category Name </span>
                        </a><br>
                        <small class="uk-text-meta">123 Stories</small>
                        <p><button class="uk-button uk-button-default uk-button-small"><span uk-icon="icon: check" style="color: green"></span> Following</button></p>
                    </div>

                </div>
            </div>

        </div> --}}

    </div>

@endsection