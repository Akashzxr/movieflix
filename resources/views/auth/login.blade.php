 <?php /*<x-guest-layout>
     //Session Status 
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        //Email Address 
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        // Password
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        //Remember Me
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> ?php> */ ?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<title>Netflix - Watch TV Shows Online, Watch Movies Online</title>
@vite(['resources/css/login.css'])
</head>
<body>
    <header class="showcase">
        

        <div class="logo">
            <img src="images/logo.png">
        </div>

        <div class="showcase-content">
            <div class="formm">
                <form action="{{route('login')}}"  method="POST"  accept-charset="UTF-8">
                    {{ csrf_field() }}
                    <h1>Sign In</h1>
                    <div class="info">
                        <input class="email" type="email" placeholder="Email or phone number" name="email" required> <br>
                        <input class="email" type="password" placeholder="Password" name="password" required>
                        @if ($errors->has('email'))
                      <span class="error-msg">
                        {{ $errors->first('email') }}
                      </span>
                     @endif
                    </div>
                    
                    <div class="btn">
                        <button class="btn-primary" type="submit">Sign In</button>
                    </div>

                </form>

            </div>
            
            <div class="signup">
                <p>New to Movieflix ?</p>
                <a href="/register">Sign up now</a>
            </div>
        </div>

</header>
</body>
</html>


