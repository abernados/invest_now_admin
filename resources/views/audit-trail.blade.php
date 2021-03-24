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
                <span class="text-primary"> Audit Trail</span>
            </h2>
        <dl class="mx-10 grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-4">
            <div class="text-white overflow-hidden overflow-x-auto shadow rounded bg-gradient-to-b from-custom-gradient_violet_dark via-custom-gradient_violet_medium to-custom-gradient_violet_light">
                <div class="px-4 pt-2 sm:p-4">
                    <dt class="text-md font-display truncate pb-4">
                        Audits Completed
                    </dt>
                    <dd class="text-center mt-1 text-5xl">
                        1,302
                    </dd>
                </div>
            </div>
            <div class="text-white overflow-gihidden overflow-x-auto shadow rounded bg-gradient-to-b from-custom-gradient_blue_dark to-custom-gradient_blue_light">
                <div class="px-4 pt-2 sm:p-4">
                    <dt class="text-md font-display truncate pb-4">
                        Last Audit Update
                    </dt>
                    <dd class="text-center mt-1 text-5xl">
                        1:33pm
                    </dd>
                    <dd class="text-center mt-1 text-xl">
                       Today
                    </dd>
                </div>
            </div>
            <div class="overflow-hidden overflow-x-auto shadow rounded bg-white text-gray-500 border-2 border-solid border-custom-gradient_violet_dark">
                <div class="px-4 pt-2 sm:p-4">
                    <dt class="text-md font-display truncate pb-2">
                        Export Now
                    </dt>
                    <dd>
                        <img class="h-24 mx-auto" src="/images/export-now.svg" alt="Export Now">
                    </dd>
                </div>
            </div>
            <div class="overflow-hidden overflow-x-auto shadow rounded bg-white text-gray-500 border-2 border-solid border-custom-gradient_violet_dark">
                <div class="px-4 pt-2 sm:p-4">
                    <dt class="text-md font-display truncate pb-2">
                        Create Custom Report
                    </dt>
                    <dd>
                        <img class="h-24 mx-auto" src="/images/custom-report.svg" alt="Create Custom Report">
                    </dd>
                </div>
            </div>
            <div class="bg-white overflow-hidden overflow-x-auto shadow rounded col-span-4">
                <div class="py-5 sm:p-6">
                    <dt class="text-md font-display text-gray-500 truncate">
                        Recent Investors
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
                                        Audit Trail Data
                                    </th>
                                    <th scope="col" class="py-2 px-4 text-left text-xs font-semibold text-gray-500 tracking-wider">
                                        Investment Audit
                                    </th>
                                    <th scope="col" class="py-2 px-4 text-left text-xs font-semibold text-gray-500 tracking-wider">
                                        Website Activity Audit
                                    </th>
                                    <th scope="col" class="py-2 px-4 text-left text-xs font-semibold text-gray-500 tracking-wider">
                                        KYC/AML Audit
                                    </th>
                                    <th scope="col" class="py-2 px-4 text-left text-xs font-semibold text-gray-500 tracking-wider">
                                        Actions
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
                                        <div class="flex items-baseline pb-0.5">
                                            <div class="bg-gray-200 flex flex-auto h-1.5 mb-2 overflow-hidden rounded text-xs">
                                                <div style="width:100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-200 border-green-500 border-solid border rounded"></div> <!-- Email -->
                                                {{-- <div style="width:80%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-yellow-200 border-yellow-500 border-solid border rounded"></div> <!-- Missing Info -->
                                                <div style="width:80%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-200 border-red-500 border-solid border rounded"></div> --}} <!-- Call -->
                                            </div>
                                            <div class="flex-initial text-xxs ml-0.5">100%</div>
                                        </div>
                                    </td>
                                    <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                        <input type="checkbox" name="audit">
                                    </td>
                                    <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                        <input type="checkbox" name="audit">
                                    </td>
                                    <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                        <input type="checkbox" name="audit">
                                    </td>
                                    <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500 flex">
                                        <a href="#">
                                            <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd" />
                                                <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                                              </svg>
                                        </a>
                                        <a href="#">
                                            <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                              </svg>
                                        </a>
                                        <a href="#">
                                            <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
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
