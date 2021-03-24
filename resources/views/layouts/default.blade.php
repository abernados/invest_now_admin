<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} </title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        .:after {
            content: ' \02C3';
        }
    </style>
</head>

<body class="font-sans antialiased">

    <div class="h-screen flex overflow-hidden bg-white">
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="lg:hidden">
            <div class="fixed inset-0 flex z-40">
                <div class="fixed inset-0">
                    <div class="absolute inset-0 bg-gray-600 opacity-75" aria-hidden="true"
                    x-transition:enter="transition-opacity ease-linear duration-200"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity ease-linear duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    ></div>
                </div>
                <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-primary"
                    x-transition:enter="transition ease-in-out duration-200 transform"
                    x-transition:enter-start="-translate-x-full"
                    x-transition:enter-end="translate-x-0""
                    x-transition:leave="transition ease-in-out duration-200 transform"
                    x-transition:leave-start="translate-x-0""
                    x-transition:leave-end="-translate-x-full"
                    >
                    <div class="absolute top-0 right-0 -mr-12 pt-2">
                        <button class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="sr-only">Close sidebar</span>
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex-shrink-0 flex items-center px-4">
                        <img class="h-8 w-auto" src="/images/logo-empirebit@2x.png" alt="Easywire logo">
                    </div>
                    <nav class="mt-5 flex-shrink-0 h-full overflow-y-auto" aria-label="Sidebar">
                        <h3 class="px-3 px-5 text-sm font-bold text-white  py-2 tracking-wider leading-6">
                            Admin
                        </h3>
                        <div class="px-2">
                            <a href="{{ route('dashboard') }}" class="text-white group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md {{Request::is('dashboard') ? 'text-yellow-500 font-bold' : ''}}" aria-current="page">
                                <svg class="hover:text-sidebarActive hover:font-bold mr-4 h-6 w-6 text-blue-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Dashboard
                            </a>

                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/clock -->
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                To-Do's
                            </a>

                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/scale -->
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                                Account Settings
                            </a>
                        </div>
                        <h3 class="px-3 px-5 text-sm font-bold text-white  py-2 tracking-wider leading-6">
                            Application
                        </h3>
                        <div class="px-2">
                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/credit-card -->
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                                Basic Information
                            </a>

                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/user-group -->
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Investment Details
                            </a>

                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/document-report -->
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Payment Information
                            </a>

                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/document-report -->
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                KYC/AML Verification
                            </a>

                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/document-report -->
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Audit Trail
                            </a>

                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/document-report -->
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Ready for Clearing
                            </a>
                        </div>
                        <h3 class="px-3 px-5 text-sm font-bold text-white  py-2 tracking-wider leading-6">
                            Automation/Campaigns
                        </h3>
                        <div class="px-2">
                            <a href="#" class="text-white group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md" aria-current="page">
                                <svg class="hover:text-sidebarActive hover:font-bold mr-4 h-6 w-6 text-blue-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Follow-up Campaign
                            </a>

                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/clock -->
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Email Automation
                            </a>

                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/scale -->
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                                SMS Automation
                            </a>
                        </div>
                    </nav>
                </div>
                <div class="flex-shrink-0 w-14" aria-hidden="true">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden lg:flex lg:flex-shrink-0">
            <div class="flex flex-col w-64">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex flex-col flex-grow bg-primary pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4 mx-auto">
                        <img class="h-10 w-auto" src="/images/logo-empirebit@2x.png" alt="Easywire logo">
                    </div>
                    <nav class="mt-5 flex-1 flex flex-col overflow-y-auto" aria-label="Sidebar">
                        <h3 class="px-3 px-5 text-sm font-display text-white  py-2 tracking-wider leading-6">
                            Admin
                        </h3>
                        <div class="px-2">
                            <a href="{{ route('dashboard') }}" class="{{Request::is('dashboard') ? 'text-yellow-100 font-semibold' : ''}} text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                  </svg>
                                <span class="group-hover:text-sidebarActive hover:font-bold">Dashboard</span>
                            </a>

                            <a href="{{ route('todo') }}" class="{{Request::is('todo') ? 'text-yellow-100 font-semibold' : ''}} text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                  </svg>
                                To-Do's
                            </a>

                            <a href="{{ route('basic-information') }}" class="{{Request::is('account-settings') ? 'text-yellow-100 font-semibold' : ''}} text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                  </svg>
                                Account Settings
                            </a>
                            <h3 class="px-3 px-3 text-sm font-display text-white  py-2 tracking-wider leading-6">
                                Application
                            </h3>
                            <a href="{{ route('basic-information') }}" class="{{Request::is('basic-information') ? 'text-yellow-100 font-semibold' : ''}} text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                  </svg>
                                Basic Information
                            </a>

                            <a href="{{ route('investment-details') }}" class="{{Request::is('investment-details') ? 'text-yellow-100 font-semibold' : ''}} text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                                  </svg>
                                Investment Details
                            </a>

                            <a href="{{ route('payment-information') }}" class="{{Request::is('payment-information') ? 'text-yellow-100 font-semibold' : ''}} text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                                  </svg>
                                Payment Information
                            </a>
                            <a href="{{ route('kyc-aml-verification') }}" class="{{Request::is('kyc-aml-verification') ? 'text-yellow-100 font-semibold' : ''}} text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                  </svg>
                                KYC/AML Verification
                            </a>

                            <a href="{{ route('audit-trail') }}" class="{{Request::is('audit-trail') ? 'text-yellow-100 font-semibold' : ''}} text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                  </svg>
                                Audit Trail
                            </a>

                            <a href="#" class="{{Request::is('clearing') ? 'text-yellow-100 font-semibold' : ''}} text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                  </svg>
                                Ready for Clearing
                            </a>
                            <h3 class="px-3 px-3 text-sm font-display text-white  py-2 tracking-wider leading-6">
                                Automation/Campaigns
                            </h3>
                            <a href="#" class="{{Request::is('follow-up-campaign') ? 'text-yellow-100 font-semibold' : ''}} text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                                  </svg>
                                Follow-up Campaign
                            </a>

                            <a href="#" class="{{Request::is('email-automation') ? 'text-yellow-100 font-semibold' : ''}} text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                  </svg>
                                Email Automation
                            </a>
                            <a href="#" class="{{Request::is('sms-automation') ? 'text-yellow-100 font-semibold' : ''}} text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <svg class="mr-4 h-6 w-6 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                  </svg>
                                SMS Automation
                            </a>

                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!-- info component -->
        @if($showInfo)
        <livewire:show-info />
        @endif

        <div class="flex-1 overflow-auto focus:outline-none" tabindex="0">
            <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
                <div>
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </main>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
