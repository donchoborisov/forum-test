@extends('layouts.app')

@section('content')





<div class="container px-4 mx-auto max-w-5xl">
    <div class="text-center py-5 sm:py-14 mb-20">
    <h1 class="text-3xl md:text-5xl font-bold font-title text-sec">{{$discussion->title}}</h1>
    </div>
    <hr />
    <div class="text-center py-10 sm:py-14">
    <h5 class="font-title text-gen opacity-70 mb-24">{!! $discussion->content !!} </h5>
    </div>
   <hr> 
   <section class="main mb-24">

    

      @foreach($discussion->replies()->paginate(3) as $reply)

      <div class=" mt-5 mb-5 max-w-3xl mx-auto text-center border border-gray-100 block rounded-3xl overflow-hidden filter drop-shadow-lg">
        <div class="flex justify-between items-center mt-5 ml-5">
         
          <div class="pl-3">
            <img src="{{ Gravatar::src($reply->owner->name)}}" alt="" class="w-9 h-9 rounded-full mb-5">
              <p class="text-xs text-gen">Posted By</p>
              <h6 class="mb-5 text-xs text-pri font-bold">{{$reply->owner->name}}</h6>

              
          </div>

          <div id="app" class="pl-3 mr-20">
            <p class="" >{!! $reply->content !!}</p>

            @if($reply->is_liked_by_auth_user())
           @auth
            <unlike-component replyid="{{$reply->id}}"></unlike-component><p  class="text-xs text-gen">{{$reply->likes->count()}}<p>
            {{-- <a href="{{route('reply.unlike',['id' => $reply->id])}}" class="text-xs text-gen">{{$reply->likes->count()}} Unlike<a> --}}
           @else
            
           
         
           @endauth
            @else 

            @auth
             <like-component replyid="{{$reply->id}}"></like-component> <p class="text-xs text-gen">{{$reply->likes->count()}} </p>
            {{-- <a  href="{{ route('reply.like', ['id' => $reply->id])}}"  class="text-xs text-gen">{{$reply->likes->count()}}  Like<a> --}}
            @else 
              
            <p  class="text-xs text-gen">{{$reply->likes->count()}} Likes<p>

            @endauth
            @endif
             
          </div>
        



                 
      </div>  

      </div>

      
      @endforeach

      {{$discussion->replies()->paginate(3)->links()}} <br>


    



    
    
     @auth
    <form action="{{route('replies.store',$discussion->slug)}}" method="POST">@csrf 

         
        <input type="hidden" name="discussion_id" value="{{ $discussion->id}}">
        <input type="hidden" name="content" id="content">

        <trix-editor input="content"></trix-editor>

        <div class="mt-8">
            <button
              class="uppercase font-title text-sm font-bold tracking-wide bg-sec text-white rounded-3xl  hover:bg-blue-800 text-gray-100 p-3 rounded-lg  focus:outline-none focus:shadow-outline">
              Add Reply
            </button>
          </div>

    </form>
    @else 

    <h4 class="text-lg md:text-md font-bold font-title text-sec"><a href="{{ route('login') }}">Sign In</a><span class="text-pri"> To add a reply </span></h4>

    @endauth

 
 
  
 
  
  
    </section>
    </div>


@endsection


@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
@endsection
@section('js')


<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
@endsection

