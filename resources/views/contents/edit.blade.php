@extends('layouts.cms')
@extends('layouts.editor')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                
                <div class="card-body">
                @if(isset($contents))
                            @foreach($contents as $content)
                            
                   
                    <h4 style="text-align: center; padding: 10px;">Edit and Update</h4>
                        <form action="{{  route('update-content',$content->id) }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')

                        
                        <div class="form-group mb-3">
                            <label for="title"> <h5> <b> Title </b> </h5> </label>
                            <input type="text" name="title" value="{{isset($content->title)?$content->title:''}}" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="blog"> <h5> <b> Content </b> </h5> </label>
                            <textarea name="blog" id="editor">{!! $content->blog !!}</textarea>
                            <!-- <input type="text"  id="blog" name="blog" value="{{isset($content->blog)?$content->blog:''}}" required class="form-control"> -->
                        </div>
                        
                        
                            <p>Do you want to save the Changes ?</p>
                            <button type="submit" class="btn" style="background-color: green; color: white;">Yes</button> </form> <br>
                          <a href="{{ route('list-content') }}">  <button class="btn" style="background-color: red; color: white;">No</button> </a>
                        </div>

                        
                            @endforeach
                @endif
                </div>
                  
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

ClassicEditor
      .create( document.querySelector( '#editor' ),{ 
            ckfinder: {
                  uploadUrl: "{{route('uploadFile').'?_token='.csrf_token()}}",
            }
      } )
      .then( editor => {

            console.log( editor );

      } )
      .catch( error => {
            console.error( error );
      } );
</script>

<style>
    .ck-content img {
        max-width: 100px; /* Maximum width for the displayed image */
        max-height: 100px; /* Maximum height for the displayed image */
    }
</style>


@endsection