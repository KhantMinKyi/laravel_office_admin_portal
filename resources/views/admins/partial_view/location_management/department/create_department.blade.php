<?php
use App\Models\Branch;
use App\Models\City;
use App\Models\Township;
use App\Models\KeyPermission;
$encryption_keys = KeyPermission::where('user_id', Auth::user()->id)
    ->where('is_granded', 1)
    ->where('is_active', 1)
    ->get();
$cities = City::all();
$townships = Township::all();
$branches = Branch::all();
?>

<form action="{{ route('department.store') }}" method="POST">
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-1">
        <div>
            <label for="city_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
            <select name="city_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                <option selected disabled>Select City</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}" class="data_input_create_city_for_department">{{ $city->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    {{-- For City --}}
    <div class="encrypt-model " id="encrypt-model">
        <div class="grid gap-6 mt-6 md:grid-cols-2">
            <div>
                <label for="create_city_for_department_encryption_key"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Encryption
                    Key For City </label>
                <select id="create_city_for_department_encryption_key" name="create_city_for_department_encryption_key"
                    class="encryption_key bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                    {{-- <option selected disabled>Select Encryption Key</option> --}}
                    @foreach ($encryption_keys as $encryption_key)
                        <option value="{{ $encryption_key->key }}"
                            data-create_city_for_department_encryption_key="{{ $encryption_key->key }}">
                            {{ $encryption_key->key_description->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <a href="#" id="btnEncryptCreateCityForDepartment"
                    class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Encrypt</a>
                <a href="#" id="btnDecryptCreateCityForDepartment"
                    class=" float-right mt-6 mr-4 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Decrypt</a>
            </div>
        </div>
        {{-- <div>
            <button type="submit"
                class="content-end mt-2 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Generate</button>
        </div> --}}
    </div>
    <div class="grid gap-6 my-6 md:grid-cols-1">
        <div>
            <label for="township_id"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Township</label>
            <select name="township_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                <option selected disabled>Select Township</option>
                @foreach ($townships as $township)
                    <option value="{{ $township->id }}" class="data_input_create_township_for_department">
                        {{ $township->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    {{-- For Township --}}
    <div class="encrypt-model " id="encrypt-model">
        <div class="grid gap-6 mt-6 md:grid-cols-2">
            <div>
                <label for="create_township_for_department_encryption_key"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Encryption
                    Key For Township </label>
                <select id="create_township_for_department_encryption_key"
                    name="create_township_for_department_encryption_key"
                    class="encryption_key bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                    <option selected disabled>Select Encryption Key</option>
                    @foreach ($encryption_keys as $encryption_key)
                        <option value="{{ $encryption_key->key }}"
                            data-create_township_for_department_encryption_key="{{ $encryption_key->key }}">
                            {{ $encryption_key->key_description->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <a href="#" id="btnEncryptCreateTownshipForDepartment"
                    class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Encrypt</a>
                <a href="#" id="btnDecryptCreateTownshipForDepartment"
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
            <label for="branch_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Branch</label>
            <select name="branch_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                <option selected disabled>Select Branch</option>
                @foreach ($branches as $branch)
                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="grid gap-6 mb-6 md:grid-cols-1">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department
                Name</label>
            <input type="text" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                placeholder="Enter Department Name" required>
        </div>
    </div>
    <button type="submit"
        class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Add
        Department</button>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/js/admin/location_management/township/create_encryption_for_department.js"></script>
<script src="/js/admin/location_management/city/create_encryption_for_department.js"></script>
