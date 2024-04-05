@extends('layouts.app')

@section('title', 'Cars')

@section('content')
<div class="rounded bg-white p-5 shadow md:p-8 mb-8 flex flex-col">
    <div class="flex w-full flex-col items-center md:flex-row">
        <div class="mb-4 md:mb-0 md:w-1/4">
            <h2 class="before:content-'' relative text-lg font-semibold text-heading before:absolute before:-top-0.5 before:h-8 before:rounded-tr-md before:rounded-br-md before:bg-red-600 before:-left-8 md:before:w-1">
                Cars List
            </h2>
        </div>
        <div class="flex w-full flex-col items-center ms-auto md:w-2/4">
            <form novalidate role="search" class="relative flex w-full items-center">
                <label for="search" class="absolute w-1 h-1 p-0 -m-1 overflow-hidden whitespace-nowrap border-0">
                    Search
                </label>
                <input type="text" class="ps-10 pe-4 h-12 flex items-center w-full rounded-md appearance-none transition duration-300 ease-in-out text-heading text-sm focus:outline-none focus:ring-0 border border-border-base focus:border-red-600" placeholder="Search" id="search" arial-label="Search" autocomplete="off">
            </form>
        </div>
        <button class="mt-5 flex items-center whitespace-nowrap text-base font-semibold text-red-600 md:mt-0 md:ms-5">
            Filter
        </button>
        <a href="{{ route('admin.cars.create') }}" class="inline-flex items-center justify-center flex-shrink-0 font-medium leading-none rounded-full outline-none transition duration-300 ease-in-out focus:outline-none focus:shadow text-white bg-red-600 border border-solid border-red-600 hover:bg-red-700 hover:border-hover hover:text-white hover:border-transparent px-5 py-0 h-12 text-[15px] lg:text-base h-12 w-full md:w-auto md:ms-6 h-12 w-full md:w-auto md:ms-6">
            <span class="block md:hidden xl:block">
                Add Car
            </span>
        </a>
    </div>
    <div class="flex w-full transition visible h-auto">
        <div class="mt-5 flex w-full flex-col border-t border-gray-200 pt-5 md:mt-8 md:flex-row md:items-center md:pt-8">
            <div class="flex w-full flex-col space-y-5 rtl:space-x-reverse md:flex-row md:items-end md:space-x-5 md:space-y-0 w-full">

                <div class="w-full">
                    <label class="flex text-slate-900 font-semibold text-sm leading-none mb-3">
                        Filter By Merk
                    </label>
                    <div class="flex items-center min-h-[50px] rounded-lg border border-gray-200">
                        <select class="overflow-hidden w-full py-1 px-2.5 mx-5">
                            <option selected>Filter By Merk</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>
                </div>
                <div class="w-full">
                    <label class="flex text-slate-900 font-semibold text-sm leading-none mb-3">
                        Filter By Model
                    </label>
                    <div class="flex items-center min-h-[50px] rounded-lg border border-gray-200">
                        <select class="overflow-hidden w-full py-1 px-2.5 mx-5">
                            <option selected>Filter By Model</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>
                </div>
                <div class="w-full">
                    <label class="flex text-slate-900 font-semibold text-sm leading-none mb-3">
                        Filter By Status
                    </label>
                    <div class="flex items-center min-h-[50px] rounded-lg border border-gray-200">
                        <select class="overflow-hidden w-full py-1 px-2.5 mx-5">
                            <option selected>Filter By Status</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="mb-6 overflow-hidden rounded shadow">
    <div class="relative overflow-x-auto">
        <table class="w-[1000px] bg-white min-w-full table-fixed">
            <colgroup>
                <col style="width: 130px;">
                <col style="width: 280px;">
                <col style="width: 200px;">
                <col style="width: 150px;">
                <col style="width: 200px;">
                <col style="width: 120px;">
            </colgroup>
            <thead class="border-b border-slate-200">
                <tr>
                    <th class="text-left ps-1.5 p-2 whitespace-nowrap font-semibold text-slate-900">ID</th>
                    <th class="text-left ps-1.5 p-2 whitespace-nowrap font-semibold text-slate-900">Cars List</th>
                    <th class="text-left ps-1.5 p-2 whitespace-nowrap font-semibold text-slate-900">Number Plate</th>
                    <th class="text-left ps-1.5 p-2 whitespace-nowrap font-semibold text-slate-900">Price</th>
                    <th class="text-left ps-1.5 p-2 whitespace-nowrap font-semibold text-slate-900">Status</th>
                    <th class="text-left ps-1.5 p-2 whitespace-nowrap font-semibold text-slate-900">Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection