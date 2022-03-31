@extends('layouts.master')
@section('title', 'Register')
@section('content')
<section class="login-block">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-sm-12">
                <x-guest-layout>
                    <x-auth-card>
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="text-center heading">Register</h3>
                                        </div>
                                    </div>

                                    <!-- Name -->
                                    <div>
                                        <!-- <x-label for="name" :value="__('Name')" /> -->

                                        <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                            :value="old('name')" required placeholder="Name" />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="mt-4">


                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                            :value="old('email')" required placeholder="Email" />
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                        <!-- <x-label for="password" :value="__('Password')" /> -->

                                        <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                            placeholder="Password" required autocomplete="new-password" />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="mt-4">
                                        <!-- <x-label for="password_confirmation" :value="__('Confirm Password')" /> -->
                                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                            placeholder="password_confirmation" name="password_confirmation" required />
                                    </div>
                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                            href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                                        <div class="col-md-5 text-center">
                                            <button
                                                class="btn btn-secondary btn-md btn-block waves-effect text-center m-b-20 ml-4">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </x-auth-card>
                </x-guest-layout>

</section>
@endsection