<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candles By Victoria</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="http://fonts.cdnfonts.com/css/fresh-roomettes-personal-use" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/d80f87dcf4.js"></script>
</head>
<body class="bg-bright-yellow">
    <x-header />
    <div class="hidden lg:block relative bg-home-cover bg-no-repeat bg-cover p-72 bg-center h-full -mt-10 mb-12">
      <div class="">
        <h1 class="absolute top-12 left-0 right-0 font-roomettes text-5xl text-center text-white whitespace-nowrap">Welcome Our New Addition to the Victoria November Family</h1>
      </div>
    </div>
    <section class="py-12">
      <div class="container mx-auto px-5 mb-8 border-b-2 border-vermilion">
        <h1 class="font-roomettes text-center text-5xl text-vermilion mb-10">This Month's Cycle</h1>
      </div>
        {{-- <div class="py-6">
            <h1 class="text-center text-7xl text-vermilion font-roomettes italic">Welcome to Candles By Victoria</h1>
        </div> --}}
        <section>
            <div class="container px-5 py-8 mx-auto border-b-2 border-vermilion">
                <div class="flex flex-wrap justify-center -mx-4 -mb-10 text-center">
                  <div class="sm:w-5/12 mb-10 px-7 mx-10 bg-rosewood shadow-lg p-6 rounded-md">
                    <div class="h-72 overflow-hidden">
                      <img alt="content" class="object-cover object-center h-full mx-auto rounded-sm" src="/img/candles-blueberry-pie.png">
                    </div>
                    <h2 class="text-2xl font-bold font-flattery text-princeton-orange mt-6 mb-3">Blueberry Pie</h2>
                    <button class="flex mx-auto mt-6 font-cabin bg-princeton-orange hover:bg-vermilion border-0 py-2 px-5 focus:outline-none rounded" onclick="window.location.href='./candleInfo.html';">View details</button>
                  </div>
                  <div class="sm:w-5/12 mb-10 px-7 mx-10 bg-rosewood shadow-lg p-6 rounded-md">
                    <div class="h-72 overflow-hidden">
                      <img alt="content" class="object-cover object-center h-full mx-auto rounded-sm" src="/img/candles-chocolate-sugar-cookie.png">
                    </div>
                    <h2 class="text-2xl font-bold font-flattery text-princeton-orange mt-6 mb-3">Chocolate Sugar Cookie</h2>
                    <button class="flex mx-auto mt-6 font-cabin bg-princeton-orange hover:bg-vermilion border-0 py-2 px-5 focus:outline-none rounded" onclick="window.location.href='./candleInfo.html';">View details</button>
                  </div>
                </div>
              </div>
        </section>

        {{-- <div class="flex flex-wrap max-w-5xl mx-auto tex p-8 my-8 rounded-2xl">
            <div class="mx-auto">
                <h3 class="text-5xl font-bold font-flattery mb-8 text-center text-rufous">A few sentences about the company...</h3>
            </div>
            <div class="mx-auto">
                <p class="mx-auto font-cabin text-xl text-center text-rufous">We understand that shopping for scented candles and wax melts online can be difficult, Candles By Victoria is devoted to art of candle making and to your online shopping experience. Our number one goal is that you receive outstanding customer service combined with amazing, well made, highly scented candles and wax melts! Here at Candles By Victoria we have spent many long hours of testing until we came up with what we believe, and our customers tell us, is the perfect clean burning wax formulation that give our strong scented candles a complete burn and an amazing scent throw, from the first time you light one of our candles to the very last drop, one small candle will scent an entire room, we guarantee it!
            </div>
            </p>
        </div> --}}
        <section class="container px-24 py-8 mx-auto">
          <div class="flex flex-col md:flex-row">
            {{-- left section --}}
            <div class="flex flex-col md:w-1/2 py-8 mx-4">
              <div class="mx-auto md:w-1/3 mb-6">
                <img src="/img/scorpio-icon.png" alt="Scorpio collection logo" class="">
              </div>
              <div>
                <h1 class="font-flattery text-princeton-orange text-4xl text-center mb-6">The Zodiac Collection</h1>
                <h3 class=" font-roomettes text-4xl text-center text-rosewood mb-4">Scorpio</h3>
                <div class="flex mx-auto">
                  <span class="font-cabin text-white text-xl text-center">Celebrate your favorite Scorpio with this scoop-able, delectable candle that they can burn all month long.</span>
                </div>
              </div>
            </div>
            {{-- right section --}}
            <div class="flex md:w-1/2 py-8 mx-auto md:mx-4">
              <img src="/img/candles-smores-donut.png" alt="Photo of Smores Donut candle" class="border-2 border-rufous rounded">
            </div>
          </div>
        </section>
    </section>
    <x-footer />
</body>
</html>