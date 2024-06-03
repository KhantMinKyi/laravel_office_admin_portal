@extends('admins.layouts.layout')

@section('content')
    <div class="p-4  relative ">
        <section class=" dark:bg-mainbody-900 p-3 sm:p-5">
            <div class="mx-auto  px-4 lg:px-12">
                <div class="my-2 w-1/3">
                    <h3 class="text-xl font-semibold text-mainbody-300 dark:text-gray-100 ">Keys List</h3>
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
                            <a href="{{ route('key.create') }}" id="add-button"
                                class="flex items-center justify-center text-white bg-mainbody-300 hover:bg-mainbody-700 focus:ring-4 focus:ring-mainbody-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-mainbody-600 dark:hover:bg-mainbody-700 focus:outline-none dark:focus:ring-mainbody-800">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Add Key
                            </a>
                            {{-- <div class="flex items-center space-x-3 w-full md:w-auto">
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
                        </div> --}}
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        {{-- <span class="counter float-right font-semibold mr-2 my-2"></span> --}}
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 results">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-mainbody-700 dark:text-gray-200">
                                <tr>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Name</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Key</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Is Active</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Is Encrypted</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold text-end">
                                        <span class=" ">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($keys as $no => $key)
                                    <tr
                                        class="border-b dark:border-gray-700 hover:text-white hover:bg-mainbody-300 dark:hover:bg-mainbody-700 hover:cursor-pointer">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $key->name }}</th>
                                        <td class="px-4 py-3">
                                            <input type="text" name="" id="" value="{{ $key->key }}"
                                                class="bg-transparent border-none" disabled>
                                        </td>
                                        <td class="px-4 py-3">{{ $key->is_active }}</td>
                                        <td class="px-4 py-3">{{ $key->is_encrypted }}</td>
                                        <td class="px-4 py-3 flex items-center justify-end" data-id="{{ $key->id }}">
                                            {{-- view button --}}
                                            <a href="{{ route('key.show', ['key' => $key->id]) }}">
                                                <i
                                                    class="fa-regular fa-eye text-mainbody-100 hover:text-white  dark:text-mainbody-400 mr-1"></i>
                                            </a>
                                            {{-- view dot --}}
                                            <button id="apple-imac-{{ $key->id }}-dropdown-button"
                                                data-dropdown-toggle="apple-imac-{{ $key->id }}-dropdown"
                                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                                type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                </svg>
                                            </button>
                                            <div id="apple-imac-{{ $key->id }}-dropdown"
                                                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-mainbody-700 dark:divide-mainbody-600">
                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="apple-imac-27-dropdown-button">
                                                    {{-- <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white">Show</a>
                                        </li> --}}
                                                    <li>
                                                        <a href="{{ route('key.edit', ['key' => $key->id]) }}"
                                                            class=" w-full text-left block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white">Edit</a>
                                                    </li>
                                                </ul>
                                                {{-- <div class="py-1">
                                                    <form action="{{ route('key.destroy', ['key' => $key->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type='submit'
                                                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
                                                    </form>
                                                </div> --}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- {{ $salaries->links() }} --}}
                </div>
            </div>
        </section>
    </div>

    {{-- User Key Permission --}}
    <div class="p-4  relative ">
        <section class=" dark:bg-mainbody-900 p-3 sm:p-5">
            <div class="mx-auto  px-4 lg:px-12">
                <div class="my-2 w-1/3">
                    <h3 class="text-xl font-semibold text-mainbody-300 dark:text-gray-100 ">User Key Permissions List</h3>
                    <hr class=" h-px my-2 mb-4 bg-gray-200 border-0 dark:bg-mainbody-800">
                </div>
                <div class="bg-white dark:bg-mainbody-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div
                        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">

                        </div>
                        <div
                            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <a href="{{ route('key_permission.create') }}" id="add-button"
                                class="flex items-center justify-center text-white bg-mainbody-300 hover:bg-mainbody-700 focus:ring-4 focus:ring-mainbody-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-mainbody-600 dark:hover:bg-mainbody-700 focus:outline-none dark:focus:ring-mainbody-800">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Add Key Permission
                            </a>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        {{-- <span class="counter float-right font-semibold mr-2 my-2"></span> --}}
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 results">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-mainbody-700 dark:text-gray-200">
                                <tr>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Name</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">User Name</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Key</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Is Active</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Is Granded</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold text-end">
                                        <span class=" ">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($key_permissions as $key_permission_no => $key_permission)
                                    <tr
                                        class="border-b dark:border-gray-700 hover:text-white hover:bg-mainbody-300 dark:hover:bg-mainbody-700 hover:cursor-pointer">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $key_permission->key_description->name }}</th>
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $key_permission->user->first_name }}</th>
                                        <td class="px-4 py-3">
                                            <input type="password" name="" id=""
                                                value="{{ $key_permission->key }}" class="bg-transparent border-none"
                                                disabled>
                                        </td>
                                        <td class="px-4 py-3">{{ $key_permission->is_active }}</td>
                                        <td class="px-4 py-3">{{ $key_permission->is_granded }}</td>
                                        <td class="px-4 py-3 flex items-center justify-end"
                                            data-id="{{ $key_permission->id }}">
                                            {{-- view button --}}
                                            <a
                                                href="{{ route('key_permission.show', ['key_permission' => $key_permission->id]) }}">
                                                <i
                                                    class="fa-regular fa-eye text-mainbody-100 hover:text-white  dark:text-mainbody-400 mr-1"></i>
                                            </a>
                                            {{-- view dot --}}
                                            <button id="apple-imac-{{ $key_permission->id }}111-dropdown-button"
                                                data-dropdown-toggle="apple-imac-{{ $key_permission->id }}111-dropdown"
                                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                                type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                </svg>
                                            </button>
                                            <div id="apple-imac-{{ $key_permission->id }}111-dropdown"
                                                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-mainbody-700 dark:divide-mainbody-600">
                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="apple-imac-27-dropdown-button">
                                                    {{-- <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white">Show</a>
                                        </li> --}}
                                                    <li>
                                                        <a href="{{ route('key_permission.edit', ['key_permission' => $key_permission->id]) }}"
                                                            class=" w-full text-left block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white">Edit</a>
                                                    </li>
                                                </ul>
                                                {{-- <div class="py-1">
                                                    <form
                                                        action="{{ route('key_permission.destroy', ['key_permission' => $key_permission->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type='submit'
                                                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
                                                    </form>
                                                </div> --}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- {{ $salaries->links() }} --}}
                </div>
            </div>
        </section>
    </div>
@endsection
