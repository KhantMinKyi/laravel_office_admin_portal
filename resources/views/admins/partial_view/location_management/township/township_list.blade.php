<div class="bg-white dark:bg-mainbody-800 relative shadow-md sm:rounded-lg overflow-hidden">
    {{-- Search Bar --}}
    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
        <div class="w-full md:w-1/2">
            <form class="flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" id="simple-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-500 focus:border-mainbody-500 block w-full pl-10 p-2 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                        placeholder="Search" required="">
                </div>
            </form>
        </div>
        <div
            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
            <button type="button" id="add-button" onclick="togglePopupTownshipAddModel()"
                class="flex items-center justify-center text-white bg-mainbody-300 hover:bg-mainbody-700 focus:ring-4 focus:ring-mainbody-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-mainbody-600 dark:hover:bg-mainbody-700 focus:outline-none dark:focus:ring-mainbody-800">
                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                </svg>
                Add Township
            </button>

        </div>
    </div>
    {{-- Township List --}}
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-mainbody-700 dark:text-gray-200">
                <tr>
                    <th scope="col" class="px-4 py-3 text-sm font-semibold">No</th>
                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Name</th>
                    <th scope="col" class="px-4 py-3 text-sm font-semibold">City</th>
                    <th scope="col" class="px-4 py-3 text-sm font-semibold">Staffs</th>
                    <th scope="col" class="px-4 py-3 text-sm font-semibold text-end">
                        <span class=" ">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0 ; $i < 10 ; $i++) <tr
                    class="border-b dark:border-gray-700 hover:text-white hover:bg-mainbody-300 dark:hover:bg-mainbody-700 hover:cursor-pointer">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$i + 1}}</th>
                    <td class="px-4 py-3">Hlaing</td>
                    <td class="px-4 py-3">Yangon</td>
                    <td class="px-4 py-3">132</td>
                    <td class="px-4 py-3 flex items-center justify-end">
                        {{-- view button --}}
                        <button onclick="togglePopupTownshipViewModel({{$i}})">
                            <i
                                class="fa-regular fa-eye text-mainbody-100 hover:text-white  dark:text-mainbody-400 mr-1"></i>
                        </button>
                        {{-- view dot --}}
                        <button id="township-imac-{{$i}}-dropdown-button"
                            data-dropdown-toggle="township-imac-{{$i}}-dropdown"
                            class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                            type="button">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                        </button>
                        <div id="township-imac-{{$i}}-dropdown"
                            class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-mainbody-700 dark:divide-mainbody-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="township-imac-27-dropdown-button">
                                {{-- <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white">Show</a>
                                </li> --}}
                                <li>
                                    <button
                                        class=" w-full text-left block py-2 px-4 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:hover:text-white"
                                        onclick="togglePopupTownshipEditModel()">Edit</button>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-mainbody-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                            </div>
                        </div>
                    </td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
    {{-- Pagination --}}
    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
        aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
            Showing
            <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
            of
            <span class="font-semibold text-gray-900 dark:text-white">1000</span>
        </span>
        <ul class="inline-flex items-stretch -space-x-px">
            <li>
                <a href="#"
                    class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-mainbody-800 dark:border-mainbody-700 dark:text-gray-400 dark:hover:bg-mainbody-700 dark:hover:text-white">
                    <span class="sr-only">Previous</span>
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-mainbody-800 dark:border-mainbody-700 dark:text-gray-400 dark:hover:bg-mainbody-700 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-mainbody-800 dark:border-mainbody-700 dark:text-gray-400 dark:hover:bg-mainbody-700 dark:hover:text-white">2</a>
            </li>
            <li>
                <a href="#" aria-current="page"
                    class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-mainbody-700 dark:bg-mainbody-700 dark:text-white">3</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-mainbody-800 dark:border-mainbody-700 dark:text-gray-400 dark:hover:bg-mainbody-700 dark:hover:text-white">...</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-mainbody-800 dark:border-mainbody-700 dark:text-gray-400 dark:hover:bg-mainbody-700 dark:hover:text-white">100</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-mainbody-800 dark:border-mainbody-700 dark:text-gray-400 dark:hover:bg-mainbody-700 dark:hover:text-white">
                    <span class="sr-only">Next</span>
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </li>
        </ul>
    </nav>
</div>