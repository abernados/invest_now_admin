<x-default-layout>
    <div class="max-w-6xl mx-auto">
        <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-4">
            <div class="text-white overflow-hidden shadow rounded bg-gradient-to-b from-custom-gradient_violet_dark via-custom-gradient_violet_medium to-custom-gradient_violet_light">
                <div class="px-4 pt-2 sm:p-4">
                    <dt class="text-md font-bold truncate pb-4">
                        New Investors
                    </dt>
                    <dd class=" text-center mt-1 text-5xl">
                        11,302
                    </dd>
                </div>
            </div>
            <div class="text-white overflow-hidden shadow rounded bg-gradient-to-b from-custom-gradient_blue_dark to-custom-gradient_blue_light">
                <div class="px-4 pt-2 sm:p-4">
                    <dt class="text-md font-bold truncate pb-4">
                        Amount Invested
                    </dt>
                    <dd class=" text-center mt-1 text-5xl">
                        $239,391
                    </dd>
                    <dd class="text-green-500 text-center my-6 text-md">
                        32%
                    </dd>
                    <dd class="grid grid-cols-2 mt-1 text-sm text-center">
                        <div>
                            <p class="text-lg">$550.62</p>
                            <p>Average</p>
                        </div>
                        <div>
                            <p class="text-lg">$550.62</p>
                            <p>Medium</p>
                        </div>

                    </dd>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow rounded text-center text-gray-5 00">
                <div class="px-4 py-2 sm:p-4">
                    <div class="divide-y divide-gray-200">
                        <dt class="text-md font-bold truncate">
                            Completed Investments
                            <p class="my-4 text-5xl font-semibold ">
                                504
                            </p>
                        </dt>
                        <dt class="text-md font-bold truncate pt-4">
                            Pending Investments
                            <p class="my-4 text-5xl font-semibold ">
                                32
                            </p>
                        </dt>

                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded row-span-4">
                <div class="px-4 py-2 sm:p-4">
                    <dt class="text-md font-bold text-gray-500 truncate">
                        Recent Activity
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach([1,2] as $test)
                                <tr class="activity-item hover:bg-gray-100">
                                    <td class="py-4 whitespace-nowrap ">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10" src="/images/document.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Uploaded Document
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    4 mins ago
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
                                                    Opened Email
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    4 mins ago
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </dd>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded h-52">
                <div class="px-4 py-2 sm:p-4">
                    <dt class="text-md font-bold text-gray-500 truncate">
                        KYC/AML
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                    </dd>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow rounded col-span-2 row-span-3">
                <div class=" py-5 sm:p-6">
                    <dt class="text-md font-bold text-gray-500 truncate">
                        New Investors
                    </dt>
                    <dd class="mt-2">
                        <table class="divide-y divide-gray-200">
                            <thead class="font-bold text-lg">
                                <tr>
                                    <th scope="col" class="py-2 px-4 text-left text-xs font-bold text-gray-500 tracking-wider">
                                        Date/Time
                                    </th>
                                    <th scope="col" class="py-2 px-4 text-left text-xs font-bold text-gray-500 tracking-wider">
                                        Investor
                                    </th>
                                    <th scope="col" class="py-2 px-4 text-left text-xs font-bold text-gray-500 tracking-wider">
                                        Amount
                                    </th>
                                    <th scope="col" class="py-2 px-4 text-left text-xs font-bold text-gray-500 tracking-wider">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach([1,2,3,4,5,3,1] as $val)
                                <tr>
                                    <td class="p-3 px-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        12/15/2020 @ 12:41 PM
                                    </td>
                                    <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                                        Angel Rose Bernados
                                    </td>
                                    <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                                        $3,982
                                    </td>
                                    <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                                        {{-- <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-200 text-green-800">Paid</span> --}}
                                        {{-- <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-orange-200 text-orange-800">Pending</span> --}}
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-red-200 text-red-800">Failed</span>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </dd>
                </div>
            </div>
            <div class="bg-gradient-to-b from-custom-gradient_blue_dark to-custom-gradient_blue_light text-white overflow-hidden shadow rounded">
                <div class="px-4 py-2 sm:p-4">
                    <dd class="mt-1 ">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-14">
                                <img class="w-14" src="/images/successful-kyc.png" alt="">
                            </div>
                            <div class="ml-4 w-full">
                                <div class="text-sm font-medium">
                                    Successfull KYC
                                </div>
                                <div class="text-sm border-b-4 border-green-500 pb-1">
                                    Compliance Check
                                </div>
                            </div>
                        </div>
                    </dd>
                </div>
            </div>
            <div class="bg-gradient-to-b from-custom-gradient_blue_dark to-custom-gradient_blue_light text-white overflow-hidden shadow rounded">
                <div class="px-4 py-2 sm:p-4">
                    <dd class="mt-1 ">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-14">
                                <img class="w-14" src="/images/failed-kyc.png" alt="">
                            </div>
                            <div class="ml-4 w-full">
                                <div class="text-sm font-medium">
                                    Failed KYC
                                </div>
                                <div class="text-sm border-b-4 border-red-500 pb-1">
                                    Compliance Check
                                </div>
                            </div>
                        </div>
                    </dd>
                </div>
            </div>
        </dl>
    </div>

</x-default-layout>
