@extends('layouts.login_layout')
@section('content')
    <div class="p-4">
        <div class="flex items-center justify-center min-h-screen bg-violet-400">
            <div
              class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0 overflow-hidden"
            >
              <!-- ===============left column==================================== -->
              <div class="flex flex-col justify-center p-8 md:p-14 basis-6/12">
                <div class="flex flex-row justify-center items-center mb-3">
                  <span class="ms-1 text-4xl font-bold font-serif"> LOGIN</span>
                </div>
                <hr class="" />
                <form action="#" class="">
                  <div class="py-4 relative">
                    <span class="mb-2 text-md">Email</span>
                    <div class="flex items-center">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="h-5 w-5 absolute text-neutral-400 ms-1"
                      >
                        <path
                          class="dark:fill-mainbody-300"  
                          d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z"
                        />
                        <path
                          class="dark:fill-mainbody-300"
                          d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z"
                        />
                      </svg>
      
                      <input
                        type="text"
                        name="email"
                        id="email"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500 transition-all pl-7 outline-none focus:border-green-500  focus:ring-green-200"
                      />
                    </div>
                  </div>
                  <div class="py-4 relative">
                    <span class="mb-2 text-md">Password</span>
                    <div class="flex items-center">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-5 h-5 absolute text-neutral-400 ms-1"
                      >
                        <path
                          class="dark:fill-mainbody-300"  
                          fill-rule="evenodd"
                          d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z"
                          clip-rule="evenodd"
                        />
                      </svg>
      
                      <input
                        type="password"
                        name="pass"
                        id="pass"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500 transition-all pl-7  focus:border-green-500  focus:ring-green-200"
                      />
                    </div>
                  </div>
                  <!-- ===Remember Me and Forgot password==== -->
                  <div class="flex justify-between items-center mt-3 select-none">
                    <label class="whitespace-nowrap">
                      <input type="checkbox" class="" id="rememberMe" />
                      <span class="">Remember me</span>
                    </label>
                    <div class="whitespace-nowrap">
                      <a href="#" class="text-indigo-800 font-semibold ms-4"
                        >Forgot password</a
                      >
                    </div>
                  </div>
                  <!-- ===Login Button===== -->
                  <div class="mt-5 relative">
                    <div class="mt-5">
                      <button
                        class="w-full border border-black bg-black text-white py-1 rounded-md hover:bg-transparent hover:text-black font-semibold dark:bg-green-300 dark:text-black dark:border-gray-400 "
                        type="submit"
                      >
                        <i class="fa-solid fa-right-to-bracket"></i> Login
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <!--================right column===================================  -->
              <div class="basis-6/12 p-32 bg-mainbody-600 dark:bg-mainbody-300 ">
                {{-- <img
                  src="{{ url('Cyan.png') }}"
                  alt=""
                  class="w-full h-full object-cover"
                /> --}}
              </div>
            </div>
          </div>
    </div>
@endsection
