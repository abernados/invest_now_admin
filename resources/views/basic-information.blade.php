<x-default-layout>
    <div class="max-w-6xl mx-auto">
        <h2 class="flex mx-10 mt-10 mb-5 font-display">
                <span class="text-gray-500">
                    <a href="dashboard">Dashboard</a>
                </span>
                <span>
                    <svg class="h-4 mt-1 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                      </svg>
                </span>
                <span class="text-primary"> Basic Information</span>
            </h2>
        <dl class="mx-10 grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-4">
            <div class="text-white overflow-hidden overflow-x-auto shadow rounded bg-gradient-to-b from-custom-gradient_violet_dark via-custom-gradient_violet_medium to-custom-gradient_violet_light">
                <div class="px-4 pt-2 sm:p-4">
                    <dt class="text-md font-display truncate pb-4">
                        New Applications
                    </dt>
                    <dd class="text-center mt-1 text-5xl">
                        1,437
                    </dd>
                    <dd class="text-right mt-8 text-xs">
                        <a href="#">Review Records ></a>
                    </dd>
                </div>
            </div>
            <div class="text-white overflow-gihidden overflow-x-auto shadow rounded bg-gradient-to-b from-custom-gradient_blue_dark to-custom-gradient_blue_light">
                <div class="px-4 pt-2 sm:p-4">
                    <dt class="text-md font-display truncate pb-4">
                        Amount Invested
                    </dt>
                    <dd class=" text-center mt-1 text-5xl">
                        $239,391
                    </dd>
                    <dd class="text-green-500 justify-center  mt-6 text-md flex">
                        <svg class="self-center h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>32%</span>
                    </dd>
                </div>
            </div>
            <div class="overflow-hidden overflow-x-auto shadow rounded bg-white text-gray-500">
                <div class="px-4 pt-2 sm:p-4">
                    <dt class="text-md font-display truncate pb-4">
                        Emails Sent
                    </dt>
                    <dd class=" text-center mt-1 text-5xl">
                        234
                    </dd>
                </div>
            </div>
            <div class="overflow-hidden overflow-x-auto shadow rounded bg-white text-gray-500">
                <div class="px-4 pt-2 sm:p-4">
                    <dt class="text-md font-display truncate pb-4">
                        Email Open Rate
                    </dt>
                    <dd class=" text-center mt-1 text-5xl">
                        86%
                    </dd>
                    <dd class="text-green-500 justify-center  mt-6 text-md flex">
                        <svg class="self-center h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>12%</span>
                    </dd>
                </div>
            </div>
            <div class="bg-white overflow-hidden overflow-x-auto shadow rounded col-span-4">
                <div class="py-5 sm:p-6">
                    <dt class="text-md font-display text-gray-500 truncate">
                        New Investors
                    </dt>
                    <dd class="mt-2">
                        <table class="divide-y divide-gray-200 w-full">
                            <thead class="font-bold text-lg">
                                <tr>
                                    <th scope="col" class="py-2 px-4 text-left text-xs font-semibold text-gray-500 tracking-wider">
                                        Date/Time
                                    </th>
                                    <th scope="col" class="py-2 px-4 text-left text-xs font-semibold text-gray-500 tracking-wider">
                                        Investor
                                    </th>
                                    <th scope="col" class="py-2 px-4 text-left text-xs font-semibold text-gray-500 tracking-wider">
                                        Last Step Completed
                                    </th>
                                    <th scope="col" class="py-2 px-4 text-left text-xs font-semibold text-gray-500 tracking-wider">
                                        <div class="flex">
                                            <span>Follow Up Campaign</span>
                                            <svg class="h-3 mt-1 pl-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </th>
                                    <th scope="col" class="py-2 px-4 text-left text-xs font-semibold text-gray-500 tracking-wider">
                                        <div class="flex">
                                            <span>Last Activity Date</span>
                                            <svg class="h-3 mt-1 pl-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </th>
                                    <th scope="col" class="py-2 px-4 text-left text-xs font-semibold text-gray-500 tracking-wider">
                                        Last Activity Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach([1,2,3,4,5,3,1] as $val)
                                <tr>
                                    <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ now()->format('m/d/Y @ H:m A') }}
                                    </td>
                                    <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                                        <a href="/investor/1">Benjamin Bit</a>
                                    </td>
                                    <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                                        '{{ Arr::random(['Investing As...', 'Investor Address', 'Lead Form']) }}'
                                    </td>
                                    <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="flex items-baseline pb-0.5">
                                            <div class="bg-gray-200 flex flex-auto h-1.5 mb-2 overflow-hidden rounded text-xs">
                                                <div style="width:80%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-200 border-green-500 border-solid border rounded"></div> <!-- Email -->
                                                {{-- <div style="width:80%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-yellow-200 border-yellow-500 border-solid border rounded"></div> <!-- Missing Info -->
                                                <div style="width:80%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-200 border-red-500 border-solid border rounded"></div> --}} <!-- Call -->
                                            </div>
                                            <div class="flex-initial text-xxs ml-0.5">42</div>
                                        </div>
                                    </td>
                                    <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ now()->format('m/d/Y @ H:m A') }}
                                    </td>
                                    <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ Arr::random(['Opened Email', 'Updated Application', 'Clicked Link in Email']) }}
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </dd>
                </div>
            </div>
        </dl>
    </div>

</x-default-layout>
