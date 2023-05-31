@extends('layouts.cms')


@section('content')

  
<div style="text-align: center; padding: 10px;">
<a class="justify-content-center" href="{{ route('create-content') }}">
                                      <button>  {{('Add Blog') }}    </button>
                                    </a> <div>

                                    <!-- <a class="justify-content-center" href="{{ route('homePage') }}">
                                      <button>  {{('ad') }}    </button>
                                    </a>

                                    <div style="text-align: center; padding: 10px;">
<a class="justify-content-center" href="{{ route('show-content') }}">
                                      <button>  {{('Blog') }}    </button>
                                    </a> <div> -->

<div  style="padding-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blogs') }}</div>

                <div class="card-body">
                    <table style="width:100%">
                   
                                            <tr>
                                                
                                                <th class="title">Tittle</th>
                                                <th class="title">Content</th>
                                                
                                            </tr>
                                            
                                                @if(isset($contents))
                                                    @foreach($contents as $key => $value)
                                                                                                                                                    
                                                            
                                                            
                                                                       
                                                            <td class="card-header">{{$value->title}}</td>                                                                   
                                                            <td class="card-header">{{$value->blog}}</td>             
                                                            <td class="card-body"> <a href="{{ route('edit-content',$value->id) }}">
                                                                <button id="btn-submit" class="btn btn-primary"> Edit </button></a>
                                                            </td>
                                                        
                                                            <td class="card-body"> <form action="{{ route('destroy-content',$value->id) }}" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                                </form> 
                                                            </td>
                                            </tr>
                                                        @endforeach
                                                @endif   
                                                            
                                            
                                            
                                                
                                        
                        
                    
                     </table> 
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 