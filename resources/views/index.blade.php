@extends('layouts.default')
@section('page-content')
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">Learn To  <span class="text-pink-500">code></span></h2>
            <h3 class="text-2xl sm:text-4xl italic">with IpMan</h3>
        </div> 
        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Scroll to learn</p>    
        </div>   
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto p-5">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray-200">Short Discription</h4>
            <p class="mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Temporibus accusamus, eum magni aperiam ipsum possimus incidunt, 
                non quas beatae nulla praesentium sunt quidem ipsa magnam corporis 
                deserunt perspiciatis voluptatum, modi illo. Cum blanditiis iusto 
                dolorem incidunt dolore asperiores earum voluptatem nulla harum at, 
                nemo totam reiciendis neque et iure? Sint.
            </p>
            <a href="{{route('about')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">
            Learn More
            </a>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto p-5">
            <h3 class="text-4xl font-bold mb-6">What you can learn?</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">
                            Game Development
                            <p class="text-gray-200 mb-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Rerum soluta ipsa veritatis unde cum officia, aliquam dolorem labore voluptates odio!
                            </p>
                            <a href="{{url('https://youtube.com/MuddyWolf')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn Now</a>
                        </h3>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">
                            Web Development
                            <p class="text-gray-200 mb-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Rerum soluta ipsa veritatis unde cum officia, aliquam dolorem labore voluptates odio!
                            </p>
                            <a href="{{url('https://youtube.com/MuddyWolf')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn Now</a>
                        </h3>
                    </div>
                </div>
            </div>
    </section>
@endsection