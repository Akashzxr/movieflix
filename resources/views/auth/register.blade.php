<?php /*<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
@vite(['resources/css/signup.css'])
<title>Netflix - Watch TV Shows Online, Watch Movies Online</title>
</head>
<body>
    <header class="showcase">
        
        <div class="logo">
            <img src="/images/logo.png">
        </div>

        <div class="showcase-content">
            <div class="formm">
                <div class="container">
                    <div class="title">Registation</div>
                    <form action="{{route('register')}}"  method="POST"  accept-charset="UTF-8">
                        {{ csrf_field() }}
                        <div class="user_details">
                            <div class="input_pox">
                                <span class="datails">Full Name</span>
                                <input type="text" placeholder="enter your name" name="name" required>
                            </div>
                            <div class="input_pox">
                                <span class="datails">Username</span>
                                <input type="text" placeholder="enter your Username" name="username" required>
                            </div>
                            <div class="input_pox">
                                <span class="datails">Password</span>
                                <input type="text" placeholder="enter your Password" name="password" required>
                            </div>
                            <div class="input_pox">
                                <span class="datails">Email</span>
                                <input type="text" placeholder="enter your Email" name="email" required>
                            </div>
                            <div class="input_pox">
                                <span class="datails">Confirm Password</span>
                                <input type="text" name="password_confirmation" placeholder="Confirm your Password" >
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" value="Register">
                        </div>
                        <div class="signup">
                            <p>Already have an account?</p>
                            <a href="/login">Sign in</a>
                        </div>
                    </form>
                </div>

            </div>
        
        </div>
</header>
</body>
</html>