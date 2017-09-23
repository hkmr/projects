@extends('main')

@section('title' , '| HomePage')

@section('description' , 'tweblog ,best blogging sites ')


@section('content')

<div class="uk-container uk-margin-xlarge-top">
    
    {{-- Welcome Message --}}
    <div uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <div class="uk-padding-small">
        <i uk-icon="icon: info; ratio: 1.5"></i>
        <span class="uk-text-middle uk-text-large" id="type-it"> Welcome to twebox. <br> We Are happy to have you here.</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>

    @include('pages.welcome.latest')

    @include('pages.welcome.weeks_trending')

    @include('pages.welcome.category')

    @include('pages.welcome.recommended')

</div>

@endsection