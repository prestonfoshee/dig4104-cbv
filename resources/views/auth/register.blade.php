@extends('layouts.app')

@section('content')
<div class="flex flex-col mb-72 mt-24">
    <div class="container max-w-md mx-auto flex-1 flex flex-col items-center px-2">
        <div class="flex flex-col bg-rosewood px-6 py-8 rounded shadow-lg w-full border border-vermilion">
            <h1 class="mb-8 text-3xl text-center text-white font-cabin">Sign up</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                    <input class="block border border-grey-light w-full p-3 rounded mb-6 focus:outline-none font-cabin" id="name" placeholder="Name" type="text" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input class="block border border-grey-light w-full p-3 rounded mb-6 focus:outline-none font-cabin" id="email" placeholder="Email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input class="block border border-grey-light w-full p-3 rounded mb-6 focus:outline-none font-cabin" id="password" placeholder="Password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input class="block border border-grey-light w-full p-3 rounded mb-6 focus:outline-none font-cabin" id="password-confirm" placeholder="Confirm password" type="password" name="password_confirmation" required autocomplete="new-password">
                    <button type="submit" class="w-full text-center py-3 rounded bg-princeton-orange hover:bg-vermilion focus:outline-none font-cabin transition duration-200">
                        {{ __('Register') }}
                    </button>
            </form>
        </div>
    </div>
</div>
@endsection
