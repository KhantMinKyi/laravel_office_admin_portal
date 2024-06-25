@extends('admins.layouts.layout')

@section('content')
    <?php
    // session(['error' => 'This is Error']);
    ?>
    {{-- Admin User List table --}}
    <div class="p-4  relative " wire:key='admin-user-list'>
        <section class=" dark:bg-mainbody-900 p-3 sm:p-5">
            <div class="mx-auto  px-4 lg:px-12">
                <div class="my-2 w-1/3">
                    <h3 class="text-xl font-semibold text-mainbody-300 dark:text-gray-100 ">Admin List</h3>
                    <hr class=" h-px my-2 mb-4 bg-gray-200 border-0 dark:bg-mainbody-800">
                </div>
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
                                        class="search bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-500 focus:border-mainbody-500 block w-full pl-10 p-2 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
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
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white"><i
                                                    class="fa-solid fa-key mr-2"></i> <i> Encrypt All</i> </a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="#"
                                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:text-gray-200 dark:hover:text-white">
                                            <i class="fa-solid fa-lock-open mr-2"></i>
                                            <i>Decrypt All</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 results">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-mainbody-700 dark:text-gray-200">
                                <tr>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Name</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">User Name</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Email</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Department</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Position</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold text-end">
                                        <span class=" ">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admin_users as $key => $admin_user)
                                    <tr
                                        class="border-b dark:border-gray-700 hover:text-white hover:bg-mainbody-300 dark:hover:bg-mainbody-700 hover:cursor-pointer">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $admin_user->full_name }}</th>
                                        <td class="px-4 py-3">{{ $admin_user->username }}</td>
                                        <td class="px-4 py-3">{{ $admin_user->email }}</td>
                                        <td class="px-4 py-3">{{ $admin_user->department->name }}</td>
                                        <td class="px-4 py-3">{{ $admin_user->position }}</td>
                                        <td class="px-4 py-3 flex items-center justify-end" data-id="{{ $admin_user->id }}">
                                            {{-- view button --}}
                                            <button id="togglePopupViewModel">
                                                <i
                                                    class="fa-regular fa-eye text-mainbody-100 hover:text-white  dark:text-mainbody-400 mr-1"></i>
                                            </button>
                                            {{-- view dot --}}
                                            <button id="apple-imac-{{ $key }}-dropdown-button"
                                                data-dropdown-toggle="apple-imac-{{ $key }}-dropdown"
                                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                                type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                </svg>
                                            </button>
                                            <div id="apple-imac-{{ $key }}-dropdown"
                                                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-mainbody-700 dark:divide-mainbody-600">
                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="apple-imac-27-dropdown-button">
                                                    {{-- <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white">Show</a>
                                            </li> --}}
                                                    <li>
                                                        <button
                                                            class=" w-full text-left block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white"
                                                            onclick="togglePopupEditModel({{ $admin_user->id }})">Edit</button>
                                                    </li>
                                                </ul>
                                                <div class="py-1">
                                                    <a href="#"
                                                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $admin_users->links() }}
                </div>
            </div>
        </section>
        {{-- Popup Model --}}
        <div class="hidden fixed top-32 right-5 bottom-0 xl:left-72 md:left-1/4 overflow-y-auto" id="popup-model">
            <div class="fixed top-10 right-0 bottom-0 left-0 bg-black opacity-50">
            </div>
            <div class="flex items-center justify-center">
                <div class="p-10 bg-white text-black dark:bg-mainbody-800 dark:text-white relative rounded">
                    <button class="absolute top-0 right-0 px-4 pt-4 " onclick="togglePopup()">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                    <div>
                        <h4 class="flex justify-center mb-4 font-semibold text-gray-500 dark:text-gray-100">Add Admin Form
                        </h4>
                        {{-- Include Create User --}}
                        @include('admins.partial_view.users.admin_user.create_user')
                    </div>

                </div>
            </div>
        </div>
        {{-- Popup View Model --}}
        <div class="hidden fixed top-32 right-5 bottom-0 xl:left-72 md:left-1/4 overflow-y-auto" id="popup-view-model">
        </div>
        {{-- Popup Edit Model --}}
        <div class="hidden fixed top-32 right-5 bottom-0 xl:left-72 md:left-1/4 overflow-y-auto" id="popup-edit-model">

            {{-- Include Edit User --}}
            {{-- @include('admins.partial_view.users.admin_user.edit_user') --}}

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/admin/user/admin_user.js"></script>
    <script src="/js/admin/view_encryption.js"></script>
    <script src="/js/admin/create_encryption.js"></script>
    <script src="/js/admin/edit_encryption.js"></script>
    <script src="/js/admin/location_management/city/create_encryption_for_admin.js"></script>
    <script src="/js/admin/location_management/township/create_encryption_for_admin.js"></script>
    <script src="/js/admin/location_management/township/edit_encryption_for_admin.js"></script>
    <script src="/js/admin/location_management/city/edit_encryption_for_admin.js"></script>
    <script src="/js/admin/location_management/township/view_encryption_for_admin.js"></script>
    <script src="/js/admin/location_management/city/view_encryption_for_admin.js"></script>
@endsection
