@extends('layouts.app')

@section('content')

<div class="container px-4 mx-auto max-w-5xl">


    <div class="mb-20 text-center py-5 sm:py-14">
    <h1 class="text-3xl md:text-5xl font-bold font-title text-sec">Discussions</h1>
    </div>
    <hr />
   
    <section class="main">

    <div class="mb-24 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-8 sm:gap-y-12 lg:gap-y-16 gap-x-8 lg:gap-x-12"><!-- first row -->

   
 
   
 @foreach($discussions as $discussion)

    <div class="mt-10 col-span-1 md:col-span-2 lg:col-span-3 mb-20">
        
    <div class="hover:shadow-lg border border-blue-100 block rounded-3xl overflow-hidden filter drop-shadow-lg  ">
        <div class="flex items-center mt-5 ml-5">
        
            <img src="{{ Gravatar::src($discussion->user->name)}}" alt="" class="w-9 h-9 rounded-full">
          

        
            <div class="pl-3">

                <p class="text-xs text-gen">Posted By</p>
                <h6 class="text-xs text-pri font-bold">{{$discussion->user->name}}</h6>
                
            </div>
        </div>   
    <div class=" p-4 md:p-7 ">
     <a href="{{route('discussion.show',$discussion->slug)}}"> 
    <h2 class="text-pri hover:text-sec transition font-bold text-sec text-xl md:text-2xl font-title py-3">{{$discussion->title}}</h2>
    </a>

    </div>
    
    </div>
    </div>

 @endforeach   

{{$discussions->links()}}
    </div>
    </section>
    </div>











@endsection