<x-default-layout>
    <div class="flex">
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
                <div class="py-6">
                    <livewire:show-investor-tabs />
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <div class="pt-10">
                            <div class="bg-white shadow sm:rounded-md">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="sm:flex sm:justify-between">
                                        <div class="sm:flex sm:items-center">
                                            <div class="flex-shrink-0 h-20 mr-4 self-center w-20">
                                                <img src="{{ asset('assets/images/agreement.svg') }}" class="bg-gray-100 border-2 border-gray-300 rounded-full" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:items-center">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900 font-display ">
                                                Benjamin Bit still needs to sign agreements.
                                            </h3>
                                            <div class="mt-2 max-w-xl text-xs text-gray-500">
                                                <p>
                                                    As of Today, Benjamin Bit has not completed their application 100%.
                                                    Please follow up with them to complete the remaining items.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mt-5 sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center">
                                            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                                Follow up
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-10">
                                <dl class="grid grid-cols-1 gap-5 sm:grid-cols-3">
                                    <div class="text-white overflow-hidden shadow rounded bg-gradient-to-b from-custom-gradient_blue_dark to-custom-gradient_blue_light">
                                        <div class="px-4 pt-2 sm:p-4">
                                            <dt class="text-md truncate pb-4 font-display">
                                                Investment Steps
                                            </dt>
                                            <dd class=" text-center mt-1 text-5xl pb-4">
                                                87%
                                            </dd>
                                            <dd class="flex items-baseline pt-1 pb-0.5">
                                                <div class="flex-initial text-xxs mr-0.5">Basic</div>
                                                <div class="bg-green-500 flex flex-auto h-1.5 mb-2 overflow-hidden rounded text-xs">
                                                    <div style="width:100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-100"></div>
                                                </div>
                                                <div class="flex-initial text-xxs ml-0.5">100%</div>
                                            </dd>
                                            <dd class="flex items-baseline pt-1 pb-0.5">
                                                <div class="flex-initial text-xxs mr-0.5">Invest</div>
                                                <div class="bg-green-500 flex flex-auto h-1.5 mb-2 overflow-hidden rounded text-xs">
                                                    <div style="width:100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-100"></div>
                                                </div>
                                                <div class="flex-initial text-xxs ml-0.5">100%</div>
                                            </dd>
                                            <dd class="flex items-baseline pt-1 pb-0.5">
                                                <div class="flex-initial text-xxs mr-0.5">Payment</div>
                                                <div class="bg-green-500 flex flex-auto h-1.5 mb-2 overflow-hidden rounded text-xs">
                                                    <div style="width:100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-100"></div>
                                                </div>
                                                <div class="flex-initial text-xxs ml-0.5">100%</div>
                                            </dd>
                                            <dd class="flex items-baseline pt-1 pb-0.5">
                                                <div class="flex-initial text-xxs mr-0.5">KYC/AML</div>
                                                <div class="bg-yellow-500 flex flex-auto h-1.5 mb-2 overflow-hidden rounded text-xs">
                                                    <div style="width:70%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-yellow-100"></div>
                                                </div>
                                                <div class="flex-initial text-xxs ml-0.5">70%</div>
                                            </dd>
                                            <dd class="flex items-baseline pt-1">
                                                <div class="flex-initial text-xxs mr-0.5">Documents</div>
                                                <div class="bg-red-500 flex flex-auto h-1.5 mb-2 overflow-hidden rounded text-xs">
                                                    <div style="width:0%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-100"></div>
                                                </div>
                                                <div class="flex-initial text-xxs ml-0.5">0%</div>
                                            </dd>
                                        </div>
                                    </div>
                                    <div class="text-white overflow-hidden shadow rounded bg-gradient-to-b from-custom-gradient_violet_dark via-custom-gradient_violet_medium to-custom-gradient_violet_light">
                                        <div class="flex flex-col h-full pt-2 px-4 sm:p-4">
                                            <dt class="text-md font-display truncate pb-4">
                                                Amount Invested
                                            </dt>
                                            <dd class=" text-center mt-1 text-5xl">
                                                $210.62
                                            </dd>
                                            <dd class="gap-0 grid grid-cols-2 mt-auto">
                                                <div class="text-center">
                                                    <p class="text-sm">$105.31</p>
                                                    <p class="text-xs font-display">Share Price</p>
                                                </div>
                                                <div class="text-center">
                                                    <p class="text-sm">2</p>
                                                    <p class="text-xs font-display">Share Count</p>
                                                </div>
                                            </dd>

                                        </div>
                                    </div>
                                    <div class="bg-white overflow-hidden shadow rounded text-gray-500">
                                        <div class="px-4 py-2 sm:p-4">
                                            <dt class="text-md font-display truncate">
                                                Follow Up Email Sent
                                            </dt>
                                            <dd class="text-center mt-1 text-5xl text-custom-gradient_violet_dark mb-8">
                                                130
                                            </dd>
                                            <dt class="text-md font-display truncate">
                                                Email Open Rate
                                            </dt>
                                            <dd class="text-center mt-1 text-5xl text-custom-gradient_violet_dark">
                                                83%
                                            </dd>

                                        </div>
                                    </div>
                                </dl>
                            </div>

                            <div class="pt-10">
                                <div class="bg-white overflow-hidden shadow rounded col-span-2 row-span-3">
                                    <div class=" py-5 sm:p-6">
                                        <dt class="text-md font-display text-gray-500 truncate">
                                            KYC Verification Snapshot
                                        </dt>
                                        <dd class="mt-2">
                                            <table class="divide-y divide-gray-200">
                                                <thead class="text-sm font-semilbold">
                                                    <tr>
                                                        <th scope="col" class="py-2 px-4 text-left text-gray-500 tracking-wider">
                                                            Timestamp
                                                        </th>
                                                        <th scope="col" class="py-2 px-4 text-center text-gray-500 tracking-wider">
                                                            Event
                                                        </th>
                                                        <th scope="col" class="py-2 px-4 text-center text-gray-500 tracking-wider">
                                                            Response
                                                            <i class="fas fa-question-circle"></i>
                                                        </th>
                                                        <th scope="col" class="py-2 px-4 text-center text-gray-500 tracking-wider">
                                                            Status
                                                        </th>
                                                        <th scope="col" class="py-2 px-4 text-center text-gray-500 tracking-wider">
                                                            Service 
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200 text-xs">
                                                <tr class="text-red-500">
                                                        <td class="p-3 px-4 whitespace-nowrap font-medium">
                                                            12/15/2020 @ 12:41 PM
                                                        </td>
                                                        <td class="p-3 px-4 whitespace-nowrap text-center">
                                                            Validate Address
                                                        </td>
                                                        <td class="p-3 px-4 whitespace-nowrap text-center">
                                                            No Match
                                                        </td>
                                                        <td class="p-3 px-4 whitespace-nowrap text-center">
                                                            {{-- <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-200 text-green-800">Paid</span> --}}
                                                            {{-- <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-orange-200 text-orange-800">Pending</span> --}}
                                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full font-bold bg-red-200 text-red-800">Failed</span>
                                                        </td>
                                                        <td class="p-3 px-4 whitespace-nowrap text-center">
                                                            World Watch
                                                        </td>
                                                    </tr>
                                                    @foreach([1,2,3,4] as $val)
                                                    <tr class="text-gray-500">
                                                        <td class="p-3 px-4 whitespace-nowrap font-medium">
                                                            12/15/2020 @ 12:41 PM
                                                        </td>
                                                        <td class="p-3 px-4 whitespace-nowrap text-center">
                                                            Validate Date of Birth
                                                        </td>
                                                        <td class="p-3 px-4 whitespace-nowrap text-center">
                                                            Confirmed
                                                        </td>
                                                        <td class="p-3 px-4 whitespace-nowrap text-center">
                                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-200 text-green-800">Success</span>
                                                            {{-- <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-orange-200 text-orange-800">Pending</span> --}}
                                                            {{-- <span class="inline-flex items-center px-2.5 py-0.5 rounded-full font-bold bg-red-200 text-red-800">Failed</span> --}}
                                                        </td>
                                                        <td class="p-3 px-4 whitespace-nowrap text-center">
                                                            World Watch
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </dd>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

</x-default-layout>