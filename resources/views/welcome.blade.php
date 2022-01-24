@extends('layouts.app')
@section('content')


<div class="container px-4 mx-auto max-w-5xl">
    <div class="text-center py-10 sm:py-14">
       <a href="{{url('/home')}}"><button
        class="uppercase font-title text-sm font-bold tracking-wide bg-sec text-white rounded-3xl  hover:bg-blue-800 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
        See All Channels
      </button></a>

      <a href="{{route('discussion.index')}}"> <button
      class="mt-5 uppercase font-title text-sm font-bold tracking-wide bg-sec text-white rounded-3xl  hover:bg-blue-800 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
      Discussions
    </button></a>
        
    </div>
    
    <section class="main mt-12 mb-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-8 sm:gap-y-12 lg:gap-y-16 gap-x-8 lg:gap-x-12">

            <!-- first row -->
            <div class="col-span-1 md:col-span-2 lg:col-span-3">
                <div class="border border-gray-100 block md:flex rounded-3xl overflow-hidden transition duration-300 hover:shadow-lg">
                    <div class="md:w-1/2">
                       <img src="{{asset('/img/network.jpg')}}" alt="" class="">
                    </div>
                    <div class="md:w-1/2 p-4 md:p-7 my-8 ml-20">
                        
                        <p class="px-3 py-1 bg-our-bg rounded text-sec text-xs inline animate-pulse ">Latest Channels</p>
                        <ul class="mt-8 w-48 text-xl text-center font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            @foreach($channels as $channel)
                            <a href="{{route('channel.discussion',$channel->id)}}"><li class="py-4 px-4 w-full   rounded-t-lg border-b border-gray-200 dark:border-gray-600">{{$channel->name}}</li></a>
                            @endforeach
                         </ul>
                       
                       
                      
                   
                   
                    </div>
                </div>

            </div>

          

         
           <!-- end  -->



         

         
          


    


       


       
       
           

        </div>

        

    </section>
   

    

 


</div>









@stop   





