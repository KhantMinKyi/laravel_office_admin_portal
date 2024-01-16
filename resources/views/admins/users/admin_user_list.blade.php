@extends('admins.layouts.layout')

@section('content')
    {{-- Admin user List table --}}
    <div class="p-4 sm:ml-64 relative " wire:key='admin-user-list'>
        <section class=" dark:bg-mainbody-900 p-3 sm:p-5">
            <div class="mx-auto  px-4 lg:px-12">
                <!-- Start coding here -->
                <div class="bg-white dark:bg-mainbody-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div
                        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-500 focus:border-mainbody-500 block w-full pl-10 p-2 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                        placeholder="Search" required="">
                                </div>
                            </form>
                        </div>
                        <div
                            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <button type="button" id="add-button" onclick="togglePopup()"
                                class="flex items-center justify-center text-white bg-mainbody-300 hover:bg-mainbody-700 focus:ring-4 focus:ring-mainbody-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-mainbody-600 dark:hover:bg-mainbody-700 focus:outline-none dark:focus:ring-mainbody-800">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Add Admin
                            </button>
                            <div class="flex items-center space-x-3 w-full md:w-auto">
                                <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown"
                                    class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-mainbody-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-mainbody-800 dark:text-gray-400 dark:border-mainbody-600 dark:hover:text-white dark:hover:bg-mainbody-700"
                                    type="button">
                                    <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                    Actions
                                </button>
                                <div id="actionsDropdown"
                                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-mainbody-700 dark:divide-mainbody-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="actionsDropdownButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white">Mass
                                                Edit</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="#"
                                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:text-gray-200 dark:hover:text-white">Delete
                                            all</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-mainbody-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3">User Name</th>
                                    <th scope="col" class="px-4 py-3">Name</th>
                                    <th scope="col" class="px-4 py-3">Email</th>
                                    <th scope="col" class="px-4 py-3">Department</th>
                                    <th scope="col" class="px-4 py-3">Position</th>
                                    <th scope="col" class="px-4 py-3">
                                        <span class=" content-end">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 10; $i++)
                                    <tr
                                        class="border-b dark:border-gray-700 hover:text-white hover:bg-mainbody-300 dark:hover:bg-mainbody-700 hover:cursor-pointer">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            khantminkyi</th>
                                        <td class="px-4 py-3">Khant Min Kyi</td>
                                        <td class="px-4 py-3">khantminkyi@gmail.com</td>
                                        <td class="px-4 py-3">Yangon</td>
                                        <td class="px-4 py-3">Web Developer</td>
                                        <td class="px-4 py-3 flex items-center justify-end">
                                            <button class="mr-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                                    viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#426b66"
                                                        d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                                </svg>
                                            </button>
                                            <button id="apple-imac-{{ $i }}-dropdown-button"
                                                data-dropdown-toggle="apple-imac-{{ $i }}-dropdown"
                                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                                type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                </svg>
                                            </button>
                                            <div id="apple-imac-{{ $i }}-dropdown"
                                                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-mainbody-700 dark:divide-mainbody-600">
                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="apple-imac-27-dropdown-button">
                                                    <li>
                                                        <a href="#"
                                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white">Show</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white">Edit</a>
                                                    </li>
                                                </ul>
                                                <div class="py-1">
                                                    <a href="#"
                                                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                        aria-label="Table navigation">
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                            Showing
                            <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                            of
                            <span class="font-semibold text-gray-900 dark:text-white">1000</span>
                        </span>
                        <ul class="inline-flex items-stretch -space-x-px">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-mainbody-800 dark:border-mainbody-700 dark:text-gray-400 dark:hover:bg-mainbody-700 dark:hover:text-white">
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-mainbody-800 dark:border-mainbody-700 dark:text-gray-400 dark:hover:bg-mainbody-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-mainbody-800 dark:border-mainbody-700 dark:text-gray-400 dark:hover:bg-mainbody-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-mainbody-700 dark:bg-mainbody-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-mainbody-800 dark:border-mainbody-700 dark:text-gray-400 dark:hover:bg-mainbody-700 dark:hover:text-white">...</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-mainbody-800 dark:border-mainbody-700 dark:text-gray-400 dark:hover:bg-mainbody-700 dark:hover:text-white">100</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-mainbody-800 dark:border-mainbody-700 dark:text-gray-400 dark:hover:bg-mainbody-700 dark:hover:text-white">
                                    <span class="sr-only">Next</span>
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        {{-- Popup Model --}}
        <div class="hidden" id="popup-model">
            <div class="fixed top-10 right-0 bottom-0 left-0 bg-black opacity-50"></div>
            <div class="fixed top-10 right-0 bottom-0 left-0 flex items-center justify-center">
                <div class="p-10 bg-white text-black dark:bg-mainbody-800 dark:text-white relative rounded">
                    <button class="absolute top-0 right-0 px-4 pt-4 " onclick="hidePopup()">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12"
                            viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                    <div>
                        <h4 class="flex justify-center mb-4 font-semibold text-gray-500 dark:text-gray-100">Add Admin Form
                        </h4>

                        <div class="mb-4 border-b border-gray-200 dark:border-mainbody-700">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                                data-tabs-toggle="#default-tab-content" role="tablist">
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                                        data-tabs-target="#profile" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false">Profile</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 "
                                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                        aria-controls="dashboard" aria-selected="false">Contact</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                                        aria-controls="settings" aria-selected="false">Family</button>
                                </li>
                                <li role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                                        aria-controls="contacts" aria-selected="false">job Description</button>
                                </li>
                                <li role="account">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="account-tab" data-tabs-target="#account" type="button" role="tab"
                                        aria-controls="account" aria-selected="false">Account</button>
                                </li>
                            </ul>
                        </div>
                        <div id="default-tab-content">
                            <form>
                                {{-- Profile --}}
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="profile"
                                    role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="first_name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                                name</label>
                                            <input type="text" id="first_name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter First Name" required>
                                            <span class="text-sm text-red-600 dark:text-red-500">Error Message</span>
                                        </div>
                                        <div>
                                            <label for="last_name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                                name</label>
                                            <input type="text" id="last_name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter Last Name" required>
                                        </div>
                                        <div>
                                            <label for="dob"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
                                                of Birth</label>
                                            <input type="date" id="dob"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Date of Birth" required>
                                        </div>
                                        <div>
                                            <label for="nrc"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NRC</label>
                                            <input type="text" id="nrc"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter NRC" required>
                                        </div>
                                        <div>
                                            <label for="gender"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                                            <select id="gender"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                                <option selected disabled>Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="nationality"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nationality</label>
                                            <input type="text" id="nationality"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter Nationality" required>
                                        </div>
                                        <div>
                                            <label for="degree"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Degree</label>
                                            <input type="text" id="degree"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter Degree" required>
                                        </div>
                                        <div>
                                            <label for="gender"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maritial
                                                Status</label>
                                            <select id="gender"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                                <option selected disabled>Select Status</option>
                                                <option value="single">Single</option>
                                                <option value="married">Married</option>
                                                <option value="divorced">Divorced</option>
                                                <option value="widowed">Widowed</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{-- Contact --}}
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="dashboard"
                                    role="tabpanel" aria-labelledby="dashboard-tab">
                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="phone_1"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                                1</label>
                                            <input type="text" id="phone_1"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter Phone 1" required>
                                        </div>
                                        <div>
                                            <label for="phone_2"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                                2</label>
                                            <input type="text" id="phone_2"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter Phone 2" required>
                                        </div>
                                        <div>
                                            <label for="email"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                            <input type="email" id="email"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter Email" required>
                                        </div>
                                        <div>
                                            <label for="address"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                            <input type="text" id="address"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter Address" required>
                                        </div>
                                        <div>
                                            <label for="city"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                            <select id="city"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                                <option selected disabled>Select City</option>
                                                <option value="Yangon">Yangon</option>
                                                <option value="Mandalay">Mandalay</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="township"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Township</label>
                                            <select id="township"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                                <option selected disabled>Select Township</option>
                                                <option value="Tharkayta">Tharkayta</option>
                                                <option value="thanlyin">Thanlyin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{-- Family --}}
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="settings"
                                    role="tabpanel" aria-labelledby="settings-tab">
                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="father_name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father
                                                name</label>
                                            <input type="text" id="father_name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter Father Name" required>
                                        </div>
                                        <div>
                                            <label for="contact_phone"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact
                                                Phone</label>
                                            <input type="text" id="contact_phone"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter Contact Phone" required>
                                        </div>
                                    </div>
                                </div>
                                {{-- Job description --}}
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="contacts"
                                    role="tabpanel" aria-labelledby="contacts-tab">
                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="start_date"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                                                Date</label>
                                            <input type="date" id="start_date"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter Start Date" required>
                                        </div>
                                        <div>
                                            <label for="position"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                                            <input type="text" id="position"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter Position" required>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="department_id"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                        <select id="department_id"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                            <option selected disabled>Select Department</option>
                                            <option value="1">Yangon</option>
                                            <option value="2">Mandalay</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- Account --}}
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="account"
                                    role="tabpanel" aria-labelledby="account-tab">
                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="user_name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                                                Name</label>
                                            <input type="text" id="user_name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter Username" required>
                                        </div>
                                        <div>
                                            <label for="password"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                            <input type="text" id="password"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                placeholder="Enter Password" required>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <input onclick="toddleEncryptModel()" checked id="checked-checkbox"
                                            type="checkbox" value=""
                                            class="w-4 h-4 text-mainbody-600 bg-gray-100 border-gray-300 rounded focus:ring-mainbody-500 dark:focus:ring-mainbody-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checked-checkbox"
                                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Will You
                                            Encrypt?</label>
                                    </div>
                                    <div class="encrypt-model " id="encrypt-model">
                                        <div class="grid gap-6 mt-6 md:grid-cols-2">
                                            <div>
                                                <label for="encryption_key"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Encryption
                                                    Key</label>
                                                <select id="encryption_key"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                                    <option selected disabled>Select Encryption Key</option>
                                                    <option value="1">OJHSFHD837574@#$OJHFDSHF@#&$JC</option>
                                                    <option value="2">@#$FEH3454#sdf23746afnHASDU3rsd</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="encrypt_count"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Count</label>
                                                <input type="number" id="encrypt_count"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                                    placeholder="Max 100" required>
                                            </div>
                                        </div>
                                        {{-- <div>
                                            <button type="submit" class="content-end mt-2 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Generate</button>
                                        </div> --}}
                                    </div>
                                    <button type="submit"
                                        class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        var popupModel = document.getElementById('popup-model');
        var encryptModel = document.getElementById('encrypt-model');
        var encrypt = document.getElementById('checked-checkbox');
        var encryptCheck = document.getElementById('checked-checkbox').checked;

        function toddleEncryptModel() {
            encryptModel.classList.toggle('hidden');
        }

        function togglePopup() {
            popupModel.classList.toggle('hidden');
        }

        function hidePopup() {
            popupModel.classList.add('hidden');
        }
    </script>
@endsection
