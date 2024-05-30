<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <title>{{$title ?? 'Points'}}</title>
</head>
<body class="antialiased bg-white dark:bg-gray-900 bg-dots-darker bg-center dark:bg-dots-lighter ">
    @include('layouts.navigation')
    
        <form class="max-w-[16rem] ml-10 grid grid-cols-2 gap-4 relative">
            <div >
                <label for="start-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start time:</label>
                <div class="relative">
                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <input type="time" id="start-time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                </div>
            </div>
            <div>
                <label for="end-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End time:</label>
                <div class="relative">
                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <input type="time" id="end-time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                </div>
            </div>
        </form>

    <div class="max-w-2xl mx-auto pt-5">
        
        <div class="border-b border-gray-200 dark:border-gray-700 mb-4 flex items-center justify-center">
            <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Daily Quest</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">Biweekly Quest</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Goals</button>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-900 hidden" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-sky-700">
                    <div class="flex justify-between">
                        <img src="{{ asset('image/daily.png')}}" >
                        <div class="flex flex-col p-4 leading-normal">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Daily Login</h5>
                                <span class="inline-flex items-center justify-center px-2 h-[2.5vh] py-2 my-2 text-xs font-bold leading-none text-indigo-100 bg-purple-700 rounded"><img src="{{ asset('image/coin.png')}}" class="mr-2">$ 50</span>
                            </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">Always login everyday to check some available quest that you'd like.</p>
                            <div class="flex justify-between">
                        <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                    <span class="relative px-5 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Claim
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-sky-700">
                    <div class="flex justify-between">
                        <img src="{{ asset('image/pushup.png')}}" >
                        <div class="flex flex-col p-4 leading-normal">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Daily Push ups</h5>
                                <span class="inline-flex items-center justify-center px-2 h-[2.5vh] py-2 my-2 text-xs font-bold leading-none text-indigo-100 bg-purple-700 rounded"><img src="{{ asset('image/coin.png')}}" class="mr-2">$ 50</span>
                            </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">building upper body strength, reducing the risk of cardiac events, and improving body composition.</p>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">0/100</p>
                            <div class="flex justify-between">
                                <input class=" w-[30vh]  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                    <span class="relative px-5 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Claim
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-sky-700">
                    <div class="flex justify-between">
                        <img src="{{ asset('image/squat.png')}}" >
                        <div class="flex flex-col p-4 leading-normal">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Daily Squats</h5>
                                <span class="inline-flex items-center justify-center px-2 h-[2.5vh] py-2 my-2 text-xs font-bold leading-none text-indigo-100 bg-purple-700 rounded"><img src="{{ asset('image/coin.png')}}" class="mr-2">$ 50</span>
                            </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">a strength exercise in which the trainee lowers their hips from a standing position and then stands back up.</p>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">0/100</p>
                            <div class="flex justify-between">
                                <input class=" w-[30vh]  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                    <span class="relative px-5 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Claim
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-sky-700">
                    <div class="flex justify-between">
                        <img src="{{ asset('image/runner.png')}}" >
                        <div class="flex flex-col p-4 leading-normal">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Daily 10km Run</h5>
                                <span class="inline-flex items-center justify-center px-2 h-[2.5vh] py-2 my-2 text-xs font-bold leading-none text-indigo-100 bg-purple-700 rounded"><img src="{{ asset('image/coin.png')}}" class="mr-2">$ 50</span>
                            </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">helps build strong bones, strengthens muscles and helps maintain a healthy weight.</p>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">0km/10km</p>
                            <div class="flex justify-between">
                                <input class=" w-[30vh]  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                    <span class="relative px-5 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Claim
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-900" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-sky-700">
                    <div class="flex justify-between">
                        <img src="{{ asset('image/hiking.png')}}" >
                        <div class="flex flex-col p-4 leading-normal">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hiking</h5>
                                <span class="inline-flex items-center justify-center px-2 h-[2.5vh] py-2 my-2 text-xs font-bold leading-none text-indigo-100 bg-purple-700 rounded"><img src="{{ asset('image/coin.png')}}" class="mr-2">$ 1500</span>
                            </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">Upload a photo or a video of you while Hiking</p>
                            <div class="flex justify-between">
                                <input class=" w-[30vh]  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                    <span class="relative px-5 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Claim
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-sky-700">
                    <div class="flex justify-between">
                        <img src="{{ asset('image/couple.png')}}" >
                        <div class="flex flex-col p-4 leading-normal">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Couple Dancing Skill</h5>
                                <span class="inline-flex items-center justify-center px-2 h-[2.5vh] py-2 my-2 text-xs font-bold leading-none text-indigo-100 bg-purple-700 rounded"><img src="{{ asset('image/coin.png')}}" class="mr-2">$ 300</span>
                            </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">Upload a video of you performing the Couple Dance</p>
                            <div class="flex justify-between">
                                <input class=" w-[30vh]  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                    <span class="relative px-5 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Claim
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-sky-700">
                    <div class="flex justify-between">
                        <img src="{{ asset('image/guitar.png')}}" >
                        <div class="flex flex-col p-4 leading-normal">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">PLay a Guitar</h5>
                                <span class="inline-flex items-center justify-center px-2 h-[2.5vh] py-2 my-2 text-xs font-bold leading-none text-indigo-100 bg-purple-700 rounded"><img src="{{ asset('image/coin.png')}}" class="mr-2">$ 500</span>
                            </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">Upload a video of you Playing a Guitar</p>
                            <div class="flex justify-between">
                                <input class=" w-[30vh]  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                    <span class="relative px-5 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Claim
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-sky-700">
                    <div class="flex justify-between">
                        <img src="{{ asset('image/portrait.png')}}" >
                        <div class="flex flex-col p-4 leading-normal">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Draw a Self Portrait</h5>
                                <span class="inline-flex items-center justify-center px-2 h-[2.5vh] py-2 my-2 text-xs font-bold leading-none text-indigo-100 bg-purple-700 rounded"><img src="{{ asset('image/coin.png')}}" class="mr-2">$ 500</span>
                            </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">Upload a Portrait of you</p>
                            <div class="flex justify-between">
                                <input class=" w-[30vh]  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                    <span class="relative px-5 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Claim
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-900 hidden" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-sky-700">
                    <div class="flex justify-between">
                        <img src="{{ asset('image/original-music.png')}}" >
                        <div class="flex flex-col p-4 leading-normal">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Perfom Original Music</h5>
                                <span class="inline-flex items-center justify-center px-2 h-[2.5vh] py-2 my-2 text-xs font-bold leading-none text-indigo-100 bg-purple-700 rounded"><img src="{{ asset('image/coin.png')}}" class="mr-2">$ 5000</span>
                            </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">Upload your original music</p>
                            <div class="flex justify-between">
                                <input class=" w-[30vh]  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                    <span class="relative px-5 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Claim
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-sky-700">
                    <div class="flex justify-between">
                        <img src="{{ asset('image/travel.png')}}" >
                        <div class="flex flex-col p-4 leading-normal">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Visit 10 Countries</h5>
                                <span class="inline-flex items-center justify-center px-2 h-[2.5vh] py-2 my-2 text-xs font-bold leading-none text-indigo-100 bg-purple-700 rounded"><img src="{{ asset('image/coin.png')}}" class="mr-2">$ 10,000</span>
                            </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">Upload a photo of you in different countries</p>
                            <div class="flex justify-between">
                                <input class=" w-[30vh]  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                    <span class="relative px-5 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Claim
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-sky-700">
                    <div class="flex justify-between">
                        <img src="{{ asset('image/underwater.png')}}" >
                        <div class="flex flex-col p-4 leading-normal">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Stay UnderWater for 10mins</h5>
                                <span class="inline-flex items-center justify-center px-2 h-[2.5vh] py-2 my-2 text-xs font-bold leading-none text-indigo-100 bg-purple-700 rounded"><img src="{{ asset('image/coin.png')}}" class="mr-2">$ 8900</span>
                            </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">Upload a 10 mins video of you under water</p>
                            <div class="flex justify-between">
                                <input class=" w-[30vh]  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                    <span class="relative px-5 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Claim
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-sky-700">
                    <div class="flex justify-between">
                        <img src="{{ asset('image/cooking.png')}}" >
                        <div class="flex flex-col p-4 leading-normal">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Cook Soufflé</h5>
                                <span class="inline-flex items-center justify-center px-2 h-[2.5vh] py-2 my-2 text-xs font-bold leading-none text-indigo-100 bg-purple-700 rounded"><img src="{{ asset('image/coin.png')}}" class="mr-2">$ 3500</span>
                            </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">Upload a photo of what you cook</p>
                            <div class="flex justify-between">
                                <input class=" w-[30vh]  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                    <span class="relative px-5 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Claim
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    
        
    </div>
    
    </div>
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
</body>
</html>