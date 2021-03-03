<div>
    <div class="grid grid-cols-5 gap-4 pt-10">
        <div class="col-span-2">
            <div class="rounded-lg bg-gradient-to-b from-custom-gradient_violet_dark via-custom-gradient_violet_medium to-custom-gradient_violet_light py-4 px-6">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="ml-auto flex-shrink-0 mb-6">
                        <img src="{{ asset('assets/images/visa.svg') }}" alt="" class="w-">
                    </div>
                    <div class="text-white">
                        <h4 class="mb-4">XXXX-XXXX-XXXX-6125</h4>
                        <p class="mt-1 font-display inline">
                            Benjamin Bit
                        </p>
                        <p class="float-right inline text-xs pt-1">10/23</p>
                    </div>

                </div>

            </div>
        </div>
        <div class="col-span-2">
            <div class="pb-4">
                <p class="text-gray-600 font-display text-lg">Latest Transaction</p>
            </div>
            <dl>
                <div class="flex">
                    <dt class="font-bold text-xs text-gray-600 inline mr-1">Status:</dt>
                    <dd class="text-xs text-gray-600 inline">Successful</dd>
                </div>
                <div class="flex">
                    <dt class="font-bold text-xs text-gray-600 inline mr-1">Date:</dt>
                    <dd class="text-xs text-gray-600 inline">12/15/2020</dd>
                </div>
                <div class="flex">
                    <dt class="font-bold text-xs text-gray-600 inline mr-1">Time:</dt>
                    <dd class="text-xs text-gray-600 inline">12:34PM</dd>
                </div>
                <div class="flex">
                    <dt class="font-bold text-xs text-gray-600 inline mr-1">Amount:</dt>
                    <dd class="text-xs text-gray-600 inline">$10,000</dd>
                </div>
                <div class="flex">
                    <dt class="font-bold text-xs text-gray-600 inline mr-1">Transaction ID:</dt>
                    <dd class="text-xs text-gray-600 inline">AF-31315151</dd>
                </div>

            </dl>
        </div>
        <div class="flex flex-col space-y-2">
            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm rounded-md shadow-sm text-white bg-custom-gradient_blue_light hover:bg-custom-gradient_blue_dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Add Payment Method
            </button>
            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm rounded-md shadow-sm text-white bg-custom-gradient_blue_light hover:bg-custom-gradient_blue_dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
               Process Payment
            </button>
        </div>
    </div>

    <div class="pt-10">
        <div class="bg-white overflow-hidden shadow rounded col-span-2 row-span-3">
            <div class="py-5 sm:p-6">
                <dt class="text-md font-display text-gray-600 truncate">
                    Recent Transaction Snapshot
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
                                    Transaction ID
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 text-xs">
                            @foreach([1,2,3,4,5] as $val)
                            <tr class="text-gray-500">
                                <td class="p-3 px-4 whitespace-nowrap font-medium">
                                    12/15/2020 @ 12:41 PM
                                </td>
                                <td class="p-3 px-4 whitespace-nowrap text-center">
                                    Payment Successful
                                </td>
                                <td class="p-3 px-4 whitespace-nowrap text-center">
                                    Confirmed
                                </td>
                                <td class="p-3 px-4 whitespace-nowrap text-center">
                                    Successful
                                </td>
                                <td class="p-3 px-4 whitespace-nowrap text-center">
                                    AF-31315151
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </dd>
            </div>
            <div class="py-5 sm:p-6">
                <dt class="text-md font-display text-gray-600 truncate">
                    Recent Transaction History
                </dt>
                <dd class="mt-2">
                    <table class="divide-y divide-gray-200">
                        <thead class="text-sm font-semilbold">
                            <tr>
                                <th scope="col" class="py-2 px-4 text-left text-gray-500 tracking-wider">
                                    Created Date
                                </th>
                                <th scope="col" class="py-2 px-4 text-center text-gray-500 tracking-wider">
                                    Company
                                </th>
                                <th scope="col" class="py-2 px-4 text-center text-gray-500 tracking-wider">
                                    Amount
                                </th>
                                <th scope="col" class="py-2 px-4 text-center text-gray-500 tracking-wider">
                                    # of Shares
                                </th>
                                <th scope="col" class="py-2 px-4 text-center text-gray-500 tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="py-2 px-4 text-center text-gray-500 tracking-wider">
                                    Transaction ID
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 text-xs">
                            @foreach([1,2] as $val)
                            <tr class="text-gray-500">
                                <td class="p-3 px-4 whitespace-nowrap font-medium">
                                    12/15/2020
                                </td>
                                <td class="p-3 px-4 whitespace-nowrap text-center">
                                    EmpireBit
                                </td>
                                <td class="p-3 px-4 whitespace-nowrap text-center">
                                    $10,000
                                </td>
                                <td class="p-3 px-4 whitespace-nowrap text-center">
                                    10
                                </td>
                                <td class="p-3 px-4 whitespace-nowrap text-center">
                                    Successful
                                </td>
                                <td class="p-3 px-4 whitespace-nowrap text-center">
                                    AF-31315151
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