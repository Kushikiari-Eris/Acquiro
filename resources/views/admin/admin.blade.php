<x-admin-layout>
    
    
 
 <div class="p-4 sm:ml-64">
        <nav class="flex mb-10" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
          <li class="inline-flex items-center">
              <a href="{{ url('admin')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
              <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
              </svg>
              Home
              </a>
          </li>
          </ol>
      </nav>
      <div class="bg-gray-900 ">
        <div class="grid gap-4 lg:gap-8 md:grid-cols-3 p-8 pt-2">
            <div class=" p-6 rounded-2xl bg-white shadow dark:bg-gray-800">
                <div class="space-y-2">
                    <div
                        class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">
                        <span>Revenue</span>
                    </div>
    
                    <div class="text-3xl dark:text-gray-100">
                        $192.1k
                    </div>
    
                    <div class="flex items-center space-x-1 rtl:space-x-reverse text-sm font-medium text-green-600">
    
                        <span>32k increase</span>
    
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </div>
    
            <div class=" p-6 rounded-2xl bg-white shadow dark:bg-gray-800">
                <div class="space-y-2">
                    <div
                        class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">
                        <span>Users</span>
                    </div>
    
                    <div class="text-3xl dark:text-gray-100">
                        1340
                    </div>
    
                    <div class="flex items-center space-x-1 rtl:space-x-reverse text-sm font-medium text-red-600">
    
                        <span>3% decrease</span>
    
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 13a1 1 0 100 2h5a1 1 0 001-1V9a1 1 0 10-2 0v2.586l-4.293-4.293a1 1 0 00-1.414 0L8 9.586 3.707 5.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0L11 9.414 14.586 13H12z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
    
            </div>
    
            <div class=" p-6 rounded-2xl bg-white shadow dark:bg-gray-800">
                <div class="space-y-2">
                    <div
                        class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">
    
                        <span>Donators</span>
                    </div>
    
                    <div class="text-3xl dark:text-white">
                        3543
                    </div>
    
                    <div class="flex items-center space-x-1 rtl:space-x-reverse text-sm font-medium text-green-600">
    
                        <span>7% increase</span>
    
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="flex flex-col items-center w-full max-w-screen-md p-6 pb-6 bg-gray-800 rounded-lg shadow-xl sm:p-8 ml-8">
        <h2 class="text-xl font-bold text-white">Sales</h2>
        <span class="text-sm font-semibold text-white">2020</span>
        <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">
          <div class="relative flex flex-col items-center flex-grow pb-5 group text-red-500">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$37,500</span>
            <div class="relative flex justify-center w-full h-8 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-16 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">Jan</span>
          </div>
          <div class="relative flex flex-col items-center flex-grow pb-5 group text-green-500">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$45,000</span>
            <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">Feb</span>
          </div>
          <div class="relative flex flex-col items-center flex-grow pb-5 group text-green-500">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
            <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">Mar</span>
          </div>
          <div class="relative flex flex-col items-center flex-grow pb-5 group text-green-500">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$50,000</span>
            <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">Apr</span>
          </div>
          <div class="relative flex flex-col items-center flex-grow pb-5 group text-red-500">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
            <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">May</span>
          </div>
          <div class="relative flex flex-col items-center flex-grow pb-5 group text-green-500">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$55,000</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">Jun</span>
          </div>
          <div class="relative flex flex-col items-center flex-grow pb-5 group text-green-500">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$60,000</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-16 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">Jul</span>
          </div>
          <div class="relative flex flex-col items-center flex-grow pb-5 group text-red-500">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$57,500</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-10 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">Aug</span>
          </div>
          <div class="relative flex flex-col items-center flex-grow pb-5 group text-green-500">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$67,500</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-10 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-32 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">Sep</span>
          </div>
          <div class="relative flex flex-col items-center flex-grow pb-5 group text-red-500">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$65,000</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-12 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full bg-indigo-400 h-28"></div>
            <span class="absolute bottom-0 text-xs font-bold">Oct</span>
          </div>
          <div class="relative flex flex-col items-center flex-grow pb-5 group text-green-500">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$70,000</span>
            <div class="relative flex justify-center w-full h-8 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-40 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">Nov</span>
          </div>
          <div class="relative flex flex-col items-center flex-grow pb-5 group text-green-500">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$75,000</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-40 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">Dec</span>
          </div>
        </div>
        <div class="flex w-full mt-3">
          <div class="flex items-center ml-auto text-white">
            <span class="block w-4 h-4 bg-indigo-400"></span>
            <span class="ml-1 text-xs font-medium">Existing</span>
          </div>
          <div class="flex items-center ml-4 text-white">
            <span class="block w-4 h-4 bg-indigo-300"></span>
            <span class="ml-1 text-xs font-medium">Upgrades</span>
          </div>
          <div class="flex items-center ml-4 text-white">
            <span class="block w-4 h-4 bg-indigo-200"></span>
            <span class="ml-1 text-xs font-medium">New</span>
          </div>
        </div>
      </div>
      <!-- Component End  -->   

    
 </div>

 
</x-admin-layout>