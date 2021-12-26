<!doctype html>
  <html lang="en">
  <head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <style>
    .gradient {
      background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
    }
  </style>
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
  {{-- <body class="bg-gray-700 text-white"> --}}
    <header class="fixed bg-gray-700 top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between p-4">
            <h1 class="text-xl font-black"> Istiyawan Pratiwanto </h1>
            {{-- <nav id="header" class="fixed w-full z-30 top-0 text-white"> --}}
            <nav class="-mx-2"> 
                <a class="text-lg mx-2 text-white hover:text-pink-500 transition" href="{{route('home')}}">Home</a>   
                <a class="text-lg mx-2 text-white hover:text-pink-500 transition" href="{{route('about')}}">About</a> 
            </nav>
        </div>
    </header>
    <main>
        @yield('page-content')
    </main>
    <footer>
        <div class="container mx-auto p-4">
            <p>&copy:Istiyawan Pratiwanto</p>
        </div>
    </footer>
</body>
  	<script src="{{ asset('js/app.js') }}"></script>
  </body>
  </html>