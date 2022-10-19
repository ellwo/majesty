<x-app-layout>
    <x-slot name="header">
        k
    </x-slot>


    <div class="lg:w-3/4 mx-auto mb-12">
    <div id="table" class="relative w-full flex dark:text-gray-200 dark:bg-dark-eval-2 flex-col min-w-0 break-words bg-white  mb-6 shadow-lg rounded">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-blueGray-700">
                        Page visits
                    </h3>
                </div>
                <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                    <button
                        class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                        style="transition:all .15s ease"
                    >
                        See all
                    </button>
                </div>
            </div>
        </div>
        <div class="block w-full overflow-x-auto">
            <!-- Projects table -->
            <table class="items-center w-full bg-transparent border-collapse">
                <thead>
                <tr>
                    <th colspan="2" class="px-6  bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        المنتج
                    </th>
                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    عمليات
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th colspan="2" class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">

       <div class="flex mx-auto px">
                        /argon/

                        <img class="rounded-full  h-20 p-1 " src="https://via.placeholder.com/640x480.png/004422?text=praesentium">
                        4,569
                        </div>
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">

                    </td>

                </tr>

                </tbody>
            </table>
        </div>
    </div>


    <div>
        <div class="block w-full overflow-x-auto">
            <!-- Projects table -->
            <table class="items-center w-full bg-transparent border-collapse">
                <thead class="thead-light">
                <tr>
                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Referral
                    </th>
                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Visitors
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                        style="min-width:140px"
                    ></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Facebook
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        1,480
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                            <span class="mr-2">60%</span>
                            <div class="relative w-full">
                                <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                    <div
                                        style="width:60%"
                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Facebook
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        5,480
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                            <span class="mr-2">70%</span>
                            <div class="relative w-full">
                                <div class="overflow-hidden h-2 text-xs flex rounded bg-emerald-200">
                                    <div
                                        style="width:70%"
                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Google
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        4,807
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                            <span class="mr-2">80%</span>
                            <div class="relative w-full">
                                <div class="overflow-hidden h-2 text-xs flex rounded bg-purple-200">
                                    <div
                                        style="width:80%"
                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Instagram
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        3,678
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                            <span class="mr-2">75%</span>
                            <div class="relative w-full">
                                <div class="overflow-hidden h-2 text-xs flex rounded bg-lightBlue-200">
                                    <div
                                        style="width:75%"
                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-lightBlue-500"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        twitter
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        2,645
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                            <span class="mr-2">30%</span>
                            <div class="relative w-full">
                                <div class="overflow-hidden h-2 text-xs flex rounded bg-orange-200">
                                    <div
                                        style="width:30%"
                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>


</div>
    </div>


</x-app-layout>
