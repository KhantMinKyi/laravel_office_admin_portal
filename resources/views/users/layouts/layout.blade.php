<!DOCTYPE html>
<html lang="en">

<head class="dark">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/png" sizes="15x20" href="{{ url('alt-logo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/css/global.css" type="text/css">
    {{-- Css --}}
    {{-- @livewireStyles() --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<body class="dark:bg-mainbody-900">


    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-mainbody-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    {{-- <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button> --}}
                    <button wire:key='drawer' data-drawer-target="sidebar-multi-level-sidebar"
                        data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar"
                        type="button"
                        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="/user" class="flex ms-2 md:me-24">
                        <img src="{{ url('logo.png') }}" class="h-14 w-26 me-3" alt="Office Logo" id="logo-img" />
                        {{-- <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Office
                            Portal</span> --}}
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button" wire:key='drawer2' class="flex text-xl mx-2" aria-expanded="false"
                                data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <i class="fa-regular fa-circle-user dark:text-mainbody-200"></i>
                            </button>
                        </div>
                        <div class="mode_switcher">
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-mainbody-700 dark:divide-mainbody-800"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    {{ Auth::user()->full_name }}
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    {{ Auth::user()->email }}
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="{{ route('users.user_profile', ['id' => Auth::user()->id]) }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-mainbody-600 dark:hover:text-white"
                                        role="menuitem">Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('users.user_salary_list') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-mainbody-600 dark:hover:text-white"
                                        role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <a href="/logout"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-mainbody-600 dark:hover:text-white"
                                        role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <aside id="sidebar-multi-level-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-mainbody-800">
            <ul class="space-y-2 font-medium">
                <li class="pb-4">
                    <a href="/user"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-mainbody-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Main Dashboard</span>
                    </a>
                </li>
                @if (Auth::user()->is_operation == 1)
                    <li class="pt-4">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-mainbody-900 transition duration-75 rounded-lg group  hover:bg-gray-100 dark:text-white dark:hover:bg-mainbody-700"
                            aria-controls="dropdown-example-users" data-collapse-toggle="dropdown-example-users">
                            <i
                                class="fa-solid fa-users-gear text-lg text-gray-400 hover:text-mainbody-300 dark:hover:text-mainbody-100 "></i>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Users</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-example-users" class="hidden py-2 space-y-2">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-mainbody-700">
                                    <i
                                        class="fa-solid fa-user-gear text-lg text-gray-400 hover:text-mainbody-300 dark:hover:text-mainbody-100 pr-2"></i>
                                    Operation Staffs</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-mainbody-700">
                                    <i
                                        class="fa-solid fa-user text-lg text-gray-400 hover:text-mainbody-300 dark:hover:text-mainbody-100 pr-2"></i>
                                    Normal Staffs</a>
                            </li>
                        </ul>
                    </li>
                @endif
                <li>
                    <a href="{{ route('users.user_attendance') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-mainbody-700 group">
                        <i
                            class="fa-solid fa-person-walking-dashed-line-arrow-right text-lg text-gray-400 hover:text-mainbody-300 dark:hover:text-mainbody-100 pr-2"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Attendance</span>

                    </a>
                </li>
                <li>
                    <a href="{{ route('user_salary.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-mainbody-700 group">
                        <i
                            class="fa-solid fa-hand-holding-dollar text-lg text-gray-400 hover:text-mainbody-300 dark:hover:text-mainbody-100 pr-2"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Salary</span>

                    </a>
                </li>

                @if (Auth::user()->is_operation == 1)
                    {{-- <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-mainbody-700 group">
                            <i
                                class="fa-solid fa-sack-dollar text-lg text-gray-400 hover:text-mainbody-300 dark:hover:text-mainbody-100 pr-2"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Company Finance</span>
                        </a>
                    </li> --}}
                    {{-- <li>
                        <a href="/admin/location_management"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-mainbody-700 group">
                            <i class="fa-solid fa-location-dot text-lg text-gray-400"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Location Management</span>
                        </a>
                    </li> --}}
                @endif
                <li>
                    <a href="/logout"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-mainbody-700 group">
                        <i
                            class="fa-solid fa-arrow-right-from-bracket text-lg text-gray-400 hover:text-mainbody-300 dark:hover:text-mainbody-100 pr-2"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>


    <div class=" flex  flex-row-reverse  pt-20 ">
    </div>
    <div class="sm:ml-64">
        <div class="loader-container hidden">
            <div class="loader"></div>
        </div>
        @yield('content')
    </div>
    {{-- Javascript --}}
    <script>
        var defaultThemeMode = "dark";
        var themeMode;
        // Find the element with the class "mode_switcher"
        var modeSwitcherElement = document.querySelector('.mode_switcher');
        // Create a new div element and set its innerHTML to the provided code
        var newDiv = document.createElement('div');
        var logoImg = document.getElementById('logo-img');


        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-theme-mode");
            } else {
                if (localStorage.getItem("data-theme") !== null) {
                    themeMode = localStorage.getItem("data-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "dark") {
                newDiv.innerHTML = `
        <label class="relative inline-flex items-center cursor-pointer">
            <i class="fa-regular fa-sun text-lg text-mainbody-200 dark:text-black"></i>
            <input type="checkbox" value="" class="sr-only peer" checked="checked" id="switch" onclick="switchMode()">
            <div class="w-11 h-6 mx-2 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-mainbody-300 dark:peer-focus:ring-mainbody-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[30px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-mainbody-600">
            </div>
            <i class="fa-regular fa-moon text-lg dark:text-mainbody-200"></i>
        </label>
    `;
                logoImg.setAttribute('src', '{{ url('logo-dark-mode.png') }}');
            } else if (themeMode === 'light') {
                newDiv.innerHTML = `
        <label class="relative inline-flex items-center cursor-pointer">
            <i class="fa-regular fa-sun text-lg text-mainbody-200 dark:text-black"></i>
            <input type="checkbox" value="" class="sr-only peer" id="switch" onclick="switchMode()">
            <div class="w-11 h-6 mx-2 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-mainbody-300 dark:peer-focus:ring-mainbody-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[30px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-mainbody-600">
            </div>
            <i class="fa-regular fa-moon text-lg dark:text-mainbody-200"></i>
        </label>
    `;
                logoImg.setAttribute('src', '{{ url('logo.png') }}');
            }
            modeSwitcherElement.appendChild(newDiv);
            document.documentElement.classList.add(themeMode);
        }
    </script>
    <script>
        function switchMode() {
            var logoImg = document.getElementById('logo-img');

            // Set the new source URL
            const switchtest = document.getElementById('switch');
            if (switchtest.checked == true) {
                window.localStorage.setItem('data-theme', 'dark');
                document.documentElement.classList.add('dark');
                logoImg.setAttribute('src', '{{ url('logo-dark-mode.png') }}');
            } else {
                window.localStorage.setItem('data-theme', 'light');
                document.documentElement.classList.remove('dark');
                logoImg.setAttribute('src', '{{ url('logo.png') }}');
            }
        }
    </script>
    <script data-navigate-track src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    {{-- @livewireScripts() --}}
    <script src="/js/admin/layout/helper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/admin/search.js"></script>
</body>

</html>
