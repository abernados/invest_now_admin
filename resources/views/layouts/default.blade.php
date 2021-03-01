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
    @props(['hasInfo'])
    <div class="h-screen flex overflow-hidden bg-gray-100">
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="lg:hidden">
            <div class="fixed inset-0 flex z-40">
                <!--
          Off-canvas menu overlay, show/hide based on off-canvas menu state.

          Entering: "transition-opacity ease-linear duration-200"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
                <div class="fixed inset-0">
                    <div class="absolute inset-0 bg-gray-600 opacity-75" aria-hidden="true"></div>
                </div>
                <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-200 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-200 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
                <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-primary">
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
                    {{-- <nav class="mt-5 flex-shrink-0 h-full overflow-y-auto" aria-label="Sidebar">
                        <div class="px-2">
                            <a href="#" class="text-white group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md" aria-current="page">
                                <svg class="hover:text-sidebarActive hover:font-bold mr-4 h-6 w-6 text-blue-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Dashboard
                            </a>

                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/clock -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                To-Do's
                            </a>

                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/scale -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                                Account Settings
                            </a>

                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/credit-card -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                                Basic Information
                            </a>

                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/user-group -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Investment Details
                            </a>

                            <a href="#" class="text-white hover:text-white hover:bg-blue-600 group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/document-report -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Payment Information
                            </a>
                        </div>
     text-white                    <div class="mt-6 pt-6">
                            <div class="px-2">
                                <a href="#" class="group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md hover:text-white hover:bg-blue-600">
                                    <!-- Heroicon name: outline/cog -->
                                    <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive group-hover:text-blue-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>KYC/AML Verification
                                </a>

                                <a href="#" class="group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md hover:text-white hover:bg-blue-600">
                                    <!-- Heroicon name: outline/question-mark-circle -->
                                    <svg class="mr-4 h-6 w-6 text-blue-300 group-hover:text-blue-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Audit Trail
                                </a>

                                <a href="#" class="group flex items-center px-2 py-2 text-base font-extralight hover:font-bold rounded-md hover:text-white hover:bg-blue-600">
                                    <!-- Heroicon name: outline/shield-check -->
                                    <svg class="mr-4 h-6 w-6 text-blue-300 group-hover:text-blue-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    Reafy for Clearing
                                </a>
                            </div>
                        </div>
                    </nav> --}}
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
                        <h3 class="px-3 px-5 text-sm font-bold text-white  py-2 tracking-wider leading-6">
                            Admin
                        </h3>
                        <div class="px-2">
                            {{-- <a href="#" class="text-white group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md" aria-current="page"> --}}
                            <a href="#" class="text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span class="group-hover:text-sidebarActive hover:font-bold">Dashboard</span>
                            </a>

                            <a href="#" class="text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/clock -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                To-Do's
                            </a>

                            <a href="#" class="text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/scale -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                                Account Settings
                            </a>
                            <h3 class="px-3 px-3 text-sm font-bold text-white  py-2 tracking-wider leading-6">
                                Application
                            </h3>
                            <a href="#" class="text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/credit-card -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                                Basic Information
                            </a>

                            <a href="#" class="text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/user-group -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Investment Details
                            </a>

                            <a href="#" class="text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/document-report -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Payment Information
                            </a>
                            <a href="#" class="text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/cog -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                KYC/AML Verification
                            </a>

                            <a href="#" class="text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/question-mark-circle -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Audit Trail
                            </a>

                            <a href="#" class="text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/shield-check -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                Ready for Clearing
                            </a>
                            <h3 class="px-3 px-3 text-sm font-bold text-white  py-2 tracking-wider leading-6">
                                Automation/Campaigns
                            </h3>
                            <a href="#" class="text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/question-mark-circle -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Follow-up Campaign
                            </a>

                            <a href="#" class="text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/shield-check -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                Email Automation
                            </a>
                            <a href="#" class="text-white duration-200 ease-in-out hover:text-sidebarActive hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition group flex items-center px-2 py-2 text-sm leading-6 font-extralight hover:font-bold rounded-md">
                                <!-- Heroicon name: outline/question-mark-circle -->
                                <svg class="mr-4 h-6 w-6 text-blue-200 group-hover:text-sidebarActive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                SMS Automation
                            </a>

                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="flex-1 overflow-auto focus:outline-none" tabindex="0">
            <!-- <div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:border-none">
                <button class="px-4 border-r border-gray-200 text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 lg:hidden"> -->
            <!-- <span class="sr-only">Open sidebar</span> -->
            <!-- Heroicon name: outline/menu-alt-1 -->
            <!-- <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </button> -->
            <!-- Search bar -->
            <!-- <div class="flex-1 px-4 flex justify-end sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <span class="sr-only">View notifications</span> -->
            <!-- Heroicon name: outline/bell -->
            <!-- <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button> -->

            <!-- Profile dropdown -->
            <!-- <div class="ml-3 relative">
                            <div>
                                <button class="max-w-xs bg-white rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 lg:p-2 lg:rounded-md lg:hover:bg-gray-50" id="user-menu" aria-haspopup="true">
                                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixqx=Hpk5hV3qM6&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <span class="hidden ml-3 text-gray-700 text-sm font-medium lg:block"><span class="sr-only">Open user menu for </span>Emilia Birch</span> -->
            <!-- Heroicon name: solid/chevron-down -->
            <!-- <svg class="hidden flex-shrink-0 ml-1 h-5 w-5 text-gray-400 lg:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div> -->
            <!--
                Profile dropdown panel, show/hide based on dropdown state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
            <!-- <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">KYC/AML Verification</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
                <div class="mt-8">
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