@extends('layouts.cms')
@extends('layouts.editor')

@section('content')

<div class="container mt-5">
        <div class="row">
            <div class="col-xl-12 text-right">
            
            </div>
        </div>

        <form action="{{url('save-content')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">

                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ Session::get('success') }}
                        </div>
                    @elseif(Session::has('failed'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ Session::get('failed') }}
                        </div>
                    @endif

                    <div class="card shadow">

                        <div class="card-header">
                            <h4 class="card-title"> Create New Blog </h4>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                            <label> Title </label>
                                <input type="text" class="form-control" name="title" placeholder="Enter the Title">
                            </div>
                            <div class="form-group">
                                <label> Description </label>
                                <textarea class="form-control editor" id="blog"  placeholder="Enter the content here...." name="blog"></textarea>
                            </div>
                        </div>

                        <div class="card-footer"> 
                            <button type="submit" class="btn btn-success"> Save </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

     <!-- Script -->
   
    <script type="text/javascript">

    ClassicEditor
          .create( document.querySelector( '.editor' ),{ 
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