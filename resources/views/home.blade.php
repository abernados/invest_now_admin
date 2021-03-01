<x-default-layout>
    <div class="h-screen flex overflow-hidden bg-white">
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-108">
                <livewire:info />
            </div>
        </div>
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div>
                            <div class="sm:hidden">
                                <label for="tabs" class="sr-only">Select a tab</label>
                                <select id="tabs" name="tabs" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option selected>Overview</option>
                                    <option>Investment</option>
                                    <option>Payment</option>
                                    <option>Compliance</option>
                                    <option>Audit Trail</option>
                                </select>
                            </div>
                            <div class="hidden sm:block">
                                <div class="border-b border-gray-200">
                                    <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                                        <a href="#" class="border-indigo-500 text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" aria-current="overview">
                                            Overview
                                        </a>
                                        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                            Investment
                                        </a>
                                        <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                                        <a href="#" class="border-transparent text-gray-500 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                            Payment
                                        </a>
                                        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                            Compliance
                                        </a>
                                        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                            Audit Trail
                                        </a>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <!-- Replace with your content -->
                        <div class="py-4">
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

                            <!-- This example requires Tailwind CSS v2.0+ -->
<div class="py-10">
  <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
    <div class="bg-white overflow-hidden shadow rounded-lg">
      <div class="px-4 py-5 sm:p-6">
        <dt class="text-sm font-medium text-gray-500 truncate font-display">
          Investment Steps
        </dt>
        <dd class="mt-1 text-3xl font-semibold text-gray-900">
          80%
        </dd>
      </div>
    </div>

    <div class="bg-white overflow-hidden shadow rounded-lg">
      <div class="px-4 py-5 sm:p-6">
        <dt class="text-sm font-medium text-gray-500 truncate">
          Avg. Open Rate
        </dt>
        <dd class="mt-1 text-3xl font-semibold text-gray-900">
          58.16%
        </dd>
      </div>
    </div>

    <div class="bg-white overflow-hidden shadow rounded-lg">
      <div class="px-4 py-5 sm:p-6">
        <dt class="text-sm font-medium text-gray-500 truncate">
          Avg. Click Rate
        </dt>
        <dd class="mt-1 text-3xl font-semibold text-gray-900">
          24.57%
        </dd>
      </div>
    </div>
  </dl>
</div>

                        </div>
                        <!-- /End replace -->
                    </div>
                </div>
            </main>
        </div>
    </div>

</x-default-layout>