<header class="uk-position-relative" id="header" >  
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
<nav class="paradeiser">
     <a href="/">
        <h3 >Twebox</h3>
    </a>
    
    <a href="/blogs" class="link">
        <div class="paradeiser_icon_canvas">
            <span uk-icon="icon: thumbnails; ratio:1.3"></span>
        </div>
        <span>Stories</span>
    </a>
    <a href="{{ route('posts.create') }}" class="link">
        <div class="paradeiser_icon_canvas">
            <span uk-icon="icon: file-edit; ratio:1.3"></span>
        </div>
        <span>Write</span>
    </a>
    <a href="#modal-full" class="link" uk-toggle>
        <div class="paradeiser_icon_canvas">
            <span uk-icon="icon: search; ratio:1.3"></span>       
            </div>
        <span>Search</span>
    </a>
    {{-- search full screen  --}}
    <div id="modal-full" class="uk-modal-full uk-modal" uk-modal>
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
            <button class="uk-modal-close-full" type="button" uk-close></button>
            {{-- <form class="uk-search uk-search-large">
                <input class="uk-search-input uk-text-center" type="search" placeholder="Search..." autofocus>
            </form> --}}

            {!! Form::open(['url' =>'search', 'method' => 'POST', 'class' => 'uk-search uk-search-large']) !!}

                {{ Form::search('keywords', null , ['class' => 'uk-search-input uk-text-center uk-inline' , 'placeholder' => 'Search...', 'autofocus' => 'autofocus']) }}

                {{ Form::submit('Submit', ['style' =>'display:none']) }}

            {!! Form::close() !!}
        </div>
    </div>
    @if ( Auth::check() )
    <!-- dropdown list -->
    <div class="paradeiser_dropdown" >
        <a href="#paradeiser-more" id="paradeiser-dropdown">
            <div class="paradeiser_icon_canvas">
                <!-- User icon by Icons8 -->
                <span class="uk-icon uk-icon-image" style="background-image: url( {{ strpos(Auth::user()->avatar, "http",0) ===0 ? Auth::user()->avatar : '/images/user-profile/'.Auth::user()->avatar   }} );"></span>
            </div>
            <span>{{ Auth::user()->name }} </span>
        </a>
        <ul class="paradeiser_children" id="paradeiser-more">
            <li><a href="{{ route('profile.show', ['id' => Auth::user()->username]) }}"><span uk-icon="icon: user"></span> Profile</a></li>
            <li><a href="{{ route('posts.index') }}"><span uk-icon="icon: grid"></span> My Stories</a></li>
            <li><a href="{{ url('my_favorites') }}"><span uk-icon="icon: heart"></span> Likes</a></li>
            <li><a href="{{ url('followed') }}"><span uk-icon="icon: list"></span> Interests</a></li>
            <li><a href="{{ url('my_bookmarked') }}"><span uk-icon="icon: bookmark"></span> Bookmarked Stories</a></li>
            <li><a href="{{route('logout')}}"><span uk-icon="icon: sign-out"></span> Logout</a></li>
            <li id="greybox"><a href="#!"></a></li>
        </ul>
    </div>

    @else
    <a href="{{ route('login') }}">
        <div class="paradeiser_icon_canvas">
            <!-- Login Rounded icon by Icons8 -->
            <span uk-icon="icon: sign-in; ratio:1.3"></span>
        </div>
        <span>Register/Login</span>
    </a>

    @endif
</nav>

  </header>
  <!--/#header -->

  <div id="mySidenav" class="sidenav">
    <a uk-icon="icon: question; ratio:1.7" title="Feedback" id="myBtn" uk-tooltip></a>
  </div>

  <!-- The Modal -->
<div id="feedback-modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h1>Submit your suggestion</h1>
    </div>
    <div class="modal-body">
      <!-- <form action="">
        <input type="text" name="userName" placeholder="your name">
        <input type="text" name="email" placeholder="email address" /><br>
        <textarea name="massage" placeholder="your suggestion here..."></textarea>
        <input type="submit" name="Submit">
      </form> -->
      {!! Form::open([ 'route' => 'feedback.store', 'method' => 'POST' ]) !!}
          <div class="form-group">
          {{ Form::text('username', null, ['class' => 'form-control', 'required'=>'required','placeholder'=>'user name *']) }}<br>
          </div>
          <div class="form-group">
          {{ Form::text('email', null, ['class' => 'form-control', 'required'=>'required','placeholder'=>'email address *']) }}<br>
          </div>
          <div class="form-group">
          {{ Form::textarea('message', null, ['class' => 'form-control', 'required'=>'required','placeholder'=>'your suggestion here... *']) }}<br>
          </div>
          <div class="form-group">
          {{ Form::submit('Submit', ['class' => 'btn btn-submit']) }}
          </div>

        {!! Form::close() !!}
    </div>
  </div>

</div>


<script>
// Modal scripting
// Get the modal
var modal = document.getElementById('feedback-modal');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>