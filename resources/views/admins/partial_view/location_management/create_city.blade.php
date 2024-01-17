<form action="">
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-1">
        <div>
        <label for="city_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City Name</label>
        <input type="text" id="city_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainbody-300 focus:border-mainbody-300 block w-full p-2.5 dark:bg-mainbody-700 dark:border-mainbody-800 dark:placeholder-mainbody-300 dark:text-white dark:focus:ring-mainbody-600 dark:focus:border-mainbody-600" placeholder="Enter City Name" required>
    </div>
</div>
<button type="submit" class=" float-right mt-6 text-white bg-mainbody-300 hover:bg-mainbody-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-mainbody-600 dark:hover:bg-mainbody-700 dark:focus:ring-mainbody-800">Add City</button>
</form>