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
    <section class="container px-5 py-8 mx-auto mb-40 font-cabin">
        <div class="flex flex-wrap justify-center -mx-4 -mb-10 text-center">
            <div class="flex flex-col md:flex-row mb-20 mx-10 px-8 py-6 bg-dark-yellow shadow-lg rounded-lg">
                <div class="flex flex-col mr-12">

                    <div class="flex border-b-2 border-princeton-orange py-6">
                        <div class="rounded-lg h-20 w-20 overflow-hidden my-auto">
                            <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/420x260">
                        </div>
                        <div class="flex flex-col md:flex-row ml-auto">
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-medium">Candle #1</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-medium">Quantity: 1</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-bold">$24.00</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <i class="fa fa-trash text-xl cursor-pointer"></i>
                            </div>
                        </div>
                    </div>

                    <div class="flex border-b-2 border-princeton-orange py-6">
                        <div class="rounded-lg h-20 w-20 overflow-hidden my-auto">
                            <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/420x260">
                        </div>
                        <div class="flex flex-col md:flex-row ml-auto">
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-medium">Candle #1</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-medium">Quantity: 1</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-bold">$24.00</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <i class="fa fa-trash text-xl cursor-pointer"></i>
                            </div>
                        </div>
                    </div>

                    <div class="flex border-b-2 border-princeton-orange py-6">
                        <div class="rounded-lg h-20 w-20 overflow-hidden my-auto">
                            <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/420x260">
                        </div>
                        <div class="flex flex-col md:flex-row ml-auto">
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-medium">Candle #1</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-medium">Quantity: 1</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-bold">$24.00</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <i class="fa fa-trash text-xl cursor-pointer"></i>
                            </div>
                        </div>
                    </div>

                    <div class="flex py-6">
                        <div class="rounded-lg h-20 w-20 overflow-hidden my-auto">
                            <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/420x260">
                        </div>
                        <div class="flex flex-col md:flex-row ml-auto">
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-medium">Candle #1</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-medium">Quantity: 1</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-bold">$24.00</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <i class="fa fa-trash text-xl cursor-pointer"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col bg-dark-yellow border-l-2 border-princeton-orange mx-auto md:ml-auto rounded-r-lg px-8">
                    <div class="my-auto mx-auto">
                        <div class="pb-4">
                            <h2 class="text-3xl font-bold text-gray-900 mt-6">Order details</h2>
                        </div>
                        <div class="py-4">
                            <p class="text-xl font-medium text-gray-800">Subtotal</p>
                            <p class="text-xl font-bold text-gray-800">$250.00</p>
                        </div>
                        <div class="py-4 mb-4 border-b-2 border-princeton-orange">
                            <p class="text-xl font-medium text-gray-800">Shipping</p>
                            <p class="text-xl font-bold text-gray-800">$12.00</p>
                        </div>
                        <div class="py-4">
                            <p class="text-xl font-medium text-gray-800">Total cost</p>
                            <p class="text-xl font-bold text-gray-800">$262.00</p>
                        </div>
                        <button class="flex mx-auto mt-6 text-white bg-black border-0 py-2 px-5 focus:outline-none hover:bg-gray-600 rounded" onclick="window.location.href='/candleInfo.html';">
                        Place order
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

{{-- <div class="flex border-b-2 border-princeton-orange py-6">
    <div class="rounded-lg h-20 w-20 overflow-hidden">
        <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/420x260">
    </div>
    <div class="flex flex-col md:flex-row ml-auto">
        <div class="my-auto px-4 md:px-12 mb-3 md:mb-0">
            <h2 class="font-bold text-xl">Candle #1</h2>
        </div>
        <div class="my-auto px-4 md:px-12 mb-3 md:mb-0">
            <h2 class="font-bold">Quantity: 1</h2>
        </div>
        <div class="my-auto px-4 md:px-12 mb-3 md:mb-0">
            <h2 class="font-medium">$24.00</h2>
        </div>
        <div class="my-auto px-4 md:px-12">
            <i class="fa fa-trash text-xl cursor-pointer"></i>
        </div>
    </div>
</div> --}}