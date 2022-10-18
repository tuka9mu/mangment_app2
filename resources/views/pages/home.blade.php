@extends('layouts.default')
@section('content')

    <section>
        <div class="container">
            <div class="flex flex-col text-center w-200">
                <h1 class="bg-sky-700 title-font p-5 rounded text-white font-semibold text-xl">احصائيات موظفي دائرة تقنية
                    المعلومات والاتصالات </h1>
            </div>
        </div>

        <div class="grid gap-8 mb-8 md:grid-cols-2 xl:grid-cols-2 container px-5 py-10 mx-auto">
            <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
                <div class="p-4 flex items-center">
                    <div class="p-3 rounded-full text-orange-500 dark:text-orange-100 bg-orange-100 dark:bg-orange-500 mr-4">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </svg>
                    </div>
                    <div class="mr-5">
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            عدد موظفي دائرة تقنية المعلومات
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $data['count_all'] }}
                        </p>
                    </div>
                </div>

            </div>
            <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
                <div class="p-4 flex items-center">
                    <div class="p-3 rounded-full text-green-500 dark:text-orange-100 bg-green-100 dark:bg-orange-500 mr-4">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </svg>
                    </div>
                    <div class="mr-5">
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            الدرجات الوظيفية في دائرة تقنية المعلومات
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $data['all_degree'] }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
                <div class="p-4 flex items-center">
                    <div class="p-3 rounded-full text-blue-500 bg-blue-100 mr-4">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </svg>
                    </div>
                    <div class="mr-5">
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            العناوين الوظيفية في دائرة تقنية المعلومات
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $data['all_address'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <div class="grid gap-8 mb-8 md:grid-cols-2 xl:grid-cols-2 container px-5 py-10 mx-auto">
            <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
                <div class="p-4 flex items-center">
                    <div class="p-3 rounded-full text-orange-500 dark:text-orange-100 bg-orange-100 dark:bg-orange-500 mr-4">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </svg>
                    </div>
                    <div class="mr-5">
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            عدد كتب الشكر
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $data['all_book'] }}
                        </p>
                    </div>
                </div>

            </div>
            <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
                <div class="p-4 flex items-center">
                    <div class="p-3 rounded-full text-green-500 dark:text-orange-100 bg-green-100 dark:bg-orange-500 mr-4">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </svg>
                    </div>
                    <div class="mr-5">
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                           عدد الايفادات
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $data['all_efad'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
