<div class="fixed top-10 right-0 bottom-0 left-0 bg-black opacity-50">
</div>
<div class="flex items-center justify-center">
    <div class="p-10 bg-white text-black dark:bg-mainbody-800 dark:text-white relative rounded">
        <button class="absolute top-0 right-0 px-4 pt-4 " onclick="togglePopupEditModel()">
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>
        </button>
        <div>
            <h4 class="flex justify-center mb-4 font-semibold text-gray-500 dark:text-gray-100">Edit Admin Form
            </h4>

            <div class="mb-4 border-b border-gray-200 dark:border-mainbody-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                    data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="edit-profile-tab"
                            data-tabs-target="#edit-profile" type="button" role="tab" aria-controls="edit-profile"
                            aria-selected="false">Profile</button>
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
                            id="edit-job-tab" data-tabs-target="#edit-job" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false">job Description</button>
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
                    <div class="p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="edit-profile" role="tabpanel"
                        aria-labelledby="edit-profile-tab">
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="first_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                    name</label>
                                <input type="text" id="edit_first_name" name="first_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter First Name" required value="{{ $admin_user->first_name }}">
                                @if ($errors->has('email'))
                                    <span class="text-sm text-red-600 dark:text-red-500">{{ errors('message') }}</span>
                                @endif
                            </div>
                            <div>
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                    name</label>
                                <input type="text" id="edit_last_name" name="last_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter Last Name" required value="{{ $admin_user->last_name }}">
                            </div>
                            <div>
                                <label for="date_of_birth"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
                                    of
                                    Birth</label>
                                <input type="date" id="edit_date_of_birth" name="date_of_birth"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Date of Birth" required value="{{ $admin_user->date_of_birth }}">
                            </div>
                            <div>
                                <label for="nrc"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NRC</label>
                                <input type="text" id="edit_nrc" name="nrc"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter NRC" required value="{{ $admin_user->nrc }}">
                            </div>
                            <div>
                                <label for="gender"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                                <select id="edit_gender" name="gender"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                    <option selected disabled>Select Gender</option>
                                    <option value="male" @if ($admin_user->gender == 'male') selected @endif>Male
                                    </option>
                                    <option value="female" @if ($admin_user->gender == 'female') selected @endif>Female
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label for="nationality"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nationality</label>
                                <input type="text" id="edit_nationality" name="nationality"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter Nationality" required value="{{ $admin_user->nationality }}">
                            </div>
                            <div>
                                <label for="degree"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Degree</label>
                                <input type="text" id="edit_degree" name="degree"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter Degree" required value="{{ $admin_user->degree }}">
                            </div>
                            <div>
                                <label for="marital_status"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maritial
                                    Status</label>
                                <select id="edit_marital_status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                    <option selected disabled>Select Status</option>
                                    <option value="single" @if ($admin_user->marital_status == 'single') selected @endif>Single
                                    </option>
                                    <option value="married" @if ($admin_user->marital_status == 'married') selected @endif>Married
                                    </option>
                                    <option value="divorced" @if ($admin_user->marital_status == 'divorced') selected @endif>Divorced
                                    </option>
                                    <option value="widowed" @if ($admin_user->marital_status == 'widowed') selected @endif>Widowed
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- Contact --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="edit-contact"
                        role="tabpanel" aria-labelledby="edit-contact-tab">
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="phone_1"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                    1</label>
                                <input type="text" id="edit_phone_1" name="phone_1"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter Phone 1" required value="{{ $admin_user->phone_1 }}">
                            </div>
                            <div>
                                <label for="phone_2"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                    2</label>
                                <input type="text" id="edit_phone_2" name="phone_2"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter Phone 2" required value="{{ $admin_user->phone_2 }}">
                            </div>
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" id="edit_email" name="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter Email" required value="{{ $admin_user->email }}">
                            </div>
                            <div>
                                <label for="address"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                <input type="text" id="edit_address" name="address"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter Address" required value="{{ $admin_user->address }}">
                            </div>
                            <div>
                                <label for="city"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                <select id="edit_select_city" name="city_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                    <option selected disabled>Select City</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}"
                                            @if ($city->id == $admin_user->city_id) selected @endif>{{ $city->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="township"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Township</label>
                                <select id="edit_select_township"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                    <option selected disabled>Select Township</option>
                                    @foreach ($townships as $township)
                                        <option value="{{ $township->id }}"
                                            @if ($township->id == $admin_user->township_id) selected @endif>{{ $township->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- Family --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="edit-family"
                        role="tabpanel" aria-labelledby="edit-family-tab">
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="father_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father
                                    name</label>
                                <input type="text" id="edit__father_name" name="father_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter Father Name" required value="{{ $admin_user->father_name }}">
                            </div>
                            <div>
                                <label for="contact_phone"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact
                                    Phone</label>
                                <input type="text" id="edit__contact_phone" name="contact_phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter Contact Phone" required
                                    value="{{ $admin_user->contact_phone }}">
                            </div>
                        </div>
                    </div>
                    {{-- Job description --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="edit-job" role="tabpanel"
                        aria-labelledby="edit-job-tab">
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="start_date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                                    Date</label>
                                <input type="date" id="edit_start_date" name="start_date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter Start Date" required value="{{ $admin_user->start_date }}">
                            </div>
                            <div>
                                <label for="position"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                                <input type="text" id="edit_position" name="position"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter Position" required value="{{ $admin_user->position }}">
                            </div>
                        </div>
                        <div>
                            <label for="department_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                            <select id="edit_department_id" name="department_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                <option selected disabled>Select Department</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}"
                                        @if ($department->id == $admin_user->department_id) selected @endif>{{ $department->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="branch_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Branch</label>
                            <select id="edit_branch_id" name="branch_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                <option selected disabled>Select Branch</option>
                                @foreach ($branches as $branch)
                                    <option value="{{ $branch->id }}"
                                        @if ($branch->id == $admin_user->branch_id) selected @endif>{{ $branch->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- Account --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-800" id="edit-account"
                        role="tabpanel" aria-labelledby="edit-account-tab">
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="username"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                                    Name</label>
                                <input type="text" id="edit_username" name="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter Username" required value="{{ $admin_user->username }}">
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" disabled id="edit_password" name="password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter Password" required value="{{ $admin_user->password }}">
                            </div>
                        </div>

                    </div>
                    <button type="submit"
                        class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Submit</button>
            </div>
            </form>
        </div>
    </div>

</div>
</div>
