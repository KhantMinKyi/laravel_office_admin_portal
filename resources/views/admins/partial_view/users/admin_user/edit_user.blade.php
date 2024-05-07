<div class="mb-4 border-b border-gray-200 dark:border-mainbody-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
        data-tabs-toggle="#default-tab-content" role="tablist">
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="edit-profile-tab" data-tabs-target="#edit-profile"
                type="button" role="tab" aria-controls="edit-profile" aria-selected="false">Profile</button>
        </li>
        <li class="me-2" role="contact">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 "
                id="edit-contact-tab" data-tabs-target="#edit-contact" type="button" role="tab"
                aria-controls="dashboard" aria-selected="false">Contact</button>
        </li>
        <li class="me-2" role="family">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                id="edit-family-tab" data-tabs-target="#edit-family" type="button" role="tab"
                aria-controls="settings" aria-selected="false">Family</button>
        </li>
        <li role="job">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                id="edit-job-tab" data-tabs-target="#edit-job" type="button" role="tab" aria-controls="contacts"
                aria-selected="false">job Description</button>
        </li>
        <li role="account">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                id="edit-account-tab" data-tabs-target="#edit-account" type="button" role="tab"
                aria-controls="account" aria-selected="false">Account</button>
        </li>
    </ul>
</div>
<div id="default-tab-content">
    <form>
        {{-- Profile --}}
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="edit-profile" role="tabpanel"
            aria-labelledby="edit-profile-tab">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                        name</label>
                    <input type="text" id="edit_first_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter First Name" required>
                    @if ($errors->has('email'))
                        <span class="text-sm text-red-600 dark:text-red-500">{{ errors('message') }}</span>
                    @endif
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                        name</label>
                    <input type="text" id="edit_last_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Last Name" required>
                </div>
                <div>
                    <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
                        of
                        Birth</label>
                    <input type="date" id="edit_date_of_birth"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Date of Birth" required>
                </div>
                <div>
                    <label for="nrc"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NRC</label>
                    <input type="text" id="edit_nrc"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter NRC" required>
                </div>
                <div>
                    <label for="gender"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                    <select id="edit_gender"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                        <option selected disabled>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div>
                    <label for="nationality"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nationality</label>
                    <input type="text" id="edit_nationality"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Nationality" required>
                </div>
                <div>
                    <label for="degree"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Degree</label>
                    <input type="text" id="edit_degree"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Degree" required>
                </div>
                <div>
                    <label for="marital_status"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maritial
                        Status</label>
                    <select id="edit_marital_status"
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
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="edit-contact" role="tabpanel"
            aria-labelledby="edit-contact-tab">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="phone_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                        1</label>
                    <input type="text" id="edit_phone_1"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Phone 1" required>
                </div>
                <div>
                    <label for="phone_2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                        2</label>
                    <input type="text" id="edit_phone_2"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Phone 2" required>
                </div>
                <div>
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="edit_email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Email" required>
                </div>
                <div>
                    <label for="address"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <input type="text" id="edit_address"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Address" required>
                </div>
                <div>
                    <label for="city"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                    <select id="edit_select_city"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                        <option selected disabled>Select City</option>
                        <option value="Yangon">Yangon</option>
                        <option value="Mandalay">Mandalay</option>
                    </select>
                </div>
                <div>
                    <label for="township"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Township</label>
                    <select id="edit_select_township"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                        <option selected disabled>Select Township</option>
                        <option value="Tharkayta">Tharkayta</option>
                        <option value="thanlyin">Thanlyin</option>
                    </select>
                </div>
            </div>
        </div>
        {{-- Family --}}
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="edit-family" role="tabpanel"
            aria-labelledby="edit-family-tab">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="father_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father
                        name</label>
                    <input type="text" id="edit__father_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Father Name" required>
                </div>
                <div>
                    <label for="contact_phone"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact Phone</label>
                    <input type="text" id="edit__contact_phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Contact Phone" required>
                </div>
            </div>
        </div>
        {{-- Job description --}}
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="edit-job" role="tabpanel"
            aria-labelledby="edit-job-tab">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                        Date</label>
                    <input type="date" id="edit_start_date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Start Date" required>
                </div>
                <div>
                    <label for="position"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                    <input type="text" id="edit_position"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Position" required>
                </div>
            </div>
            <div>
                <label for="department_id"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                <select id="edit_department_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                    <option selected disabled>Select Department</option>
                    <option value="1">Yangon</option>
                    <option value="2">Mandalay</option>
                </select>
            </div>
            <div>
                <label for="branch_id"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Branch</label>
                <select id="edit_branch_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                    <option selected disabled>Select Branch</option>
                    <option value="1">Hlaing</option>
                    <option value="2">TharKayTa</option>
                </select>
            </div>
        </div>
        {{-- Account --}}
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="edit-account" role="tabpanel"
            aria-labelledby="edit-account-tab">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                        Name</label>
                    <input type="text" id="edit_username"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Username" required>
                </div>
                <div>
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="text" id="edit_password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Enter Password" required>
                </div>
            </div>
            <div class="flex items-center">
                <input onclick="toddleEncryptEditModel()" checked id="edit-checked-checkbox" type="checkbox"
                    value=""
                    class="w-4 h-4 text-mainbody-600 bg-gray-100 border-gray-300 rounded focus:ring-mainbody-500 dark:focus:ring-mainbody-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Will
                    You
                    Encrypt?</label>
            </div>
            <div class="encrypt-model " id="encrypt-edit-model">
                <div class="grid gap-6 mt-6 md:grid-cols-2">
                    <div>
                        <label for="encryption_key"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Encryption Key</label>
                        <select id="edit_encryption_key"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                            <option selected disabled>Select Encryption Key</option>
                            <option value="OJHSFHD837574@#$OJHFDSHF@#&$JC">Secure Code 1</option>
                            <option value="@#$FEH3454#sdf23746afnHASDU3rsd">Secure Code 2</option>
                        </select>
                    </div>
                    <div>
                        <label for="encrypt_count"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Count</label>
                        <input type="number" id="edit_encrypt_count"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                            placeholder="Max 100" required>
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
