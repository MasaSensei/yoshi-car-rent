@extends('layouts.app')

@section('content')
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h1 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Yoshi's Car Rent</h1>
        <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{route('register')}}" method="post">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">{{__('Name')}}</label>
                <div class="mt-2">
                    <input id="name" name="name" type="name" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-5">
                </div>
            </div>

            <div>
                <label for="address" class="block text-sm font-medium leading-6 text-gray-900">{{__('Address')}}</label>
                <div class="mt-2">
                    <input id="address" name="address" type="address" autocomplete="address" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-5">
                </div>
            </div>

            <div>
                <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">{{__('Phone Number')}}</label>
                <div class="mt-2">
                    <input id="phone_number" name="phone_number" type="phone_number" autocomplete="phone_number" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-5">
                </div>
            </div>

            <div>
                <label for="driver_license" class="block text-sm font-medium leading-6 text-gray-900">{{__('Driver License')}}</label>
                <div class="mt-2">
                    <input id="driver_license" name="driver_license" type="driver_license" autocomplete="driver_license" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-5">
                </div>
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{__('Register')}}</button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
            Not a member?
            <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
        </p>
    </div>
</div>
@endsection