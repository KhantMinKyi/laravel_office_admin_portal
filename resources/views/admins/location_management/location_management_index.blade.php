@extends('admins.layouts.layout')

@section('content')
<div class="flex flex-row gap-10 justify-around mt-10 mx-2 flex-wrap">
    <div
        class=" px-12 py-6 bg-gray-50 shadow dark:bg-mainbody-700 text-gray-800 dark:text-gray-200 rounded-md text-center font-bold cursor-pointer hover:bg-gray-200 dark:hover:bg-mainbody-500">
        <h4 class="text-4xl">{{$city_count}}</h4>
        <h4 class="text-md font-medium my-1">City</h4>
        <i class="fa-solid fa-city "></i>
    </div>
    <div
        class=" px-12 py-6 bg-gray-50 shadow dark:bg-mainbody-700 text-gray-800 dark:text-gray-200 rounded-md text-center font-bold cursor-pointer hover:bg-gray-200 dark:hover:bg-mainbody-500">
        <h4 class="text-4xl">{{$township_count}}</h4>
        <h4 class="text-md font-medium my-1">Township</h4>
        <i class="fa-solid fa-tree-city "></i>
    </div>
    <div
        class=" px-12 py-6 bg-gray-50 shadow dark:bg-mainbody-700 text-gray-800 dark:text-gray-200 rounded-md text-center font-bold cursor-pointer hover:bg-gray-200 dark:hover:bg-mainbody-500">
        <h4 class="text-4xl">57</h4>
        <h4 class="text-md font-medium my-1">Branch</h4>
        <i class="fa-solid fa-code-branch "></i>
    </div>
    <div
        class=" px-12 py-6 bg-gray-50 shadow dark:bg-mainbody-700 text-gray-800 dark:text-gray-200 rounded-md text-center font-bold cursor-pointer hover:bg-gray-200 dark:hover:bg-mainbody-500">
        <h4 class="text-4xl">4</h4>
        <h4 class="text-md font-medium my-1">Department</h4>
        <i class="fa-solid fa-landmark-flag "></i>
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
                                id="view-branch-tab" data-tabs-target="#view-branch" type="button" role="tab"
                                aria-controls="settings" aria-selected="false">Branch</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="view-department-tab" data-tabs-target="#view-department" type="button" role="tab"
                                aria-controls="settings" aria-selected="false">Department</button>
                        </li>
                    </ul>
                </div>
                <div id="default-tab-content">
                    {{-- City --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-900" id="view-city" role="tabpanel"
                        aria-labelledby="view-city-tab">
                        @include('admins.partial_view.location_management.city.city_list')
                    </div>
                    {{-- Township --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-900" id="view-township"
                        role="tabpanel" aria-labelledby="view-township-tab">
                        @include('admins.partial_view.location_management.township.township_list')
                    </div>
                    {{-- Branch --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-900" id="view-branch" role="tabpanel"
                        aria-labelledby="view-branch-tab">
                        @include('admins.partial_view.location_management.branch.branch_list')
                    </div>
                    {{-- Department --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-mainbody-900" id="view-department"
                        role="tabpanel" aria-labelledby="view-department-tab">
                        @include('admins.partial_view.location_management.department.department_list')

                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('admins.location_management.include_city_model')
    @include('admins.location_management.include_township_model')
    @include('admins.location_management.include_department_model')
    @include('admins.location_management.include_branch_model')
</div>
<script src="/js/admin/location_management.js"></script>
@endsection