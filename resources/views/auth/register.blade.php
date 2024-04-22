@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md">
            <div class="bg-neutral-200 rounded-3xl p-8 shadow-lg">
                <h2 class="text-2xl mb-6">{{ __('Register') }}</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-input w-full @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-input w-full" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
