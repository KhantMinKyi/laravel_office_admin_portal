@extends('users.layouts.layout')

@section('content')
    <div class=" fixed top-32 right-5 bottom-0 xl:left-72 md:left-1/4 overflow-y-auto" id="popup-model">
        <div class="fixed top-10 right-0 bottom-0 left-0 bg-black opacity-50">
        </div>
        <div class="flex items-center justify-center">
            <div class=" w-1/2 p-10 bg-white text-black dark:bg-mainbody-800 dark:text-white relative rounded">
                <a class="absolute top-0 right-0 px-4 pt-4 " href="javascript:history.back()">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                </a>
                <div>
                    <h4 class="flex justify-center mb-4 font-semibold text-gray-500 dark:text-gray-100">View Attendance Form
                    </h4>
                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                        <div>
                            <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                                Name</label>
                            <input disabled type="text" name="user_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                placeholder="Enter Description" value="{{ $attendance->user->full_name }}">
                        </div>
                        <div>
                            <label for="attendance"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Attendance Time</label>
                            <input disabled type="text" name="attendance"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                placeholder="Enter Attendance Time" required
                                value="{{ date('g:i a', strToTime($attendance->time)) }}">
                        </div>
                        <div>
                            <label for="attendance_date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Attendance Date</label>
                            <input disabled type="text" name="attendance_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                placeholder="Enter Description"
                                value="{{ date('d-m-Y', strToTime($attendance->attendance_date)) }}">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
