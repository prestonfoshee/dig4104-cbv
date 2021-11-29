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
    <div class="flex flex-col mb-72 mt-44">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center px-2">
            <div class="flex flex-col bg-rosewood px-6 py-8 rounded shadow-lg w-full border border-vermilion">
                <h1 class="mb-8 text-3xl text-center text-white font-cabin">Login</h1>
                <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-6 focus:outline-none font-cabin"
                    name="email"
                    placeholder="Email" />
                <input 
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mb-10 focus:outline-none font-cabin"
                    name="password"
                    placeholder="Password" />
                <button
                    type="submit"
                    class="flex w-full mx-auto text-center py-3 rounded bg-princeton-orange hover:bg-vermilion focus:outline-none font-cabin">
                    Login
                </button>
            </div>
            <div class="flex mt-6">
                <p class="font-cabin">Don't have an account?</p>
                <a class="text-princeton-orange hover:text-vermilion ml-2 underline" href="/register">Create one</a>.
            </div>
        </div>
    </div>
    <x-footer />
</body>
</html>