@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md">
            <div class="bg-neutral-200 rounded-3xl p-8 shadow-lg">
                <h2 class="text-2xl mb-6">{{ __('Login') }}</h2>

                <!-- Aquí comienza el área para mostrar mensajes -->
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <!-- Aquí termina el área para mostrar mensajes -->

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <input class="mr-2 leading-tight" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="text-sm" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
