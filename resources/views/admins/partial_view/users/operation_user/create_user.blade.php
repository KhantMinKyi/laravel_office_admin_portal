<?php
use App\Models\KeyPermission;
$encryption_keys = KeyPermission::where('user_id', Auth::user()->id)
    ->where('is_granded', 1)
    ->where('is_active', 1)
    ->get();
?>
<div class="mb-4 border-b border-gray-200 dark:border-mainbody-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
        data-tabs-toggle="#default-tab-content" role="tablist">
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile"
                type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
        </li>
        <li class="me-2" role="presentation">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 "
                id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                aria-selected="false">Contact</button>
        </li>
        <li class="me-2" role="presentation">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                aria-selected="false">Family</button>
        </li>
        <li role="presentation">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                aria-selected="false">job Description</button>
        </li>
        <li role="account">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                id="account-tab" data-tabs-target="#account" type="button" role="tab" aria-controls="account"
                aria-selected="false">Account</button>
        </li>
    </ul>
</div>
<div id="default-tab-content">
    <form method="post" action="{{ url('/admin/operation_user_list/store-operation_user') }}">
        @csrf
        {{-- Profile --}}
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="profile" role="tabpanel"
            aria-labelledby="profile-tab">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                        name</label>
                    <input type="text" id="first_name" name="first_name"
                        class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter First Name" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                        name</label>
                    <input type="text" id="last_name" name="last_name"
                        class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Last Name" required>
                </div>
                <div>
                    <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
                        of
                        Birth</label>
                    <input type="text" id="date_of_birth" name="date_of_birth"
                        class="data_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Date of Birth" required>
                </div>
                <div>
                    <label for="nrc"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NRC</label>
                    <input type="text" id="nrc" name="nrc"
                        class="data_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter NRC" required>
                </div>
                <div>
                    <label for="gender"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                    {{-- <select id="gender" name="gender"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                        <option selected disabled>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select> --}}
                    <input type="text" id="gender" name="gender"
                        class="data_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Gender" required>
                </div>
                <div>
                    <label for="nationality"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nationality</label>
                    <input type="text" id="nationality" name="nationality"
                        class="data_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Nationality" required>
                </div>
                <div>
                    <label for="degree"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Degree</label>
                    <input type="text" id="degree" name="degree"
                        class="data_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Degree" required>
                </div>
                <div>
                    <label for="marital_status"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maritial
                        Status</label>
                    {{-- <select id="marital_status" name='marital_status'
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                        <option selected disabled>Select Status</option>
                        <option value="single" class="p-4">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select> --}}
                    <input type="text" id="marital_status" name="marital_status"
                        class="data_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Yout Marital Status" required>
                </div>
            </div>
        </div>
        {{-- Contact --}}
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="dashboard" role="tabpanel"
            aria-labelledby="dashboard-tab">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="phone_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                        1</label>
                    <input type="text" id="phone_1" name="phone_1"
                        class="data_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Phone 1" required>
                </div>
                <div>
                    <label for="phone_2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                        2</label>
                    <input type="text" id="phone_2" name="phone_2"
                        class="data_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Phone 2" required>
                </div>
                <div>
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="text" id="email" name="email"
                        class="data_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Email" required>
                </div>
                <div>
                    <label for="address"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <input type="text" id="address" name="address"
                        class="data_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Address" required>
                </div>
                <div>
                    <label for="city_id"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                    <select id="city_id" name="city_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                        <option selected disabled>Select City</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}" class="data_input_create_city_for_admin">
                                {{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="township_id"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Township</label>
                    <select id="township_id" name="township_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                        <option selected disabled>Select Township</option>
                        @foreach ($townships as $township)
                            <option value="{{ $township->id }}" class="data_input_create_township_for_admin">
                                {{ $township->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- For City --}}
            <div class="encrypt-model " id="encrypt-model">
                <div class="grid gap-6 mt-6 md:grid-cols-2">
                    <div>
                        <label for="create_city_for_admin_encryption_key"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Encryption
                            Key For City </label>
                        <select id="create_city_for_admin_encryption_key" name="create_city_for_admin_encryption_key"
                            class="encryption_key bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                            {{-- <option selected disabled>Select Encryption Key</option> --}}
                            @foreach ($encryption_keys as $encryption_key)
                                <option value="{{ $encryption_key->key }}"
                                    data-create_city_for_admin_encryption_key="{{ $encryption_key->key }}">
                                    {{ $encryption_key->key_description->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <a href="#" id="btnEncryptCreateCityForAdmin"
                            class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Encrypt</a>
                        <a href="#" id="btnDecryptCreateCityForAdmin"
                            class=" float-right mt-6 mr-4 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Decrypt</a>
                    </div>
                </div>
            </div>
            {{-- For Township --}}
            <div class="encrypt-model " id="encrypt-model">
                <div class="grid gap-6 mt-6 md:grid-cols-2">
                    <div>
                        <label for="create_township_for_admin_encryption_key"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Encryption
                            Key For Township </label>
                        <select id="create_township_for_admin_encryption_key"
                            name="create_township_for_admin_encryption_key"
                            class="encryption_key bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                            <option selected disabled>Select Encryption Key</option>
                            @foreach ($encryption_keys as $encryption_key)
                                <option value="{{ $encryption_key->key }}"
                                    data-create_township_for_admin_encryption_key="{{ $encryption_key->key }}">
                                    {{ $encryption_key->key_description->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <a href="#" id="btnEncryptCreateTownshipForAdmin"
                            class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Encrypt</a>
                        <a href="#" id="btnDecryptCreateTownshipForAdmin"
                            class=" float-right mt-6 mr-4 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Decrypt</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Family --}}
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="settings" role="tabpanel"
            aria-labelledby="settings-tab">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="father_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father
                        name</label>
                    <input type="text" id="father_name" name="father_name"
                        class="data_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Father Name" required>
                </div>
                <div>
                    <label for="contact_phone"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact Phone</label>
                    <input type="text" id="contact_phone" name="contact_phone"
                        class="data_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Contact Phone" required>
                </div>
            </div>
        </div>
        {{-- Job description --}}
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="contacts" role="tabpanel"
            aria-labelledby="contacts-tab">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                        Date</label>
                    <input type="text" id="start_date" name="start_date"
                        class="data_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Start Date" required>
                </div>
                <div>
                    <label for="position"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                    <input type="text" id="position" name="position"
                        class="data_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Start Date" required>
                </div>
            </div>
            <div>
                <label for="department_id"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                <select id="department_id" name="department_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                    <option selected disabled>Select Department</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}
                            ({{ $department->branch->name }})
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="branch_id"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Branch</label>
                <select id="branch_id" name="branch_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                    <option selected disabled>Select Branch</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        {{-- Account --}}
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="account" role="tabpanel"
            aria-labelledby="account-tab">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                        Name</label>
                    <input type="text" id="username" name="username"
                        class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Username" required>
                    @error('username')
                        <span class="text-sm text-red-600 dark:text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" name="password"
                        class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Password" required>
                </div>
            </div>
            <div class="flex items-center">
                <input onclick="toddleEncryptModel()" checked id="checked-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-mainbody-600 bg-gray-100 border-gray-300 rounded focus:ring-mainbody-500 dark:focus:ring-mainbody-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Will
                    You
                    Encrypt?</label>
            </div>
            <div class="encrypt-model " id="encrypt-model">
                <div class="grid gap-6 mt-6 md:grid-cols-2">
                    <div>
                        <label for="create_encryption_key"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Encryption Key</label>
                        <select id="create_encryption_key" name="create_encryption_key"
                            class="encryption_key bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                            <option selected disabled>Select Encryption Key</option>
                            @foreach ($encryption_keys as $encryption_key)
                                <option value="{{ $encryption_key->key }}"
                                    data-create_encryption_key="{{ $encryption_key->key }}">
                                    {{ $encryption_key->key_description->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <a href="#" id="btnEncryptCreate"
                            class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Encrypt</a>
                        <a href="#" id="btnDecryptCreate"
                            class=" float-right mt-6 mr-4 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Decrypt</a>
                    </div>
                </div>
                {{-- <div>
                    <button type="submit"
                        class="content-end mt-2 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Generate</button>
                </div> --}}
            </div>
            <button type="submit"
                class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Submit</button>
        </div>
    </form>
</div>
