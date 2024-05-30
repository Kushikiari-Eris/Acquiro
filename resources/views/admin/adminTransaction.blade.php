<x-admin-layout>
    <div class="p-4 sm:ml-64 overflow-x-auto ">
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
            <li>
                <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Transactions</a>
                </div>
            </li>
            </ol>
        </nav>
        <!-- This is an example component -->
        <div class='flex items-center justify-center overflow-x-auto w-full'>
            <div class="flex items-center justify-center min-w-full overflow-x-auto ">
                <div class="overflow-x-auto  shadow-md sm:rounded-lg">
                    <div class="overflow-x-auto  shadow-md sm:rounded-lg w-[170vh]">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 overflow-x-auto">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">Username</th>
                                <th scope="col" class="py-3 px-6">Card No.</th>
                                <th scope="col" class="py-3 px-6">Payment Method</th>
                                <th scope="col" class="py-3 px-6">Amount</th>
                                <th scope="col" class="py-3 px-6">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6">Alex Johnson</td>
                                <td class="py-4 px-6">N/A</td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center justify-center px-2 h-[2.5vh] py-2 mt-0.1 text-xs font-bold leading-none text-indigo-100 bg-purple-700 rounded"><img src="{{ asset('image/coin.png')}}" class=""></span>
                                </td>
                                <td class="py-4 px-6">$4,500.00</td>
                                <td class="whitespace-no-wrap  py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                    <div class="inline-flex items-center rounded-full bg-blue-600 py-2 px-3 text-xs text-white">Complete</div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6">Maria Garcia</td>
                                <td class="py-4 px-6">55387621</td>
                                <td class="py-4 px-6"><img src="{{ asset('/image/amazon.png')}}"></td>
                                <td class="py-4 px-6">$3,150.00</td>
                                <td class="whitespace-no-wrap  py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                    <div class="inline-flex items-center rounded-full bg-red-200 py-1 px-2 text-red-500">Canceled</div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6">James Smith</td>
                                <td class="py-4 px-6">90817264</td>
                                <td class="py-4 px-6"><img src="{{ asset('/image/visa.png')}}"></td>
                                <td class="py-4 px-6">$7,820.00</td>
                                <td class="whitespace-no-wrap  py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                    <div class="inline-flex items-center rounded-full bg-blue-600 py-2 px-3 text-xs text-white">Complete</div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6">Patricia Brown</td>
                                <td class="py-4 px-6">26483910</td>
                                <td class="py-4 px-6"><img src="{{ asset('/image/paypal.png')}}"></td>
                                <td class="py-4 px-6">$1,230.00</td>
                                <td class="whitespace-no-wrap  py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                    <div class="inline-flex items-center rounded-full bg-blue-600 py-2 px-3 text-xs text-white">Complete</div>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="py-4 px-6">Ethan Davis</td>
                                <td class="py-4 px-6">64738290</td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center justify-center px-2 h-[2.5vh] py-2 mt-0.1 text-xs font-bold leading-none text-indigo-100 bg-purple-700 rounded"><img src="{{ asset('image/coin.png')}}" ></span>
                                </td>
                                <td class="py-4 px-6">$865.00</td>
                                <td class="whitespace-no-wrap py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                    <div class="inline-flex items-center rounded-full bg-blue-200 py-1 px-2 text-blue-500">Pending</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</x-admin-layout>