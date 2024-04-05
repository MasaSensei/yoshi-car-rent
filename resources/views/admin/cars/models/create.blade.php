@extends('layouts.app')

@section('title', 'Create Car Model')

@section('content')
<div class="flex border-b border-dashed border-border-base pb-5 md:pb-7">
    <h1 class="text-lg font-semibold text-heading">
        Create Car Model
    </h1>
</div>
<form>
    <div class="flex flex-wrap pb-8 my-5 border-b border-dashed border-border-base sm:my-8">
        <div class="w-full px-0 pb-5 sm:w-4/12 sm:py-8 sm:pe-4 md:w-1/3 md:pe-5">
            <h4 class="text-base font-semibold text-body-dark mb-2">Description</h4>
            <p class="text-sm text-body">
                Add a description of the car model
            </p>
        </div>
        <div class="rounded bg-white p-5 shadow md:p-8 w-full sm:w-8/12 md:w-2/3">
            @foreach($create_row_values as $create_row_value)
            <div class="mb-5">
                <label class="flex capitalize text-body-dark font-semibold text-sm leading-none mb-3" for="{{ $create_row_value->name }}">
                    {{ $create_row_value->name }}
                </label>
                <input type="{{$create_row_value->type}}" class="px-4 h-12 flex items-center w-full rounded appearance-none transition duration-300 ease-in-out text-heading text-sm focus:outline-none focus:ring-0 border border-border-base focus:border-accent h-12" autocapitalize="off" autocomplete="off">
            </div>
            @endforeach
        </div>
        <div class="sticky w-full bottom-0 -mx-5 py-3 px-5 backdrop-blur text-end md:py-5 lg:-mx-8 lg:px-8 z-0">
            <div class="text-end">
                <button data-variant="normal" class="inline-flex items-center justify-center text-white flex-shrink-0 font-semibold rounded outline-none transition duration-300 ease-in-out focus:outline-none focus:shadow focus:ring-1 focus:ring-red-700 bg-red-500 text-light border border-transparent hover:bg-red-600 px-5 py-0 h-12 text-sm md:text-base">
                    Add Models
                </button>
            </div>
        </div>
    </div>
</form>
@endsection