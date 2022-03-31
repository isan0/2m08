@extends('layouts.master')
@section('title', 'Login')
@section('content')
    <app-layout>
        <slot name="header">
            <h2 class=" text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </slot>

        <div class="p-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
    </section>
@endsection
