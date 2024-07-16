@extends('admins.layouts.layout')

@section('content')
    <div class="flex flex-row gap-10 justify-around mt-10 mx-2 flex-wrap">
        <div
            class=" px-12 py-6 bg-gray-50 shadow dark:bg-mainbody-700 text-gray-800 dark:text-gray-200 rounded-md text-center font-bold cursor-pointer hover:bg-gray-200 dark:hover:bg-mainbody-500">
            <h4 class="text-4xl">{{ $cities_count }}</h4>
            <h4 class="text-md font-medium my-1">City</h4>
            <i class="fa-solid fa-city "></i>
        </div>
        <div
            class=" px-12 py-6 bg-gray-50 shadow dark:bg-mainbody-700 text-gray-800 dark:text-gray-200 rounded-md text-center font-bold cursor-pointer hover:bg-gray-200 dark:hover:bg-mainbody-500">
            <h4 class="text-4xl">{{ $townships_count }}</h4>
            <h4 class="text-md font-medium my-1">Township</h4>
            <i class="fa-solid fa-tree-city "></i>
        </div>
        <div
            class=" px-12 py-6 bg-gray-50 shadow dark:bg-mainbody-700 text-gray-800 dark:text-gray-200 rounded-md text-center font-bold cursor-pointer hover:bg-gray-200 dark:hover:bg-mainbody-500">
            <h4 class="text-4xl">{{ $branches_count }}</h4>
            <h4 class="text-md font-medium my-1">Branch</h4>
            <i class="fa-solid fa-code-branch "></i>
        </div>
        <div
            class=" px-12 py-6 bg-gray-50 shadow dark:bg-mainbody-700 text-gray-800 dark:text-gray-200 rounded-md text-center font-bold cursor-pointer hover:bg-gray-200 dark:hover:bg-mainbody-500">
            <h4 class="text-4xl">{{ $departments_count }}</h4>
            <h4 class="text-md font-medium my-1">Department</h4>
            <i class="fa-solid fa-landmark-flag "></i>
        </div>
    </div>
    <script src="/js/admin/location_management.js"></script>
@endsection
