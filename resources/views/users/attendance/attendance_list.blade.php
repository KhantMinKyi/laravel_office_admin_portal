@extends('users.layouts.layout')

@section('content')
    {{-- Attendance  List table --}}
    <div class="p-4  relative ">
        <section class=" dark:bg-mainbody-900 p-3 sm:p-5">
            <div class="mx-auto  px-4 lg:px-12">
                <div class="my-2 w-1/3">
                    <h3 class="text-xl font-semibold text-mainbody-300 dark:text-gray-100 ">Attendance List</h3>
                    <hr class=" h-px my-2 mb-4 bg-gray-200 border-0 dark:bg-mainbody-800">
                </div>
                <div class="bg-white dark:bg-mainbody-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div
                        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search"
                                        class="search bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-500 focus:border-mainbody-500 block w-full pl-10 p-2 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                        placeholder="Search" required="">
                                </div>
                            </form>
                        </div>
                        {{-- Select Month --}}
                        <form action="{{ route('users.user_attendance') }}" method="GET"
                            class="flex justify-between items-center space-x-2">
                            <div>
                                <select id="month" name="month"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                    <option selected value="">Select Month</option>
                                    @foreach ($lastSixMonth as $month)
                                        <option value="{{ $month }}"
                                            @if ($month == $requestMonth) selected @endif>{{ $month }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div
                                class="w-1/2 md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                <button type="submit" id="search-button"
                                    class="flex items-center justify-center text-white bg-teal-300 hover:bg-teal-700 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-teal-600 dark:hover:bg-teal-700 focus:outline-none dark:focus:ring-teal-800">
                                    Search
                                </button>
                            </div>
                        </form>
                        <div
                            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <a href="{{ route('user_attendance.create') }}" id="add-button"
                                class="flex items-center justify-center text-white bg-mainbody-300 hover:bg-mainbody-700 focus:ring-4 focus:ring-mainbody-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-mainbody-600 dark:hover:bg-mainbody-700 focus:outline-none dark:focus:ring-mainbody-800">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Add Your Attendance
                            </a>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 results">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-mainbody-700 dark:text-gray-200">
                                <tr>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Name</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Time</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Date</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold text-end">
                                        <span class=" ">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($attendances as $key => $attendance)
                                    <tr
                                        class="border-b dark:border-gray-700 hover:text-white hover:bg-mainbody-300 dark:hover:bg-mainbody-700 hover:cursor-pointer">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $attendance->user->full_name }}</th>
                                        <td class="px-4 py-3">{{ date('g:i a', strToTime($attendance->time)) }}</td>
                                        <td class="px-4 py-3">{{ date('d-m-Y', strToTime($attendance->attendance_date)) }}
                                        </td>
                                        <td class="px-4 py-3 flex items-center justify-end" data-id="{{ $attendance->id }}">
                                            {{-- view button --}}
                                            <a
                                                href="{{ route('user_attendance.show', ['user_attendance' => $attendance->id]) }}">
                                                <i
                                                    class="fa-regular fa-eye text-mainbody-100 hover:text-white  dark:text-mainbody-400 mr-1"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- {{ $salaries->links() }} --}}
                </div>
            </div>
        </section>
    </div>
@endsection
