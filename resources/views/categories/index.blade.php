@extends('main')

@section('title', '| All Categories')

@section('description', 'tweBox all categories')

@section('content')
	
	{{-- <section id="company-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="about-us">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h2 class="bold">All Categories</h2>
                        <div class="row padding-bottom">

                            @foreach ( $categories as $category )

                            <div class="category-box">
                                <h3><a href="{{'categories/'.$category->id }}">{{ $category->name }}</a>  </h3>
                            </div>

                            @endforeach

                            <div class="blog-pagination">
                                {!! $categories->links(); !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="our-skills">
                            <h2 class="bold">Create New Category</h2>
                            
                            {!! Form::open([ 'route' => 'categories.store', 'method' => 'POST' ]) !!}

								{{ Form::label('name', 'Name:') }}
								{{ Form::text('name', null, ['class' => 'form-control']) }}<br>

								{{ Form::submit('Create', ['class' => 'btn btn-primary btn-block']) }}

							{!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <div class="uk-padding-large">

        <div class="uk-margin">
            <h2 class="uk-heading-primary">Categories List</h2>
            <hr class="uk-divider-small">
        </div>
        <div class="uk-child-width-expand@s uk-text-center" uk-grid>

            <div class="uk-padding-small">
                <div class="uk-inline uk-light uk-margin uk-inline-clip uk-transition-toggle">

                    <img class="uk-transition-scale-up uk-transition-opaque" src="/images/categories/gaming.jpeg" alt="">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-position-center">
                        <a class="uk-link-reset" href="#">
                            <span class="uk-text-large uk-text-bold uk-text-uppercase"> Category Name </span>
                        </a><br>
                        <small class="uk-text-meta">123 Stories</small>
                        <p><button class="uk-button uk-button-default uk-button-small">Follow</button></p>
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
        </div>

        <div class="uk-child-width-expand@s uk-text-center" uk-grid>
           
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
        </div>

        <div class="uk-child-width-expand@s uk-text-center" uk-grid>
           
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

        </div>

    </div>

@endsection