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
        @foreach ($investors as $investor)
            <tr>
                <td class="p-3 px-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{ $investor->created_at->format('m/d/Y') }} {{ $investor->created_at->format('g:i A') }}
                </td>
                <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                    <a href="/investor/1">{{ $investor->first_name . ' ' . $investor->last_name }}</a>
                </td>
                <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                    $ {{ number_format($investor->investmentValues->amount, 2) }}
                </td>
                <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                    {{-- <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-200 text-green-800">Paid</span> --}}
                    {{-- <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-orange-200 text-orange-800">Pending</span> --}}
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-red-200 text-red-800">Failed</span>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
