<div class="fixed top-10 right-0 bottom-0 left-0 bg-black opacity-50">
</div>
<div class="flex items-center justify-center">
    <div class="p-10 bg-gray-50 text-black dark:bg-mainbody-800 dark:text-white relative rounded">
        <div>
            <button class="absolute top-0 right-0 px-4 pt-4 " onclick="togglePopupCityViewModel()">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </button>
        </div>
        {{-- City User List --}}
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-mainbody-700 dark:text-gray-200">
                    <tr>
                        <th scope="col" class="px-4 py-3 text-sm font-semibold">No</th>
                        <th scope="col" class="px-4 py-3 text-sm font-semibold">Name</th>
                        <th scope="col" class="px-4 py-3 text-sm font-semibold">Position</th>
                        <th scope="col" class="px-4 py-3 text-sm font-semibold">Township</th>
                        <th scope="col" class="px-4 py-3 text-sm font-semibold">Branch</th>
                        <th scope="col" class="px-4 py-3 text-sm font-semibold">Department</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($city->users as $key => $city_user)
                        <tr
                            class="border-b dark:border-gray-700 hover:text-white hover:bg-mainbody-200 dark:hover:bg-mainbody-700 hover:cursor-pointer ">
                            <th scope="row"
                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $key + 1 }}</th>
                            <td class="px-4 py-5">{{ $city_user->full_name }}</td>
                            <td class="px-4 py-5">{{ $city_user->position }}</td>
                            <td class="px-4 py-5">{{ $city_user->township->name }}</td>
                            <td class="px-4 py-5">{{ $city_user->branch->name }}</td>
                            <td class="px-4 py-5">{{ $city_user->department->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- Pagination --}}

    </div>
</div>
