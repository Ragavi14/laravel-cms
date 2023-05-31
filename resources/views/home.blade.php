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
                                                <button>  {{('Add Blog') }}    </button>  </a>
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
                    
             
        
                <div class="col-md-4">
                    
                    <div class="card-product">
                       <div class="title">
                           <b> {{ $content->title }} </b>  
                        </div>
                        <div>
                           <b> {{ $content->blog }} </b>
                        </div>
                        <br>                 
                                                                     
                    </div>
                </div>
            

                @endforeach


            @endif
        </div>
    </div>
</div>          


          

          <!-- @if(isset($contents))
                         @foreach($contents as $key => $value)
                         <div class="row justify-content-center ">
                            <div class="col-md-8 c ">
                                <div class="content-sec">
                                    <div class="">
                                        <div class="title">  {{$value->title}}  </div>
                                        <div> <p> {{$value->blog}} </p> </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         @endforeach;
                @endif; -->

@endsection
