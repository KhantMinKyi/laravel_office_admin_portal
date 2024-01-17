@extends('admins.layouts.layout')

@section('content')
<div class="flex flex-row gap-10 justify-around mt-10 mx-2 flex-wrap">
    <div
        class=" px-12 py-6 bg-gray-50 shadow dark:bg-mainbody-700 text-gray-800 dark:text-gray-200 rounded-md text-center font-bold cursor-pointer hover:bg-gray-200 dark:hover:bg-mainbody-500">
        <h4 class="text-4xl">10</h4>
        <h4 class="text-md font-medium my-1">City</h4>
        <i class="fa-solid fa-city "></i>
    </div>
    <div
        class=" px-12 py-6 bg-gray-50 shadow dark:bg-mainbody-700 text-gray-800 dark:text-gray-200 rounded-md text-center font-bold cursor-pointer hover:bg-gray-200 dark:hover:bg-mainbody-500">
        <h4 class="text-4xl">122</h4>
        <h4 class="text-md font-medium my-1">Township</h4>
        <i class="fa-solid fa-tree-city "></i>
    </div>
    <div
        class=" px-12 py-6 bg-gray-50 shadow dark:bg-mainbody-700 text-gray-800 dark:text-gray-200 rounded-md text-center font-bold cursor-pointer hover:bg-gray-200 dark:hover:bg-mainbody-500">
        <h4 class="text-4xl">4</h4>
        <h4 class="text-md font-medium my-1">Department</h4>
        <i class="fa-solid fa-landmark-flag "></i>
    </div>
    <div
        class=" px-12 py-6 bg-gray-50 shadow dark:bg-mainbody-700 text-gray-800 dark:text-gray-200 rounded-md text-center font-bold cursor-pointer hover:bg-gray-200 dark:hover:bg-mainbody-500">
        <h4 class="text-4xl">57</h4>
        <h4 class="text-md font-medium my-1">Branch</h4>
        <i class="fa-solid fa-code-branch "></i>
    </div>
</div>
{{-- Admin user List table --}}
<div class="p-4  relative " wire:key='admin-user-list'>
    <section class=" dark:bg-mainbody-900 p-3 sm:p-5">
        <div class="mx-auto  px-4 lg:px-12">
            <!-- Table -->
            <div class="col-span-4 sm:col-span-9 md:col-span-full xl:col-span-9">
                <div class="mb-4 border-b border-gray-200 dark:border-mainbody-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                        data-tabs-toggle="#default-tab-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="view-city-tab"
                                data-tabs-target="#view-city" type="button" role="tab" aria-controls="view-city-tab"
                                aria-selected="false">City</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 "
                                id="view-township-tab" data-tabs-target="#view-township" type="button" role="tab"
                                aria-controls="dashboard" aria-selected="false">Township</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="view-department-tab" data-tabs-target="#view-department" type="button" role="tab"
                                aria-controls="settings" aria-selected="false">Department</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="view-branch-tab" data-tabs-target="#view-branch" type="button" role="tab"
                                aria-controls="settings" aria-selected="false">Branch</button>
                        </li>
                    </ul>
                </div>
                <div id="default-tab-content">
                    {{-- Profile --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-900" id="view-city" role="tabpanel"
                        aria-labelledby="view-city-tab">
                        @include('admins.partial_view.location_management.city_list')
                    </div>
                    {{-- Contact --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-900" id="view-township"
                        role="tabpanel" aria-labelledby="view-township-tab">
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
                                                admin@gmail.com</h4>
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
                                            <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">Yangon
                                            </h4>
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
                                            <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">U Ba
                                            </h4>
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
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-900" id="view-department"
                        role="tabpanel" aria-labelledby="view-department-tab">
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
                                            <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">Web
                                                Developer</h4>
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
                                            <h4 class=" bg-gray-100 dark:bg-mainbody-700 p-2 rounded font-medium">Yangon
                                            </h4>
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
                    {{-- Profile --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-900" id="view-branch" role="tabpanel"
                        aria-labelledby="view-branch-tab">
                        {{-- @include('admins.partial_view.location_management.city_list') --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('admins.location_management.include_model')
</div>
<script>
    var encryptModel = document.getElementById('encrypt-model');
        var encryptEditModel = document.getElementById('encrypt-edit-model');
        var encrypt = document.getElementById('checked-checkbox');
        var encryptCheck = document.getElementById('checked-checkbox').checked;
        function toddleEncryptModel(){
            encryptModel.classList.toggle('hidden');
        }
        function toddleEncryptEditModel(){
            encryptEditModel.classList.toggle('hidden');
        }
        // View Add Form For City
        function togglePopupCityAddModel() {
            var popupCityAddModel = document.getElementById('popup-city-add-model');
            popupCityAddModel.classList.toggle('hidden');
        }
        // View User at City
        function togglePopupCityViewModel(a) {
            var popupCityViewModel = document.getElementById('popup-city-view-model');
            popupCityViewModel.classList.toggle('hidden');
            
        }
        function togglePopupCityEditModel() {
            var popupCityEditModel = document.getElementById('popup-city-edit-model');
            popupCityEditModel.classList.toggle('hidden');
        }

</script>
@endsection