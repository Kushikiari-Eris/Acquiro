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
                <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Users</a>
                </div>
            </li>
            </ol>
        </nav>

        <table class="min-w-full overflow-x-auto">
            <thead class="dark:bg-gray-700">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-800">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/150?img=1" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-white">
                                    Jane Cooper
                                </div>
                                <div class="text-sm text-gray-400">
                                    jane.cooper@gmail.com
                                </div>
                            </div>
                        </div>
                    </td>

                    
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-white">Dancing Expert</div>
                        <div class="text-sm text-gray-400">Achivement Title</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-bold rounded-full bg-red-500 text-white">
                            Inactive
                        </span>
                    </td>
                   
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                        jane.cooper@gmail.com
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <a href="#" class="ml-2 text-red-600 hover:text-red-900">Delete</a>
                    </td>
                </tr>
                
        
        
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/150?img=1" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-white">
                                    Jane Cooper
                                </div>
                                <div class="text-sm text-gray-400">
                                    jane.cooper@gmail.com
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-white">Dancing Expert</div>
                        <div class="text-sm text-gray-400">Achivement Title</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-bold rounded-full bg-green-500 text-white">
                            Active
                        </span>
                    </td>
                   
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                        jane.cooper@gmail.com
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <a href="#" class="ml-2 text-red-600 hover:text-red-900">Delete</a>
                    </td>
                </tr>
        
        
        
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/150?img=1" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-white">
                                    Jane Cooper
                                </div>
                                <div class="text-sm text-gray-400">
                                    jane.cooper@gmail.com
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-white">Dancing Expert</div>
                        <div class="text-sm text-gray-400">Achivement Title</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-bold rounded-full bg-green-500 text-white">
                            Active
                        </span>
                    </td>
                   
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                        jane.cooper@gmail.com
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <a href="#" class="ml-2 text-red-600 hover:text-red-900">Delete</a>
                    </td>
                </tr>
        
        
        
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/150?img=1" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-white">
                                    Jane Cooper
                                </div>
                                <div class="text-sm text-gray-400">
                                    jane.cooper@gmail.com
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-white">Dancing Expert</div>
                        <div class="text-sm text-gray-400">Achivement Title</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-bold rounded-full bg-green-500 text-white">
                            Active
                        </span>
                    </td>
                   
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                        jane.cooper@gmail.com
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <a href="#" class="ml-2 text-red-600 hover:text-red-900">Delete</a>
                    </td>
                </tr>
        
        
        
        
                <!-- More rows... -->
        
            </tbody>
        </table>
     </div>
</x-admin-layout>

