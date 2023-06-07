@extends('layouts.banner')
@extends('layouts.slider')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


              <div class="col-md-8">
                  <h2 style="color: black;"> {{ __('Welcome    ') }}
                      {{ Auth::user()->name }}  </h2>
              </div>




        </div>
    </div>
</div>


<div  style="padding-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                    <div  class="card-header justify-content-center">                
                    <h4 style="color: black;"> {{ __('Blog List') }}  </h4>
                                    <div class="head-section">
                                   
                                            <a href="{{ route('create-content') }}">
                                                <button class="btn btn-default">  {{('Add Blog') }}    </button>  </a>
                                     <div>
                    </div>

               

            </div>
        </div>
    </div>
</div>



<div class="container">
    
                        <div class="row" style="text-align: right;">
                            <div  style="font-size: larger;">
                               
                            </div>
                        </div>  
        <div class="row col-md-12"> 
        
     
        @if($contents)

                @foreach($contents as $content)
                    
             
        
                <div class="col-md-3">
                    
                    <div class="card-product">
                       <div class="title">
                           <b> {{ $content->title }} </b>  
                        </div>
                        @php   

                            
                            $decodedContent = html_entity_decode($content->blog);
                            $limitedContent = Str::limit($decodedContent, 150, '...');
                            $isContentLimited = Str::length($decodedContent);
                        @endphp

                        <div class="post-content">
                            
                            {!! $limitedContent !!}
                            
                            @if ($limitedContent > 150 )
                            
                                <a href="{{ route('view-content', $content->id) }}" style="color: blue;">Read More</a>
                            @endif
                        </div>             
                                                                        
                    </div>
                </div>
            

                @endforeach


            @endif
        </div>
    </div>
</div>          

<style>
   
    .post-content img {
        max-width: 200px; /* Maximum width for the displayed image */
        max-height: 150px; /* Maximum height for the displayed image */
    }
    .ck-content img:hover{
        width: 100px !important;
    }
    </style>

@endsection
