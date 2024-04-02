<div>
    <div class="fixed top-10 right-0 bottom-0 left-0 bg-black opacity-50">
    </div>
    <div class="flex items-center justify-center">
        <div class="p-10 bg-gray-50 text-black dark:bg-mainbody-900 dark:text-white relative rounded">
            <button class="absolute top-0 right-0 px-4 pt-4 " id="togglePopupViewModel">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </button>
            <div>
                <h1 class="flex justify-center mb-4 font-semibold text-gray-500 dark:text-gray-200 text-lg">Profile</h1>
                <div class=" dark:bg-mainbody-900">
                    <div class="container mx-auto py-8">
                        <div class="grid  sm:grid-cols-12 md:grid-cols-1 xl:grid-cols-12 gap-6 px-4">
                            {{-- left side --}}
                            <div class="col-span-4 sm:col-span-3 md:col-span-full xl:col-span-3">
                                <div class="bg-white dark:bg-mainbody-800 shadow rounded-lg p-6">
                                    <div class="flex flex-col items-center">
                                        <img src="" class="w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0">
                                        <h1 class="text-xl font-bold">{{$admin_user->full_name}}</h1>
                                        <p class="text-gray-700 dark:text-gray-300">{{$admin_user->position}}</p>
                                        <div class="mt-6 flex flex-wrap gap-4 justify-center">
                                            <p class="text-gray-700 dark:text-gray-300">{{$admin_user->branch->name}}
                                            </p>
                                            <p class="text-gray-700 dark:text-gray-300">
                                                {{$admin_user->department->name}}</p>
                                        </div>
                                    </div>
                                    <hr class="my-6 border-t border-gray-300">
                                    <div class="flex flex-col">
                                        <span
                                            class="text-gray-700 dark:text-gray-400 uppercase font-bold tracking-wider mb-2">Information</span>
                                        <ul>
                                            <li class="mb-2">
                                                <div class="grid mb-6  font-semibold text-gray-400">
                                                    <h5>Username</h5>
                                                    <h5>{{$admin_user->user_name}}</h5>
                                                    <div>
                                            </li>
                                            <li class="mb-2">
                                                <div class="grid mb-6  font-semibold text-gray-400 overflow-hidden">
                                                    <h5>Email</h5>
                                                    <h5>{{$admin_user->email}}</h5>
                                                    <div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- View Tab --}}
                            <div class="col-span-4 sm:col-span-9 md:col-span-full xl:col-span-9">
                                <div class="mb-4 border-b border-gray-200 dark:border-mainbody-700">
                                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                                        <li class="me-2" role="presentation">
                                            <button
                                                class="inline-block p-4 border-b-2 rounded-t-lg text-mainbody-400 border-mainbody-400 hover:text-mainbody-600 hover:border-mainbody-300 dark:hover:text-mainbody-300 "
                                                id="view-profile-tab" data-target="#view-profile"
                                                type="button">Profile</button>
                                        </li>
                                        <li class="me-2" role="presentation">
                                            <button
                                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-mainbody-600 hover:border-mainbody-300 dark:hover:text-mainbody-300 "
                                                id="view-contact-tab" data-target="#view-contact"
                                                type="button">Contact</button>
                                        </li>
                                        <li class="me-2" role="presentation">
                                            <button
                                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-mainbody-600 hover:border-mainbody-300 dark:hover:text-mainbody-300"
                                                id="view-job-tab" data-target="#view-job" type="button">Job & Account
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    {{-- Profile --}}
                                    <div class=" p-4 rounded-lg bg-gray-50 dark:bg-mainbody-900" id="view-profile"
                                        role="tabpanel" aria-labelledby="view-profile-tab">
                                        <div class="bg-white dark:bg-mainbody-800 shadow rounded-lg p-6">
                                            <div>
                                                <h2 class="text-xl font-bold mb-4">Profile</h2>
                                                <div>
                                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                        <div>
                                                            <label for="first_name"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                                                Name</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->first_name}} </h4>
                                                        </div>
                                                        <div>
                                                            <label for="last_name"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                                                Name</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->last_name}}</h4>
                                                        </div>
                                                        <div>
                                                            <label for="date_of_birth"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
                                                                Of Birth</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{date('d.m.Y',strToTime($admin_user->date_of_birth))}}
                                                            </h4>
                                                        </div>
                                                        <div>
                                                            <label for="nrc"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NRC</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->nrc}}</h4>
                                                        </div>
                                                        <div>
                                                            <label for="gender"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->gender}} </h4>
                                                        </div>
                                                        <div>
                                                            <label for="nationality"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nationality</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->nationality}}</h4>
                                                        </div>
                                                        <div>
                                                            <label for="degree"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Degree</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->degree ?? '-'}}
                                                            </h4>
                                                        </div>
                                                        <div>
                                                            <label for="marital_status"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marital
                                                                Status</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->marital_status}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Contact --}}
                                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-900" id="view-contact"
                                        role="tabpanel" aria-labelledby="view-contact-tab">
                                        <div class="bg-white dark:bg-mainbody-800 shadow rounded-lg p-6">
                                            <div>
                                                <h2 class="text-xl font-bold mb-4">Contact</h2>
                                                <div>
                                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                        <div>
                                                            <label for="phone_1"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                                                1</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->phone_1}}</h4>
                                                        </div>
                                                        <div>
                                                            <label for="phone_2"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                                                2</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->phone_2 ?? "-"}}</h4>
                                                        </div>
                                                        <div>
                                                            <label for="email"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->email}}</h4>
                                                        </div>
                                                        <div>
                                                            <label for="address"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->address}}</h4>
                                                        </div>
                                                        <div>
                                                            <label for="city"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->city->name}}</h4>
                                                        </div>
                                                        <div>
                                                            <label for="township"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Township</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->township->name}}</h4>
                                                        </div>
                                                        <div>
                                                            <label for="father_name"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father
                                                                name</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->father_name}}</h4>
                                                        </div>
                                                        <div>
                                                            <label for="contact_phone"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact
                                                                Phone</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->contact_phone ?? '-'}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Job description --}}
                                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-900" id="view-job"
                                        role="tabpanel" aria-labelledby="view-job-tab">
                                        <div class="bg-white dark:bg-mainbody-800 shadow rounded-lg p-6">
                                            <div>
                                                <h2 class="text-xl font-bold mb-4">Job Description</h2>
                                                <div>
                                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                        <div>
                                                            <label for="start_date"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                                                                Date</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->start_date}}</h4>
                                                        </div>
                                                        <div>
                                                            <label for="position"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->position}}</h4>
                                                        </div>
                                                        <div>
                                                            <label for="department"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->department->name}}
                                                            </h4>
                                                        </div>
                                                        <div>
                                                            <label for="branch"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Branch</label>
                                                            <h4
                                                                class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                                {{$admin_user->branch->name}}</h4>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label for="user_name"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                                        <h4
                                                            class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                            {{$admin_user->user_name}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>