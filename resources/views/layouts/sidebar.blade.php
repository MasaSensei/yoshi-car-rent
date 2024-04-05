<div class="h-full w-full overflow-x-hidden">
    <div class="relative overflow-hidden fles items-stretch flex-row flex-nowrap">
        <div className="relative flex mx-0 mb-0 top-0 right-auto left-0 w-full p-0 overflow-y-scroll overflow-hidden">
            <div class="flex flex-col w-full px-5 pt-6 pb-3">
                <div class="px-3 pb-5 text-xs font-semibold uppercase tracking-[0.05em] text-white">
                    Main
                </div>
                <div class="space-y-2">
                    <a title="Dashboard" class="group flex w-full items-center gap-2.5 rounded-md px-3 py-2.5 text-sm text-gray-700 text-start focus:text-lime-500 hover:bg-red-600 {{request()->is('admin') ? 'text-lime-500 bg-red-600' : 'text-white'}} transition duration-200 ease-in" href="/admin">
                        <span class="transition text-white group-focus:text-red-600">
                            Dasboard
                        </span>
                    </a>
                </div>
            </div>
            <div class="flex flex-col w-full px-5 pt-6 pb-3">
                <div class="px-3 pb-5 text-xs font-semibold uppercase tracking-[0.05em] text-white">
                    Car Management
                </div>
                <div class="space-y-2">
                    <a title="Dashboard" class="group flex w-full items-center gap-2.5 rounded-md px-3 py-2.5 text-sm text-gray-700 text-start focus:text-accent hover:bg-red-600 {{request()->is('admin/cars') ? 'text-lime-500 bg-red-600' : 'text-white'}} transition duration-200 ease-in" href="/admin/cars">
                        <span class="transition text-white group-focus:text-red-600">
                            Cars
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>