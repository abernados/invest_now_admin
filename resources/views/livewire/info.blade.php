<div>
    <div class="bg-blue-100 max-h-screen w-1/3">
        <div class="py-14 space-y-2 w-full px-10">
            <div class="flex justify-center">
                <img class="h-28 rounded-full w-28" src="{{ asset('assets/images/avatar.svg') }}" alt="">
            </div>
            <div class="text-center text-gray-500">
                <p class="font-display text-2xl">Benjamin Bit</p>
                <p class="text-sm">#7592</p>
            </div>
            <div class="flex justify-evenly">
                <button type="button" class="bg-gray-500 h-10 rounded-full text-white w-10">
                    <i class="fas fa-phone"></i>
                </button>
                <button type="button" class="bg-gray-500 h-10 rounded-full text-white w-10">
                    <i class="fas fa-envelope"></i>
                </button>
                <button type="button" class="bg-gray-500 h-10 rounded-full text-white w-10">
                    <i class="fas fa-comments"></i>
                </button>
            </div>
        </div>

        <div class="py-4 px-10 w-full">
            <div class="text-right text-gray-500">
                <p class="font-display text-xl">80%</p>
            </div>
            <div class="relative pt-1">
                <div class="overflow-hidden h-2 mb-2 text-xs flex rounded bg-blue-300">
                    <div style="width:80%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600"></div>
                </div>
            </div>
            <div class="text-right text-blue-700">
                <p class="font-semibold text-xs">Follow Up</p>
            </div>
        </div>

        <div class="pb-12 px-10 w-full">
            <div class="text-gray-500 pb-1">
                <p class="font-display text-xl">Recent Activity</p>
            </div>
            <div class="pb-1">
                <div class="bg-gradient-to-b border border-gray-300 flex focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 from-indigo-500 hover:border-gray-400 items-center px-6 py-5 relative shadow-sm space-x-3 to-indigo-400">
                    <div class="flex-shrink-0">
                        <img class="h-12 w-12" src="{{ asset('assets/images/upload.svg') }}" alt="">
                    </div>
                    <div class="flex-1 min-w-0">
                        <a href="#" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm text-white pb-2">
                                Uploaded Document
                            </p>
                            <p class="text-xs text-white">
                                Today at 12:43pm
                            </p>
                        </a>
                    </div>
                    <div class="flex-1 text-white text-right">
                    <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="pb-2">
                <div class="bg-gradient-to-b border border-gray-300 flex focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 from-indigo-500 hover:border-gray-400 items-center px-6 py-5 relative shadow-sm space-x-3 to-indigo-400">
                    <div class="flex-shrink-0">
                        <img class="h-12 w-12" src="{{ asset('assets/images/open-email.svg') }}" alt="">
                    </div>
                    <div class="flex-1 min-w-0">
                        <a href="#" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm text-white pb-2">
                                Opened Email
                            </p>
                            <p class="text-xs text-white">
                                Today at 12:43pm
                            </p>
                        </a>
                    </div>
                    <div class="flex-1 text-white text-right">
                    <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <a href="#" class="text-xs text-blue-700 font-semibold">See All Activity</a>
            </div>
        </div>

        <div class="pb-10 px-10 w-full">
        <div>
                <div class="bg-blue-900 border border-gray-300 flex focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400 items-center px-6 py-5 relative shadow-sm space-x-3">
                    <div class="flex-shrink-0">
                        <img class="h-12 w-12" src="{{ asset('assets/images/calendar.svg') }}" alt="">
                    </div>
                    <div class="flex min-w-0">
                        <a href="#" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm text-white pb-2">
                                Next Follow Up
                            </p>
                            <p class="text-xs text-white">
                                Friday at 12:43pm via Email
                            </p>
                        </a>
                    </div>
                    <div class="flex-1 text-white text-right">
                    <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>