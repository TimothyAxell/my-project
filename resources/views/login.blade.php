<!doctype html  data-theme="cupcake">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <style>
    .splash{
        position: fixed;
        top: 0;
        left: 0;
        height:100vh;
        width: 100%;
        background: white;
        z-index: 200;
        color: black;
        text-align: center;
        line-height: 90vh;
        padding-top: 25%;
    }

    .splash.display-none{
        position: fixed;
        opacity: 0;
        transition: all 0.5s;
        /* animation: fadeOut 1s ease-out forwards; */
        top: 0;
        left: 0;
        height:100vh;
        width: 100%;
        background: white;
        z-index: -10;
        color: black;
        text-align: center;
        line-height: 90vh;
        padding-top: 25%;
    }


    @keyframes fadeIn{
        to{
            opacity:1;
        }
    }

    .fade-in{
        opacity: 0;
        animation: fadeIn 0.3s ease-in forwards
    }
  </style>
</head>
<body class="bg-white">

    {{-- header section --}}
    <div id="header" class="flex justify-center mt-5">
        <h1 class="font-medium text-4xl">Log In</h1> 
        <button class="btn btn-circle btn-outline ml-5">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
          </button>
    </div>
    <hr class="mt-4" style="border: 1px solid black">

    {{-- gives feedback if email/password is wrong --}}
    @if (Session::has('msg'))
    <div style="background-color: red; padding: 4px; color: white">
        <h3>
            {{ Session::get('msg'); }}
        </h3>
    </div>
    @endif

    {{-- login section --}}
    <div class="content px-80">
        <form class="flex w-full justify-center" method="post" action="/ceklogin">
            @csrf
            <div class="relative z-10 p-8 py-10 overflow-hidden bg-slate-200 border-b-2 border-gray-300 rounded-lg shadow-2xl mx-8 w-96 md:w-full mt-16 "
                data-rounded="rounded-lg" data-rounded-max="rounded-full">
                <h3 class="mb-6 text-2xl font-medium text-center">
                    Sign in to your Account
                </h3>

                {{-- field for email --}}
                <input type="email" name="email" id="email"
                    class="block w-full px-4 py-3 mb-4 border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none"
                    data-rounded="rounded-lg" data-primary="blue-500" placeholder="Email address"
                    value="{{ old('email') }}">
                {{-- gives feedback if inputed incorrectly --}}
                @error('email')
                    <label class="label">
                        <span class="label-text-alt text-red-500 text-lg">{{ $message }}</span>
                    </label>
                @enderror

                {{-- field for password --}}
                <input type="password" name="password" id="password"
                    class="block w-full px-4 py-3 mb-4  border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none"
                    data-rounded="rounded-lg" data-primary="blue-500" placeholder="Password">

                {{-- gives feedback if inputed incorrectly --}}
                @error('password')
                    <label class="label">
                        <span class="label-text-alt text-red-500 text-lg">{{ $message }}</span>
                    </label>
                @enderror

                {{-- button login --}}
                <div class="block flex justify-center">
                    <button class="btn btn-outline btn-lg btn-info w-3/6 btn-circle">Log in</button>
                </div>

            </div>
        </form>
    </div>
    
    {{-- splash screen --}}
    <div class="splash">
        <button class="fade-in btn btn-outline btn-circle btn-lg">Artzy</button>
    </div>
</body>
</html>

    {{-- fade out timer for splash screen --}}
    <script type="text/javascript">
        const splash = document.querySelector('.splash');

        document.addEventListener('DOMContentLoaded', (e)=>{
            setTimeout(() => {
               splash.classList.add('display-none'); 
            }, 500);
        })
    </script>
