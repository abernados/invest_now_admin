<x-default-layout>
    <div class="max-w-6xl mx-auto">
        <dl class="m-10 grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-4">
            <div
                class="text-white overflow-hidden shadow rounded bg-gradient-to-b from-custom-gradient_violet_dark via-custom-gradient_violet_medium to-custom-gradient_violet_light">
                <div class="px-4 pt-2 sm:p-4">
                    <dt class="text-md font-bold truncate pb-4">
                        Follow up Tasks
                    </dt>
                    <dd class=" text-center mt-2 text-5xl">
                        0
                    </dd>
                    <dd class="flex items-baseline pt-10 pb-0.5">
                        <div class="flex-initial text-xxs mr-0.5">Email</div>
                        <div class="bg-purple-500 flex flex-auto h-1.5 mb-2 overflow-hidden rounded text-xs">
                            <div style="width:100%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-200 border-white border-solid border rounded">
                            </div>
                        </div>
                        <div class="flex-initial text-xxs ml-0.5">42</div>
                    </dd>
                    <dd class="flex items-baseline pt-2 pb-0.5">
                        <div class="flex-initial text-xxs mr-0.5">Call</div>
                        <div class="bg-purple-500 flex flex-auto h-1.5 mb-2 overflow-hidden rounded text-xs">
                            <div style="width:100%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-200 border-white border-solid border rounded">
                            </div>
                        </div>
                        <div class="flex-initial text-xxs ml-0.5">13</div>
                    </dd>
                    <dd class="flex items-baseline pt-2 pb-0.5">
                        <div class="flex-initial text-xxs mr-0.5">Re-enroll</div>
                        <div class="bg-purple-500 flex flex-auto h-1.5 mb-2 overflow-hidden rounded text-xs">
                            <div style="width:100%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-200 border-white border-solid border rounded">
                            </div>
                        </div>
                        <div class="flex-initial text-xxs ml-0.5">81</div>
                    </dd>
                    <dd class="flex items-baseline pt-2 pb-0.5">
                        <div class="flex-initial text-xxs mr-0.5">Missing Info</div>
                        <div class="bg-yellow-500 flex flex-auto h-1.5 mb-2 overflow-hidden rounded text-xs">
                            <div style="width:100%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-200 border-white border-solid border rounded">
                            </div>
                        </div>
                        <div class="flex-initial text-xxs ml-0.5">11</div>
                    </dd>
                </div>
            </div>
            <div
                class="text-white overflow-hidden shadow rounded bg-gradient-to-b from-custom-gradient_blue_dark to-custom-gradient_blue_light">
                <div class="px-4 pt-2 sm:p-4">
                    <dt class="text-md font-bold truncate pb-4">
                        Success rate
                    </dt>
                    <dd class=" text-center mt-1 text-5xl">
                        87%
                    </dd>
                    <dd class="text-green-500 justify-center  mt-6 text-md flex">
                        <svg class="self-center h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>32%</span>
                    </dd>
                    <dd class="flex flex-auto mt-20 h-1.5">
                        <div style="width:100%"
                            class="c-progress-bar v--rainbow shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
                        </div>
                    </dd>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow rounded text-center text-gray-500">
                <div class="px-4 py-2 sm:p-4">
                    <div class="divide-y divide-gray-200">
                        <dt class="text-md font-bold truncate">
                            Follow Up Queue
                            <p class="my-4 text-5xl font-semibold ">
                                0
                            </p>
                        </dt>
                        <dt class="text-md font-bold truncate pt-4">
                            <p class="my-4 text-5xl font-extralight text-gray-300">
                                142/142
                            </p>
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gradient-to-b from-custom-gradient_violet_dark via-custom-gradient_violet_medium to-custom-gradient_violet_light hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-400">
                                Start Queue
                            </button>
                        </dt>

                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded row-span-2">
                <div class="px-4 py-2 sm:p-4">
                    <dt class="text-md font-bold text-gray-500 truncate">
                        Follow Up Queue
                    </dt>
                    <dd class="mt-1 text-gray-900">
                        {{-- <table class="min-w-full divide-y divide-gray-200 text-3xl font-semibold">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ([1, 2] as $test)
                                <tr class="activity-item hover:bg-gray-100">
                                    <td class="py-4 whitespace-nowrap ">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10" src="/images/document.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    KYC Not Complete
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    Benjamin Taos | 4 mins ago
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="activity-item hover:bg-gray-100">
                                    <td class="py-4 whitespace-nowrap ">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10" src="/images/email.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Missing Signature
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    Benjamin Taos | 4 mins ago
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                <tr class="activity-item">
                                    <td class="text-center">
                                        <a href="#" class="text-xs text-purple-600">Load More Tasks</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table> --}}
                        {{-- if wala pa --}}
                        <div class="text-purple-700 my-48">
                            <img src="images/no-queue.svg" class="h-52 mx-auto">
                            <p class="text-center p-4">No Records on Queue.</p>
                        </div>
                    </dd>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded col-span-3">
                <div class=" py-5 sm:p-6">
                    <dt class="text-md font-bold text-gray-500 truncate">
                        Follow Up Tasks
                    </dt>
                    <dd class="my-10">
                        {{-- if may data --}}
                        <livewire:get-investors-todos />

                        {{-- if wala pa --}}
                        {{-- <div class="text-purple-700">
                            <img src="images/no-tasks.svg" class="h-52 mx-auto">
                            <p class="text-center p-4">You're all caught up!'</p>
                        </div> --}}
                    </dd>
                </div>
            </div>
        </dl>
    </div>

</x-default-layout>
