@php
    $layout = Auth::user()->user_type == 'admin' ? 'admins.layouts.layout' : 'users.layouts.layout';
@endphp
@extends($layout)

@section('content')
    {{-- Salary  List table --}}
    <?php
    use App\Models\KeyPermission;
    $encryption_keys = KeyPermission::where('user_id', Auth::user()->id)
        ->where('is_granded', 1)
        ->where('is_active', 1)
        ->get();
    // $test1 = 'hello';
    // $test2 = 'hello2';
    // $test3 = $test1 + $test2;
    ?>
    <div class="p-4  relative ">
        <section class=" dark:bg-mainbody-900 p-3 sm:p-5">
            <div class="mx-auto  px-4 lg:px-12">
                <div class="my-2 w-1/3">
                    <h3 class="text-xl font-semibold text-mainbody-300 dark:text-gray-100 ">Salary List</h3>
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
                        @if (Auth::user()->user_type == 'admin')
                            <form action="{{ route('users.admin_salary_list') }}" method="GET"
                                class="flex justify-between items-center space-x-2">
                            @else
                                <form action="{{ route('users.user_salary_list') }}" method="GET"
                                    class="flex justify-between items-center space-x-2">
                        @endif
                        <div>
                            <select id="month" name="month"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                <option selected value="">Select Month</option>
                                @foreach ($lastSixMonth as $month)
                                    <option value="{{ $month }}">{{ $month }}</option>
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
                        <div>
                            <select id="view_encryption_key" name="view_encryption_key"
                                class="encryption_key bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                <option selected disabled>Select Encryption Key</option>
                                @foreach ($encryption_keys as $encryption_key)
                                    <option value="{{ $encryption_key->key }}"
                                        data-view_encryption_key="{{ $encryption_key->key }}">
                                        {{ $encryption_key->key_description->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown"
                                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-mainbody-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-mainbody-800 dark:text-gray-400 dark:border-mainbody-600 dark:hover:text-white dark:hover:bg-mainbody-700"
                                type="button">
                                <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                </svg>
                                Actions
                            </button>
                            <div id="actionsDropdown"
                                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-mainbody-700 dark:divide-mainbody-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="actionsDropdownButton">
                                    <li>
                                        <a href="#" id="btnEncryptView"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white"><i
                                                class="fa-solid fa-key mr-2"></i> <i> Encrypt All</i> </a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#" id="btnDecryptView"
                                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:text-gray-200 dark:hover:text-white">
                                        <i class="fa-solid fa-lock-open mr-2"></i>
                                        <i>Decrypt All</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 results">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-mainbody-700 dark:text-gray-200">
                                <tr>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Name</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">User Name</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Salary</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Date</th>
                                    <th scope="col" class="px-4 py-3 text-sm font-semibold text-end">
                                        <span class=" ">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($salaries as $key => $salary)
                                    <tr
                                        class="border-b dark:border-gray-700 hover:text-white hover:bg-mainbody-300 dark:hover:bg-mainbody-700 hover:cursor-pointer">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $salary->user->full_name }}</th>
                                        <td class="px-4 py-3">{{ $salary->user->username }}</td>
                                        <td class="data_input_view px-4 py-3">{{ $salary->salary }}</td>
                                        <td class="px-4 py-3">{{ $salary->pay_date }}</td>
                                        <td class="px-4 py-3 flex items-center justify-end" data-id="{{ $salary->id }}">
                                            {{-- view button --}}
                                            @if (Auth::user()->user_type == 'admin')
                                                <a href="{{ route('salary.show', ['salary' => $salary->id]) }}">
                                                    <i
                                                        class="fa-regular fa-eye text-mainbody-100 hover:text-white  dark:text-mainbody-400 mr-1"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('users.salary_detail', ['id' => $salary->id]) }}">
                                                    <i
                                                        class="fa-regular fa-eye text-mainbody-100 hover:text-white  dark:text-mainbody-400 mr-1"></i>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    @php
                                        // $total += $salary->salary;
                                    @endphp
                                @endforeach
                                <tr>
                                    <td class="px-4 py-3"></td>
                                    <td class="px-4 py-3 font-bold dark:text-white">Total</td>
                                    <td class="total px-4 py-3 font-bold dark:text-white">{{ $total }} Kyats</td>
                                    <td class="px-4 py-3"></td>
                                    <td class="px-4 py-3"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- {{ $salaries->links() }} --}}
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/admin/view_encryption.js"></script>
    <script>
        $(document).on('click', '#btnDecryptView', function() {

            var total = 0;
            $(".data_input_view").each(function(index) {
                var value = parseFloat($(this).text());
                total += value;
            });
            $('.total').text(total + ' Kyat');
        });
    </script>
@endsection
