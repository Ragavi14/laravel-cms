@extends('layouts.app')


@section('content')                    
                    
                    
<h2 class="text-3xl text-bold"></h2>
                      
<div class="container">
    <div class="row">
        <div class="col-md-12">  
            
     
       

            
             
        
        <div class="row">
            <div class="col-xl-12 text-right">
                <a href="{{ route('home1') }}" class="btn btn-danger"> Back </a>
            </div>
        </div>
        @if($content)
                        
                        <div>
                            <div class="row">
                                <div>
                                    <div class="title">
                                        <h2> {{ $content[0]->title }} </h2>  <br>
                                    </div>
                                       <div class="post-content">
                                        {!! html_entity_decode($content[0]->blog) !!}
                                       </div>  
                                        
                                    
                                    <br>
                                    
                                          
                                  


                                </div>
                                
                            </div>
                            
          </div> 
                </div>
            
             
                @endif
        </div>
    </div>
</div>  

<style>
    .post-content img {
        max-width: 350px; /* Maximum width for the displayed image */
        max-height: 300px; /* Maximum height for the displayed image */
    }
    .post-content {
        font-size: 25px;
        font-family: cursive;
    }
    h2 {
        font-family: Segoe UI;
        font-style: bold;
        text-align: center;
    }
    </style>

@endsection