<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
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
<body class="bg-bright-yellow overflow-hidden">
    <x-header />
    <section class="container py-8 mx-auto">
        <div class="flex flex-wrap justify-center -mx-4 -mb-10 text-center font-cabin">
            @foreach ($candles as $candle)
                <div class="flex flex-col sm:flex-row sm:w-5/12 mb-10 px-7 mx-10 p-6 rounded-md bg-rosewood border-2 border-vermilion shadow-lg">
                    <div class="rounded-sm h-64 overflow-hidden m-6">
                        <img src="{{ URL('img/').'/'.$candle->img_url }}" alt="content" class="object-cover object-center h-full w-full">
                    </div>
                    <div class="mx-auto flex flex-col w-1/2 my-auto">
                        <h2 class="text-2xl font-medium text-princeton-orange mt-6 mb-3">{{ $candle->name }}</h2>
                        <span class="text-xl font-medium font-flattery text-princeton-orange mb-3">${{ $candle->price }}</span>
                        {{-- <button class="flex mx-auto mt-6 bg-princeton-orange border-0 py-2 px-5 focus:outline-none hover:bg-vermilion rounded" onclick="window.location=url('/candle/{{ $candle->id }}')">View details</button> --}}
                        <a href="candle/{{ $candle->slug }}" class="text-lg font-medium font-cabin text-princeton-orange underline hover:text-vermilion mb-3">View details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <x-footer />
</body>
</html>

{{-- src="{{ URL('img/').'/'.$candle->slug }}" --}}

{{-- <div class="flex flex-col sm:flex-row sm:w-5/12 mb-10 px-7 mx-10 p-6 rounded-md bg-rosewood border-2 border-vermilion shadow-lg">
    <div class="rounded-sm h-64 overflow-hidden m-6">
      <img src="/img/candles-blueberry-pie.png" alt="content" class="object-cover object-center h-full w-full">
    </div>
    <div class="mx-auto flex flex-col w-1/2 my-auto">
        <h2 class="text-2xl font-medium text-princeton-orange mt-6 mb-3">Blueberry Pie</h2>
        <span class="text-xl font-medium font-flattery text-princeton-orange mb-3">$18.99</span>
        <button class="flex mx-auto mt-6 bg-princeton-orange border-0 py-2 px-5 focus:outline-none hover:bg-vermilion rounded" onclick="window.location='{{ url('/candle') }}'"">View details</button>
    </div>
</div>
<div class="flex flex-col sm:flex-row sm:w-5/12 mb-10 px-7 mx-10 p-6 rounded-md border-2 bg-rosewood border-vermilion shadow-lg">
    <div class="rounded-sm h-64 overflow-hidden m-6">
      <img src="/img/candles-chocolate-sugar-cookie.png" alt="content" class="object-cover object-center h-full w-full">
    </div>
    <div class="mx-auto flex flex-col w-1/2 my-auto">
        <h2 class="text-2xl font-medium text-princeton-orange mt-6 mb-3">Chocolate Sugar Cookie</h2>
        <span class="text-xl font-medium font-flattery text-princeton-orange mb-3">$18.99</span>
        <button class="flex mx-auto mt-6 bg-princeton-orange border-0 py-2 px-5 focus:outline-none hover:bg-vermilion rounded" onclick="window.location='{{ url('/candle') }}'"">View details</button>
    </div>
</div>
<div class="flex flex-col sm:flex-row sm:w-5/12 mb-10 px-7 mx-10 p-6 rounded-md border-2 bg-rosewood border-vermilion shadow-lg">
    <div class="rounded-sm h-64 overflow-hidden m-6">
      <img src="/img/candles-gingerbread.png" alt="content" class="object-cover object-center h-full w-full">
    </div>
    <div class="mx-auto flex flex-col w-1/2 my-auto">
        <h2 class="text-2xl font-medium text-princeton-orange mt-6 mb-3">Gingerbread</h2>
        <span class="text-xl font-medium font-flattery text-princeton-orange mb-3">$18.99</span>
        <button class="flex mx-auto mt-6 bg-princeton-orange border-0 py-2 px-5 focus:outline-none hover:bg-vermilion rounded" onclick="window.location='{{ url('/candle') }}'"">View details</button>
    </div>
</div>
<div class="flex flex-col sm:flex-row sm:w-5/12 mb-10 px-7 mx-10 p-6 rounded-md border-2 bg-rosewood border-vermilion shadow-lg">
    <div class="rounded-sm h-64 overflow-hidden m-6">
      <img src="/img/candles-peanut-chocolate-cheesecake.png" alt="content" class="object-cover object-center h-full w-full">
    </div>
    <div class="mx-auto flex flex-col w-1/2 my-auto">
        <h2 class="text-2xl font-medium text-princeton-orange mt-6 mb-3">Chocolate Cheesecake</h2>
        <span class="text-xl font-medium font-flattery text-princeton-orange mb-3">$18.99</span>
        <button class="flex mx-auto mt-6 bg-princeton-orange border-0 py-2 px-5 focus:outline-none hover:bg-vermilion rounded" onclick="window.location='{{ url('/candle') }}'"">View details</button>
    </div>
</div>
<div class="flex flex-col sm:flex-row sm:w-5/12 mb-10 px-7 mx-10 p-6 rounded-md border-2 bg-rosewood border-vermilion shadow-lg">
    <div class="rounded-sm h-64 overflow-hidden m-6">
      <img src="/img/candles-smores-donut.png" alt="content" class="object-cover object-center h-full w-full">
    </div>
    <div class="mx-auto flex flex-col w-1/2 my-auto">
        <h2 class="text-2xl font-medium text-princeton-orange mt-6 mb-3">S'mores Donut</h2>
        <span class="text-xl font-medium font-flattery text-princeton-orange mb-3">$18.99</span>
        <button class="flex mx-auto mt-6 bg-princeton-orange border-0 py-2 px-5 focus:outline-none hover:bg-vermilion rounded" onclick="window.location='{{ url('/candle') }}'"">View details</button>
    </div>
</div>
<div class="flex flex-col sm:flex-row sm:w-5/12 mb-10 px-7 mx-10 p-6 rounded-md border-2 bg-rosewood border-vermilion shadow-lg">
    <div class="rounded-sm h-64 overflow-hidden m-6">
      <img src="/img/candle-placeholder.png" alt="content" class="object-cover object-center h-full w-full">
    </div>
    <div class="mx-auto flex flex-col w-1/2 my-auto">
        <h2 class="text-2xl font-medium text-princeton-orange mt-6 mb-3">The Sixth Candle</h2>
        <span class="text-xl font-medium font-flattery text-princeton-orange mb-3">$18.99</span>
        <button class="flex mx-auto mt-6 bg-princeton-orange border-0 py-2 px-5 focus:outline-none hover:bg-vermilion rounded" onclick="window.location='{{ url('/candle') }}'"">View details</button>
    </div>
</div> --}}