@extends('main')

@section('title','| Create New Post')

@section('description', 'create new post in tweBox')


@section('content')

	{{-- <section id="portfolio-information" class="padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    
                    <h1 class="uk-heading">Write Story</h1>
                    <hr class="uk-divider-small"></hr>
                    {!! Form::open(array('route' => 'posts.store' , 'data-parsley-validate' => '', 'files' => true)) !!}

                    <div class="form-group">
					{{ Form::label('title','Story Title:') }}
					{{ Form::text('title', null, array('class' => 'form-control' , 'required' => '' ,
					'maxlength' => '255', 'placeholder' => "What's Your Story Title")) }}
					</div>

					<div class="form-group">
					{{ Form::label('category_id', 'Story Category:') }}
					<select class="form-control" name='category_id'>
					</div>

					@foreach ($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
					</select>
					</div>


					{{ Form::label('featured_image','Upload Story cover Image') }}
					{{ Form::file('featured_image') }}

					<div class="form-group">
					{{ Form::label('body','Story Body:') }}
					{{ Form::textarea('body', null, array('class' => 'form-control','id'=>'post-body')) }}
					</div>

					{{ Form::submit('PUBLISH  STORY', array('class' => 'uk-button uk-button-primary uk-button-large uk-align-center' ,'style' => 'margin-top:20px;')) }}
				{!! Form::close() !!}

                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')


	<script src='/js/tinymce/tinymce.min.js'></script>

	<script>
	    var editor_config = {
	        path_absolute : "{{ URL::to('/') }}/",
	        selector: "textarea",
	        menubar: false,
	        plugins: [
	            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
	            "searchreplace wordcount visualblocks visualchars code fullscreen",
	            "insertdatetime media nonbreaking save table contextmenu directionality",
	            "emoticons template paste textcolor colorpicker textpattern textcolor"
	        ],
	        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image | fontselect | forecolor | fontsizeselect",
	        content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'],
	        relative_urls: false,
	        file_browser_callback : function(field_name, url, type, win) {
	            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
	            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
	            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
	            if (type == 'image') {
	                cmsURL = cmsURL + "&type=Images";
	            } else {
	                cmsURL = cmsURL + "&type=Files";
	            }
	            tinyMCE.activeEditor.windowManager.open({
	                file : cmsURL,
	                title : 'Filemanager',
	                width : x * 0.8,
	                height : y * 0.8,
	                resizable : "yes",
	                close_previous : "no"
	            });
	        }
	    };
	    tinymce.init(editor_config);
	</script>
 --}}


 	<div class="uk-padding-large">
 		
 		<div uk-grid>
 			<div class="uk-width-1-6@m"></div>
 			<div class="uk-width-3-5@m">
 				<h1 class="uk-heading-divider">Write Story</h1>
 				<form>

			        <fieldset class="uk-fieldset">
			        	
			        	<div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
				            <label><input class="uk-radio" type="radio" name="radio2" checked> Public</label>
				            <label><input class="uk-radio" type="radio" name="radio2"> Private</label>
				        </div>

	 					<div class="uk-margin">
					        <input class="uk-input uk-form-width-1-1" type="text" placeholder="Title Of Story">
					    </div>

					    <div class="uk-margin">
					        <label class="uk-form-label" for="form-stacked-select">Select Category</label>
					        <div class="uk-form-controls">
					            <select class="uk-select" id="form-stacked-select">
					                <option>Option 01</option>
					                <option>Option 02</option>
					            </select>
					        </div>
					    </div>

					    <div class="uk-margin" uk-margin>
					        <div uk-form-custom="target: true">
					        	<label class="uk-form-label">Select Image File </label>
					            <input type="file">
					            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select Cover Image" disabled>
					        </div>
					    </div>

					     <div class="uk-margin">
				            <textarea class="uk-textarea" rows="5" placeholder="Your Story here..."></textarea>
				        </div>

			        </fieldset>	

			        <button class="uk-button uk-button-primary">Publish</button>
 				</form>
 			</div>
 		</div>

 	</div>
	 
@endsection