                        <table class="divide-y divide-gray-200 w-full">
                            <thead class="font-bold text-lg">
                                <tr>
                                    <th scope="col"
                                        class="py-2 px-4 text-left text-xs font-bold text-gray-500 tracking-wider">
                                        New Activity
                                    </th>
                                    <th scope="col"
                                        class="py-2 px-4 text-left text-xs font-bold text-gray-500 tracking-wider">
                                        Investor
                                    </th>
                                    <th scope="col"
                                        class="py-2 px-4 text-left text-xs font-bold text-gray-500 tracking-wider">
                                        Action
                                    </th>
                                    <th scope="col"
                                        class="py-2 px-4 text-left text-xs font-bold text-gray-500 tracking-wider">
                                        Application Progress
                                    </th>
                                    <th scope="col"
                                        class="py-2 px-4 text-left text-xs font-bold text-gray-500 tracking-wider">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($investors as $investor)
                                    <tr>
                                        <td class="p-3 px-4 whitespace-nowrap text-sm font-medium text-gray-500">
                                            {{ $investor->created_at->format('m/d/Y @ g:i A') }}
                                        </td>
                                        <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                                            <a href="/investor/1">{{ $investor->first_name . ' ' . $investor->last_name }}</a>
                                        </td>
                                        <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                                            Missing Info
                                        </td>
                                        <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="flex items-baseline pb-0.5">
                                                <div
                                                    class="bg-gray-200 flex flex-auto h-1.5 mb-2 overflow-hidden rounded text-xs">
                                                    <div style="width:80%"
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-200 border-green-500 border-solid border rounded">
                                                    </div> <!-- Email -->
                                                    {{-- <div style="width:80%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-yellow-200 border-yellow-500 border-solid border rounded"></div> <!-- Missing Info -->
                                                <div style="width:80%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-200 border-red-500 border-solid border rounded"></div> --}}
                                                    <!-- Call -->
                                                </div>
                                                <div class="flex-initial text-xxs ml-0.5">42</div>
                                            </div>
                                        </td>
                                        <td class="p-3 px-4 whitespace-nowrap text-sm text-gray-500">
                                            <input type="checkbox" name="status" checked>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
