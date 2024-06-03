@extends('admins.layouts.layout')

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
                    <h4 class="flex justify-center mb-4 font-semibold text-gray-500 dark:text-gray-100">Add Key Form
                    </h4>
                    {{-- Include Create Key Permission --}}
                    <form action="{{ route('key_permission.update', ['key_permission' => $key_permission->id]) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-6 mb-6 md:grid-cols-1">
                            <div>
                                <label for="user_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Name</label>
                                <select id="user_id" name="user_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                    <option selected disabled>Select User</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                            @if ($user->id == $key_permission->user->id) selected @endif>{{ $user->full_name }}
                                            ({{ $user->position }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="key_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Key Name</label>
                                <select id="key_id" name="key_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                                    <option selected disabled>Select Key</option>
                                    @foreach ($keys as $key)
                                        <option value="{{ $key->id }}" data-encrypted="{{ $key->key }}"
                                            @if ($key->id == $key_permission->key_description->id) selected @endif>
                                            {{ $key->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="key"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Encrypted
                                    Key</label>
                                <input type="text" name="key" id="key"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Encrypted Key" value="{{ $key_permission->key }}">

                            </div>
                            <div>
                                <label for="old_key"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Old
                                    Key</label>
                                <input type="text" name="old_key" id="old_key" disabled
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Encrypted Key" value="{{ $key_permission->key }}">

                            </div>
                            <div>
                                <label for="master_key"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Master Key</label>
                                <input type="text" name="master_key" id="master_key"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                                    placeholder="Enter Master For Encrypt Key">
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <a href="#" id="btnEncrypt"
                                class=" w-1/4  mt-6 text-black bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Encrypt
                                Key With Master Key</a>
                            <a href="#" id="btnDecrypt"
                                class=" w-1/4  mt-6 text-black bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Decrypt
                                Key With Master Key</a>
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-2 mt-6">
                            <div class="flex items-center">
                                <input name="is_granded" id="checked-checkbox-granded" type="checkbox"
                                    @if ($key_permission->is_granded == 1) checked @endif value="1"
                                    class="w-4 h-4 text-mainbody-600 bg-gray-100 border-gray-300 rounded focus:ring-mainbody-500 dark:focus:ring-mainbody-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox-granded"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Granded?</label>
                            </div>
                            <div class="flex items-center">
                                <input name="is_active" @if ($key_permission->is_active == 1) checked @endif
                                    id="checked-checkbox-active" type="checkbox" value="1"
                                    class="w-4 h-4 text-mainbody-600 bg-gray-100 border-gray-300 rounded focus:ring-mainbody-500 dark:focus:ring-mainbody-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox-active"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Active?</label>
                            </div>
                        </div>
                        <hr class="mt-10 dark:border-mainbody-600">
                        <button type="submit"
                            class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Edit
                            Key</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/admin/key_management/key_create.js"></script>
@endsection
