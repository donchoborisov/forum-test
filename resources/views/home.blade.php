@extends('layouts.app')

@section('content')
<div class="container px-4 mx-auto max-w-5xl">
    <div class="text-center py-5 sm:py-14">
    <h1 class="text-3xl md:text-5xl font-bold font-title text-sec">See Our Latest<br /><span class="text-pri">Channels</span></h1>
  
          

</div>
    <hr />
    <div class="mt-8 max-w-screen-lg ">
        <a href="{{route('discussion.create')}}">
        <button class="uppercase font-title text-sm font-bold tracking-wide bg-sec text-white rounded-3xl  hover:bg-blue-800 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
        Start Discussion
      </button>
    </a>
    </div>

 
  
    <section>
         
      @foreach($channels as $channel)  
    <div class="mt-10 mb-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-8 sm:gap-y-12 lg:gap-y-16 gap-x-8 lg:gap-x-12">
    <div class="col-span-1 md:col-span-2 lg:col-span-3 ">
    <div class="hover:shadow-lg border border-blue-100 block rounded-3xl overflow-hidden filter drop-shadow-lg  ">
    <div class=" p-4 md:p-7 ">
    <a href="{{route('channel.discussion',$channel->id)}}"><h2 class="font-bold text-sec text-xl text-center md:text-2xl font-title">{{$channel->name}}</h2></a>
   
    </div>
    </div>
    </div>
     </div>
     @endforeach

    </section>
    </div>
@endsection
