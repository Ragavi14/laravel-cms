@extends('layouts.front')
@extends('layouts.slider')



@section('content')

<div class="container">
    
    <div class="row justify-content-center" style="padding: 10px;">
  
        <div class="col-md-8">
            <div class="card">
                
                    <div  class="card-header justify-content-center" style="padding: 10px;">                
                    <h4> {{ __('Blog List') }}  </h4>
                                   
                    </div>

               

            </div>
        </div>
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
   
@endsection