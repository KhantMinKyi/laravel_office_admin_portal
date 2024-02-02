<form action="">
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-1">
        <div>
            <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
            <select id="city"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-600 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-800 dark:focus:border-mainbody-800">
                <option selected disabled>Select City</option>
                <option value="Yangon">Yangon</option>
                <option value="Mandalay">Mandalay</option>
            </select>
        </div>
    </div>
    <div class="grid gap-6 mb-6 md:grid-cols-1">
        <div>
            <label for="township_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Township
                Name</label>
            <input type="text" id="township_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600"
                placeholder="Enter Township Name" required>
        </div>
    </div>
    <button type="submit"
        class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Add
        Township</button>
</form>