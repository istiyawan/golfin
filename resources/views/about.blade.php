@extends('layouts.default')

@section('page-content')

<section class="py-20">
        <div class="max-w-screen-md mx-auto p-5">
            <h3 class="text-4xl font-bold mb-6">About</h3>
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

@endsection