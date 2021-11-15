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
    <section class="overflow-hidden">
        <div class="container px-5 pb-24 pt-12 mb-12 mx-auto">
          <div class="lg:w-4/5 mx-auto flex">
            <img alt="Large image of the selected candle" class="lg:w-1/2 w-full lg:h-auto h-full object-cover object-center rounded border-2 border-rufous" src="{{ URL('img/').'/'.$candle->slug }}">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
              <h1 class="text-4xl text-rufous font-cabin font-medium mb-3">{{ $candle->name }}</h1>
              <div class="flex mb-4">
                <span class="flex items-center">
                  <svg fill="#d84727" stroke="#d84727" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="#d84727" stroke="#d84727" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="#d84727" stroke="#d84727" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="#d84727" stroke="#d84727" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="#d84727" stroke="#d84727" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <span class="text-princeton-orange font-cabin ml-3 underline">12 Reviews</span>
                </span>
              </div>
              <p class="leading-relaxed text-lg text-rosewood font-flattery">
                Brand new to the CBV line up! This stunning candle comes double wicked in a beautiful ribbed style jar with lid and is available in all our wonderful fragrances including our Create A Scent (CAS) option. This candle comes in our Create A Scent (CAS) option. We give you the opportunity to create a one of a kind fragrance by mixing two of our existing fragrances and giving your new scent creation a name! If you would prefer a single scent in this candle, just choose one scent from the drop down menu and we will take of the rest.
              </p>
              <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                <div class="flex items-center">
                  <p class="mr-3 font-medium font-cabin text-2xl text-vermilion">Quantity:</p>
                  <div class="relative">
                    <input type="text" class="h-8 w-24 pr-8 pl-5 shadow-sm border-2 rounded focus:outline-none">
                  </div>
                </div>
              </div>
              <div class="flex">
                <span class="font-cabin font-medium text-2xl text-vermilion">${{ $candle->price }}</span>
                <button class="flex ml-auto border-2 border-rosewood text-rosewood font-cabin rounded-sm py-2 px-6 focus:outline-none hover:bg-vermilion hover:text-black hover:border-vermilion">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
    </section>
</body>
</html>