<div>
    <header class="mb-10 font-cabin bg-rosewood">
        <div class="mx-auto px-8 py-5 flex flex-wrap flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <a href="/" class="mr-5 text-princeton-orange font-bold hover:text-vermilion">HOME</a>
                <a href="/about" class="mr-5 text-princeton-orange font-bold hover:text-vermilion">ABOUT</a>
                <a href="/candles" class="mr-5 text-princeton-orange font-bold hover:text-vermilion">CANDLES</a>
            </nav>
            <div class="flex flex-col md:flex-row order-first lg:order-none lg:w-1/5 items-center lg:items-center lg:justify-center mb-4 md:mb-0">
                {{-- <div class="relative">
                    <input type="text" class="h-10 w-11/12 pr-8 pl-5 rounded focus:outline-none" placeholder="Search candles...">
                    <div class="absolute top-2 right-7">
                        <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                    </div>
                </div> --}}
            <div class="relative rounded-full bg-princeton-orange w-20 h-20 px-10 mx-auto">
                <img class="absolute -top-1 right-1 w-20 h-20 mx-auto mt-2" src="{{ URL('img/icon-logo.png') }}" alt="" />
            </div>
            <div class="mx-auto md:ml-8">
                <h1 class="font-flattery font-bold text-4xl text-white whitespace-nowrap">Candles by Victoria</h1>
            </div>
            </div>
            <div class="lg:w-2/5 mr-8 inline-flex lg:justify-end ml-5 lg:mx-auto">
                {{-- <button onclick="window.location='{{ url('/login') }}'"" class="inline-flex items-center bg-princeton-orange hover:bg-vermilion font-medium border-0 py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0 mr-7">Login
                </button>
                <button onclick="window.location='{{ url('/register') }}'"" class="inline-flex items-center bg-princeton-orange hover:bg-vermilion font-medium border-0 py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0 mr-7">Sign up
                </button> --}}
                @guest    
                    <a href="{{ url('/login') }}" class="text-princeton-orange font-bold hover:text-vermilion inline-flex items-center rounded mr-7 py-1 px-2 md:mt-0 mt-4 border-princeton-orange border hover:border-vermilion">LOGIN</a>
                    <a href="{{ url('/register') }}" class="text-princeton-orange font-bold hover:text-vermilion inline-flex items-center rounded mr-7 py-1 px-2 md:mt-0 mt-4 border-princeton-orange border hover:border-vermilion">SIGN UP</a>
                @endguest

                @auth
                    <a class="text-princeton-orange font-bold hover:text-vermilion inline-flex items-center rounded mr-7 py-1 px-2 md:mt-0 mt-4 border-princeton-orange border hover:border-vermilion" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    {{-- <a href="{{ url('/register') }}" class="text-princeton-orange font-bold hover:text-vermilion inline-flex items-center rounded mr-7 py-1 px-2 md:mt-0 mt-4 border-princeton-orange border hover:border-vermilion">SIGN UP</a> --}}
                @endauth
                <button onclick="window.location='{{ url('/cart') }}'"" class="inline-flex items-center">
                    <div class="text-3xl">
                        <i class="fa fa-shopping-cart font-medium border-0 text-princeton-orange cursor-pointer focus:outline-none hover:text-vermilion rounded mt-4 md:mt-0"></i>
                    </div>
                </button>
            </div>
        </div>
    </header>
</div>

{{-- {{ url('cart').'/'.Auth::id() }} --}}