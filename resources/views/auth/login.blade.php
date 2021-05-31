@extends('layouts.app')

@section('content')

<div class="sm:px-4 flex flex-wrap h-screen justify-center bg-gradient">

        <div class="md:w-1/4 m-auto">
            <div class="flex flex-wrap justify-center flex-col bg-persian-green-600 border-gray-200">
                <div class="pb-5 mb-0  m-auto font-serif text-white text-5xl capitalize">Hellow</div>
            </div>
            <div class="relative min-w-0 break-words  bg-white   border p-10 pb-8">

                <div class="border-b flex flex-wrap justify-center flex-col border-gray-200">
                    <div class="pb-5 mb-0  m-auto font-bold text-gray-900 text-2xl uppercase"> <i class="fa fa-user" aria-hidden="true"></i> sign in</div>
                </div>
                <div class="flex-auto pt-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2 capitalize" for="username">
                              EMAIL
                            </label>
                            <div class="">
                                <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') bg-red-700 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="hidden mt-1 text-sm text-red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2 capitalize" for="email">
                              PASSWORD
                            </label>
                            <div class="">
                                <input id="password" type="password"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') bg-red-700 @enderror" id="email" type="email" name="email" value="{{ old('email') }}" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="hidden mt-1 text-sm text-red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        </div>

                        <div class="mb-4 capitalize font-bold text-sm ">
                            <div class="flex items-center justify-between">
                                <div class="relative block">
                                    <input class="bg-green-600 text-green-600" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="ml-1 text-gray-700 capitalize" for="remember">
                                        {{ __('stay signed in') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="inline-block align-baseline text-green-600 hover:text-green-800" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                                @endif

                          </div>
                        </div>

                        <div class="mt-5">
                            <button class="bg-green-600 w-full text-white active:bg-green-800 hover:bg-green-800 font-bold uppercase text-sm py-2 px-4 rounded shadow-md hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150" type="button">
                            <i class="fa fa-sign-in mr-1" aria-hidden="true"></i>
                            sign in
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
