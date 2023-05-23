@extends('layouts.page')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


              <div class="col-md-8">
                @if($from=='setpassword')
                  <h2>{{$successMsg}}  </h2> <a class='nav-lin' href="{{ route('login') }}">{{ __('Login') }}</a> 
                @elseif($from=='register')
                   <h2>{{$successMsg}}  </h2>
                   @else
                   <h2>{{$successMsg}}  </h2>
                @endif
              </div>




        </div>
    </div>
</div>
@endsection
