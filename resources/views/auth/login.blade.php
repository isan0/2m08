@extends('layouts.master')
@section('title', 'Login')
@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="col-sm-5 ">
                    <div class="row">
                        <div class="col-sm-5">
                            <h3 class="text-center heading">Login</h3>
                        </div>
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div>
                            <div class="form-floating m-2 p-1 col-sm-10">
                                <input id="email" class="block mt-1 w-full" placeholder="name@example.com" type="email"
                                    name="email" :value="old('email')" required autofocus />
         
                            </div>
                        </div>
                        <!-- Password -->
                        <div class="mt-4">
                            <div class="form-floating m-2 p-1 col-sm-10 ">
                                <input id="password" placeholder="Password" class="block mt-1 w-full" type="password"
                                    name="password" required autocomplete="current-password" />
                           </div>
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                            {{-- <button type="button" class="><i class="fa fa-lock"></i> Log in </button> --}}
                            <button class="btn btn-secondary btn-sm  waves-effect text-center ml-3">
                                {{ __('Log in') }}
                            </button>
                        </div>
                    </form>


                </div>
            </div>

        </div>

    </section>
@endsection
