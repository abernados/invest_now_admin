<div>
    <div class="pt-10">
        <dl class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <div class="bg-white border-2 border-custom-gradient_violet_medium flex flex-col overflow-hidden rounded shadow relative">
                <div class="absolute right-2">
                <i class="fa-exclamation-circle fas text-custom-gradient_violet_medium"></i>
                </div>
                <div class="flex-grow px-4 py-5 sm:p-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/images/kyc.svg') }}" class="h-14">
                        </div>
                        <div class="ml-4 w-0 flex-1">
                            <dt class="font-display text-gray-600">
                                Know Your Customer
                            </dt>
                            <dd class="flex items-baseline">
                                <div class="text-xs font-medium text-custom-gradient_violet_medium">
                                    1 Record Needs Attention
                                </div>
                            </dd>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col bg-white overflow-hidden shadow rounded border">
                <div class="flex-grow px-4 py-5 sm:p-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/images/aml.svg') }}" class="h-14">
                        </div>
                        <div class="ml-4 w-0 flex-1">
                            <dt class="font-display text-gray-600">
                                AML Verification
                            </dt>
                            <dd class="flex items-baseline">
                                <div class="text-xs text-gray-500">
                                    100% Complete
                                </div>
                            </dd>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col bg-white overflow-hidden shadow rounded border">
                <div class="flex-grow px-4 py-5 sm:p-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/images/proof.svg') }}" class="h-14">
                        </div>
                        <div class="ml-4 w-0 flex-1">
                            <dt class="font-display text-gray-600">
                                Proof of Identity
                            </dt>
                            <dd class="flex items-baseline">
                                <div class="text-xs text-gray-500">
                                    100% Complete
                                </div>
                            </dd>
                        </div>
                    </div>
                </div>
            </div>
        </dl>
    </div>

    <div class="pt-10">
        <div class="bg-white overflow-hidden shadow rounded col-span-2 row-span-3">
            <div class=" py-5 sm:p-6">
                <dt class="text-md font-display text-gray-600 truncate">
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
                                    Validate SSN
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

            <div class=" py-5 sm:p-6">
                <dt class="text-md font-display text-gray-600 truncate">
                    AML Verification Snapshot
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
                            @foreach([1,2,3] as $val)
                            <tr class="text-gray-500">
                                <td class="p-3 px-4 whitespace-nowrap font-medium">
                                    12/15/2020 @ 12:41 PM
                                </td>
                                <td class="p-3 px-4 whitespace-nowrap text-center">
                                    Validate Bank Account
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