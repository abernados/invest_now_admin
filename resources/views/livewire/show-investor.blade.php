<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div>
            <!-- <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select a tab</label>
                <select id="tabs" name="tabs" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option selected>Overview</option>
                    <option>Investment</option>
                    <option>Payment</option>
                    <option>Compliance</option>
                    <option>Audit Trail</option>
                </select>
            </div> -->
            <div class="hidden sm:block">
                <div class="c-tab">
                    <nav class="c-tab__underline" aria-label="Tabs">
                        <a wire:click="$set('tab', 1)" href="#" class="items {{ $tab === 1 ? 'active' : '' }}" aria-current="overview">
                            Overview
                        </a>
                        <a wire:click="$set('tab', 2)" href="#" class="items {{ $tab === 2 ? 'active' : '' }}">
                            Investment
                        </a>
                        <a wire:click="$set('tab', 3)" href="#" class="items {{ $tab === 3 ? 'active' : '' }}">
                            Payment
                        </a>
                        <a wire:click="$set('tab', 4)" href="#" class="items {{ $tab === 4 ? 'active' : '' }}">
                            Compliance
                        </a>
                        <a wire:click="$set('tab', 5)" href="#" class="items {{ $tab === 5 ? 'active' : '' }}">
                            Audit Trail
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
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
                            <h3 class="text-lg leading-6 font-medium text-gray-600 font-display ">
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
                            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm rounded-md text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                Follow up
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            @if($tab === 1)
            <livewire:overview-tab />
            @elseif($tab === 2)
            <livewire:investment-tab />
            @elseif($tab === 3)
            <livewire:payment-tab />
            @elseif($tab === 4)
            <livewire:compliance-tab />
            @endif
        </div>
    </div>
</div>