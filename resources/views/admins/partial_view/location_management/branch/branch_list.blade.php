<?php
use App\Models\KeyPermission;
$encryption_keys = KeyPermission::where('user_id', Auth::user()->id)
    ->where('is_granded', 1)
    ->where('is_active', 1)
    ->get();
?>
<div class="bg-white dark:bg-mainbody-800 relative shadow-md sm:rounded-lg overflow-hidden">
    {{-- Search Bar --}}
    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">

        {{-- For City --}}
        <div>
            <select id="view_city_for_branch_encryption_key" name="view_city_for_branch_encryption_key"
                class="encryption_key bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                <option selected disabled>Select City Encryption Key</option>
                @foreach ($encryption_keys as $encryption_key)
                    <option value="{{ $encryption_key->key }}"
                        data-view_city_for_branch_encryption_key="{{ $encryption_key->key }}">
                        {{ $encryption_key->key_description->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="flex items-center space-x-3 w-full md:w-auto">
            <button id="actionsDropdownButtonBranchCity" data-dropdown-toggle="actionsDropdownBranchCity"
                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-mainbody-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-mainbody-800 dark:text-gray-400 dark:border-mainbody-600 dark:hover:text-white dark:hover:bg-mainbody-700"
                type="button">
                <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
                Actions
            </button>
            <div id="actionsDropdownBranchCity"
                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-mainbody-700 dark:divide-mainbody-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="actionsDropdownButtonBranchCity">
                    <li>
                        <a href="#" id="btnEncryptViewCityForBranch"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white"><i
                                class="fa-solid fa-key mr-2"></i> <i> Encrypt All</i> </a>
                    </li>
                </ul>
                <div class="py-1">
                    <a href="#" id="btnDecryptViewCityForBranch"
                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:text-gray-200 dark:hover:text-white">
                        <i class="fa-solid fa-lock-open mr-2"></i>
                        <i>Decrypt All</i></a>
                </div>
            </div>
        </div>
        {{-- For Township --}}
        <div>
            <select id="view_township_for_branch_encryption_key" name="view_township_for_branch_encryption_key"
                class="encryption_key bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                <option selected disabled>Select Township Encryption Key</option>
                @foreach ($encryption_keys as $encryption_key)
                    <option value="{{ $encryption_key->key }}"
                        data-view_township_for_branch_encryption_key="{{ $encryption_key->key }}">
                        {{ $encryption_key->key_description->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="flex items-center space-x-3 w-full md:w-auto">
            <button id="actionsDropdownButtonTownshipForBranch" data-dropdown-toggle="actionsDropdownTownshipForBranch"
                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-mainbody-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-mainbody-800 dark:text-gray-400 dark:border-mainbody-600 dark:hover:text-white dark:hover:bg-mainbody-700"
                type="button">
                <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
                Actions
            </button>
            <div id="actionsDropdownTownshipForBranch"
                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-mainbody-700 dark:divide-mainbody-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="actionsDropdownButtonTownshipForBranch">
                    <li>
                        <a href="#" id="btnEncryptViewTownshipForBranch"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white"><i
                                class="fa-solid fa-key mr-2"></i> <i> Encrypt All</i> </a>
                    </li>
                </ul>
                <div class="py-1">
                    <a href="#" id="btnDecryptViewTownshipForBranch"
                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:text-gray-200 dark:hover:text-white">
                        <i class="fa-solid fa-lock-open mr-2"></i>
                        <i>Decrypt All</i></a>
                </div>
            </div>
        </div>
        <div
            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
            <button type="button" id="add-button" onclick="togglePopupBranchAddModel()"
                class="flex items-center justify-center text-white bg-mainbody-300 hover:bg-mainbody-700 focus:ring-4 focus:ring-mainbody-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-mainbody-600 dark:hover:bg-mainbody-700 focus:outline-none dark:focus:ring-mainbody-800">
                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                </svg>
                Add Branch
            </button>

        </div>
    </div>
    {{-- Branch List --}}
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 results">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-mainbody-700 dark:text-gray-200">
                <tr>
                    <th scope="col" class="px-4 py-3 text-sm font-semibold">No</th>
                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Name</th>
                    <th scope="col" class="px-4 py-3 text-sm font-semibold">City</th>
                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Township</th>
                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Address</th>
                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Staffs</th>
                    <th scope="col" class="px-4 py-3 text-sm font-semibold text-end">
                        <span class=" ">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($branches as $branch_key => $branch)
                    <tr
                        class="border-b dark:border-gray-700 hover:text-white hover:bg-mainbody-300 dark:hover:bg-mainbody-700 hover:cursor-pointer">
                        <th scope="row"
                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $branch_key + 1 }}</th>
                        <td class="px-4 py-3">{{ $branch->name }}</td>
                        <td class="px-4 py-3 data_input_view_city_for_branch">{{ $branch->city->name }}</td>
                        <td class="px-4 py-3 data_input_view_township_for_branch">{{ $branch->township->name }}
                        </td>
                        <td class="px-4 py-3">
                            <Address>{{ $branch->address }}</Address>
                        </td>
                        <td class="px-4 py-3">{{ $branch->users->count() }}</td>
                        <td class="px-4 py-3 flex items-center justify-end">
                            {{-- view button --}}
                            <button onclick="togglePopupBranchViewModel({{ $branch->id }})">
                                <i
                                    class="fa-regular fa-eye text-mainbody-100 hover:text-white  dark:text-mainbody-400 mr-1"></i>
                            </button>
                            {{-- view dot --}}
                            <button id="branch-imac-{{ $branch_key }}-dropdown-button"
                                data-dropdown-toggle="branch-imac-{{ $branch_key }}-dropdown"
                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                            <div id="branch-imac-{{ $branch_key }}-dropdown"
                                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-mainbody-700 dark:divide-mainbody-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="branch-imac-27-dropdown-button">
                                    {{-- <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white">Show</a>
                                </li> --}}
                                    <li>
                                        <button
                                            class=" w-full text-left block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white"
                                            onclick="togglePopupBranchEditModel({{ $branch->id }})">Edit</button>
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
    {{-- Pagination --}}

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/js/admin/location_management/township/view_encryption_for_branch.js"></script>
<script src="/js/admin/location_management/city/view_encryption_for_branch.js"></script>
