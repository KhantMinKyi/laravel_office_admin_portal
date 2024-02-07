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
                            <h1 class="text-xl font-bold">Khant Min Kyi</h1>
                            <p class="text-gray-700 dark:text-gray-300">Software Developer</p>
                            <div class="mt-6 flex flex-wrap gap-4 justify-center">
                                <p class="text-gray-700 dark:text-gray-300">Yangon Department</p>
                                <p class="text-gray-700 dark:text-gray-300">Hlaing Branch</p>
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
                                        <h5>khantminkyi</h5>
                                        <div>
                                </li>
                                <li class="mb-2">
                                    <div class="grid mb-6  font-semibold text-gray-400 overflow-hidden">
                                        <h5>Email</h5>
                                        <h5>khantminkyi@gmail.com</h5>
                                        <div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- View Tab --}}
                <div class="col-span-4 sm:col-span-9 md:col-span-full xl:col-span-9">
                    <div class="mb-4 border-b border-gray-200 dark:border-mainbody-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                            data-tabs-toggle="#default-tab-content" role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="view-profile-tab"
                                    data-tabs-target="#view-profile" type="button" role="tab"
                                    aria-controls="view-profile" aria-selected="false">Profile</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 "
                                    id="view-contact-tab" data-tabs-target="#view-contact" type="button" role="tab"
                                    aria-controls="dashboard" aria-selected="false">Contact</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="view-job-tab" data-tabs-target="#view-job" type="button" role="tab"
                                    aria-controls="settings" aria-selected="false">Job & Account </button>
                            </li>
                        </ul>
                    </div>
                    <div id="default-tab-content">
                        {{-- Profile --}}
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-900" id="view-profile"
                            role="tabpanel" aria-labelledby="view-profile-tab">
                            <div class="bg-white dark:bg-mainbody-800 shadow rounded-lg p-6">
                                <div>
                                    <h2 class="text-xl font-bold mb-4">Profile</h2>
                                    <div>
                                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                                    Name</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    Khant Min </h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                                    Name</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    Kyi </h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
                                                    Of Birth</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    1.1.1999</h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NRC</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    12/PABATA(N)036661</h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    Male </h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nationality</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    Myanmar</h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Degree</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">BE
                                                    IT</h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maritial
                                                    Status</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    Single</h4>
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
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    096543563421</h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                                    2</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    099675673435</h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    operation@gmail.com</h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    Yangon/Botahtaung</h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    Yangon</h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Township</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    Botahtaung</h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father
                                                    name</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">U
                                                    Ba</h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact
                                                    Phone</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    0953453768</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Job description --}}
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-900" id="view-job" role="tabpanel"
                            aria-labelledby="view-job-tab">
                            <div class="bg-white dark:bg-mainbody-800 shadow rounded-lg p-6">
                                <div>
                                    <h2 class="text-xl font-bold mb-4">Job Description</h2>
                                    <div>
                                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                                                    Date</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    12/12/2023</h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    Web Developer</h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">IT
                                                </h4>
                                            </div>
                                            <div>
                                                <label for="phone_1"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Branch</label>
                                                <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                    Yangon</h4>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="phone_1"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                            <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">
                                                khantminkyi</h4>
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