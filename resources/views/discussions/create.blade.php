@extends('layouts.app')

@section('content')

<section class=" mb-10">

 
    <div class="text-center w-full">
        
      </div>
      <div class="max-w-screen-lg mt-24 mb-20 px-8 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
        <div class="flex flex-col justify-between">
         
     
        </div>





        <div class="">

          <form method="POST" action="{{ route('discussion.store') }}">@csrf

            <div class="mt-8 {{ $errors->has('title') ? 'has-error' : '' }}">
                <span class="uppercase text-sm font-title text-gray-600 font-bold">Title</span>
                <input class="w-full ring-sec focus:ring-1 bg-gray-300 text-gray-900 mt-2 p-3 bg-our-bg rounded-lg focus:outline-none focus:shadow-outline"
                  type="text" name="title" placeholder="Title">
                  <span class="text-red-700 bg-red-600 bg-opacity-20 text-xs  rounded">{{ $errors->first('title') }}</span>
              </div>


              <div class="mt-8  {{ $errors->has('content') ? 'has-error' : '' }}">
                <span class="uppercase font-title text-sm text-gray-600 font-bold">Content</span>
                    
                <input id="content" type="hidden" name="content">
                <trix-editor input="content"></trix-editor>

                
                  <span class="text-red-700 bg-red-600 bg-opacity-20 text-xs  rounded">{{ $errors->first('content') }}</span>
                </div>

                <div class="mt-8  {{ $errors->has('channel') ? 'has-error' : '' }}">
                    <span class="uppercase font-title text-sm text-gray-600 font-bold">Channel</span>
                      <select class="w-full ring-sec focus:ring-1 bg-gray-300 text-gray-900 mt-2 p-3 bg-our-bg rounded-lg focus:outline-none focus:shadow-outline" name="channel">
                          <option>Select Channel </option>
                          @foreach($channels as $channel)
                          <option value="{{$channel->id}}">{{$channel->name}} </option>
 
                          @endforeach
                      </select>
                      <span class="text-red-700 bg-red-600 bg-opacity-20 text-xs  rounded">{{ $errors->first('channel') }}</span>
                    </div>
        
        

       


       
          <div class="mt-8">
            <button
              class="uppercase font-title text-sm font-bold tracking-wide bg-sec text-white rounded-3xl  hover:bg-blue-800 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
              Create Discussion
            </button>
          </div>


        </form>
        </div>
      </div>



</section>




@endsection

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
@endsection
@section('js')


<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
@endsection
