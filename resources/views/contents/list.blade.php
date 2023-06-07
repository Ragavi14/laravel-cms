@extends('layouts.cms')


@section('content')

  
                            <div style="text-align: center; padding: 10px;">
                                    <a class="justify-content-center" href="{{ route('create-content') }}">
                                        <button class="btn btn-warning">  {{('Add Blog') }}    </button>
                                    </a> 
                            <div>

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
                <div class="card-header"> <h3> {{ __('Blogs') }}  </h3> </div>
                            
                <div class="card-body">
                    <table style="width:100%">
                   
                                            <tr>
                                                
                                                <th class="title">Tittle</th>
                                                <th class="title">Content</th>
                                                
                                            </tr>
                                            
                                                @if(isset($contents))
                                                    @foreach($contents as $key => $value)
                                                                                                                                                    
                                                            
                                                            
                                                                       
                                                            <td class="card-header"> {{$value->title}}</td>
                                                            @php    
                                                                $decodedContent = html_entity_decode($value->blog);
                                                                $limitedContent = Str::limit($decodedContent, 150, '...');
                                                            @endphp
                                                            <td class="ck-content"> {!! $limitedContent !!}</td>                                                                   
                                                                       
                                                            <td class="card-header"> <a href="{{ route('edit-content',$value->id) }}">
                                                                <button id="btn-submit" class="btn btn-primary"> Edit </button></a>
                                                            </td>
                                                        
                                                            <td class="card-header"> <form action="{{ route('destroy-content',$value->id) }}" method="POST">
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
            <a href="#" id="go-to-top-btn" class="go-to-top-btn btn" title="Go to Top">Go to Top</a>

        </div>
    </div>
</div>


<style>
    .ck-content img {
        max-width: 200px; /* Maximum width for the displayed image */
        max-height: 150px; /* Maximum height for the displayed image */
    }
    .go-to-top-btn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 100px;
    height: 50px;
    background-color: #333;
    color: #fff;
    border-radius: 10%;
    text-align: center;
    line-height: 40px;
    font-size: 15px;
    z-index: 9999;
}

.go-to-top-btn:hover {
    background-color: #555;
}

</style>

<script>

document.addEventListener('DOMContentLoaded', function() {
    var goTopBtn = document.getElementById('go-to-top-btn');

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 100) {
            goTopBtn.style.display = 'block';
        } else {
            goTopBtn.style.display = 'none';
        }
    });

    goTopBtn.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});


</script>
@endsection 