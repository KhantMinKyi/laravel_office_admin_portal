<?php
use App\Models\KeyPermission;
$encryption_keys = KeyPermission::where('user_id', Auth::user()->id)
    ->where('is_granded', 1)
    ->where('is_active', 1)
    ->get();
?>
<div class="fixed top-10 right-0 bottom-0 left-0 bg-black opacity-50">
</div>
<div class="flex items-center justify-center">
    <div class="p-10 bg-white text-black dark:bg-mainbody-800 dark:text-white relative rounded ">
        <button class="absolute top-0 right-0 px-4 pt-4 " onclick="togglePopupDepartmentEditModel()">
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>
        </button>
        <div>
            <h4 class="flex justify-center mb-4 font-semibold text-gray-500 dark:text-gray-100">Edit Department Form
            </h4>
            <form action="{{ route('department.update', ['department' => $department->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="city_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                        <select name="city_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                            <option selected disabled>Select City</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}" @if ($city->id == $department->city_id) selected @endif
                                    class="data_input_edit_city_for_department">
                                    {{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- For City --}}
                <div class="encrypt-model " id="encrypt-model">
                    <div class="grid gap-6 mt-6 md:grid-cols-2">
                        <div>
                            <label for="edit_city_for_department_encryption_key"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Encryption
                                Key For City </label>
                            <select id="edit_city_for_department_encryption_key"
                                name="edit_city_for_department_encryption_key"
                                class="encryption_key bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                <option selected disabled>Select Encryption Key</option>
                                @foreach ($encryption_keys as $encryption_key)
                                    <option value="{{ $encryption_key->key }}"
                                        data-edit_city_for_department_encryption_key="{{ $encryption_key->key }}">
                                        {{ $encryption_key->key_description->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <a href="#" id="btnEncryptEditCityForDepartment"
                                class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Encrypt</a>
                            <a href="#" id="btnDecryptEditCityForDepartment"
                                class=" float-right mt-6 mr-4 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Decrypt</a>
                        </div>
                    </div>
                    {{-- <div>
                                        <button type="submit"
                                            class="content-end mt-2 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Generate</button>
                                    </div> --}}
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="township_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Township</label>
                        <select name="township_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                            <option selected disabled>Select Township</option>
                            @foreach ($townships as $township)
                                <option value="{{ $township->id }}" @if ($township->id == $department->township_id) selected @endif
                                    class="data_input_edit_township_for_department">
                                    {{ $township->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- For Township --}}
                <div class="encrypt-model " id="encrypt-model">
                    <div class="grid gap-6 mt-6 md:grid-cols-2">
                        <div>
                            <label for="edit_township_for_department_encryption_key"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Encryption
                                Key For Township </label>
                            <select id="edit_township_for_department_encryption_key"
                                name="edit_township_for_department_encryption_key"
                                class="encryption_key bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                <option selected disabled>Select Encryption Key</option>
                                @foreach ($encryption_keys as $encryption_key)
                                    <option value="{{ $encryption_key->key }}"
                                        data-edit_township_for_department_encryption_key="{{ $encryption_key->key }}">
                                        {{ $encryption_key->key_description->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <a href="#" id="btnEncryptEditTownshipForDepartment"
                                class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Encrypt</a>
                            <a href="#" id="btnDecryptEditTownshipForDepartment"
                                class=" float-right mt-6 mr-4 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Decrypt</a>
                        </div>
                    </div>
                    {{-- <div>
                                <button type="submit"
                                    class="content-end mt-2 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Generate</button>
                            </div> --}}
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="branch_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Branch</label>
                        <select name="branch_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                            <option selected disabled>Select Branch</option>
                            @foreach ($branches as $branch)
                                <option value="{{ $branch->id }}" @if ($branch->id == $department->branch_id) selected @endif>
                                    {{ $branch->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department
                            Name</label>
                        <input type="text" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                            placeholder="Enter Department Name" required value="{{ $department->name }}">
                    </div>
                </div>
                <button type="submit"
                    class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Add
                    Department</button>
            </form>
        </div>

    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/js/admin/location_management/township/edit_encryption_for_department.js"></script>
<script src="/js/admin/location_management/city/edit_encryption_for_department.js"></script>
