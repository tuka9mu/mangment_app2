@extends('layouts.default')
@section('content')
    <div class="flex flex-col text-center w-200">
        <h1 class="bg-sky-700 title-font p-5 rounded text-white font-semibold text-xl mb-4"> موظفي دائرة تقنية المعلومات
            والاتصالات </h1>
    </div>
    <div class="w-1/2">
        @if (session('status'))
            <p class="bg-green-400 p-3 w-1/2 text-white font-semibold rounded-md mb-3">{{ session('status') }}</p>
        @endif
    </div>


    <div class="flex justify-between">
        <!-- This button is used to open the dialog -->
        <div class="flex">
            <form method="GET" action="{{ route('request.search') }}">
                <input autocomplete type="search" name="name"
                    class="bg-white pr-12 py-2 focus:outline-none rounded-lg text-gray-400">
                <button class="bg-sky-500 text-white p-2 rounded mr-2" type="submit">ابحث</button>
            </form>
        </div>
        <div class="flex">
            <a type="button" href=""
                class="text-[#f43f5e] hover:text-white border border-[#f43f5e] hover:bg-[#fecdd3] focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                <svg fill="#f43f5e" class="w-5 h-5 hover:text-white" xmlns="http://www.w3.org/2000/svg"
                    data-name="Livello 1" id="Livello_1" viewBox="0 0 128 128">
                    <title />
                    <path
                        d="M61.88,93.12h0a3,3,0,0,0,.44.36l.24.13a1.74,1.74,0,0,0,.59.24l.25.07h0a3,3,0,0,0,1.16,0l.26-.08.3-.09a3,3,0,0,0,.3-.16l.21-.12a3,3,0,0,0,.46-.38L93,66.21A3,3,0,1,0,88.79,62L67,83.76V3a3,3,0,0,0-6,0V83.76L39.21,62A3,3,0,0,0,35,66.21Z" />
                    <path
                        d="M125,88a3,3,0,0,0-3,3v22a9,9,0,0,1-9,9H15a9,9,0,0,1-9-9V91a3,3,0,0,0-6,0v22a15,15,0,0,0,15,15h98a15,15,0,0,0,15-15V91A3,3,0,0,0,125,88Z" />
                </svg>
            </a>
            <button type="button" data-modal-toggle="medium-modal"
                class="text-[#047857] hover:text-white border border-[#047857] hover:bg-[#047857] focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                اضافة موظف
            </button>
        </div>
    </div>

    <div class="mt-2">
        <table class="w-full">
            <thead class="text-gray-100 font-semibold text-center">

                <tr class="bg-gradient-to-r from-sky-600 to-cyan-400">

                    <th class="p-3"><span>الرمز الوظيفي</span></th>
                    <th><span>اسم الموظف</span></th>
                    <th><span>الدرجة الوظيفية</span></th>
                    <th><span>العنوان الوظيفي</span></th>
                    <th><span>تاريخ تغيير العنوان</span></th>
                    <th><span>تاريخ الاستحقاق الجديد</span></th>
                    <th><span>الاجراء </span></th>
                </tr>

            </thead>

            <tbody class="bg-white" id="dataTable">
                @foreach ($blog as $employee)
                    <tr class="bg-white border-b-2 border-gray-200 text-center">

                        <td class="p-3"><span class="font-semibold">{{ $employee->empl_id }} </span></td>
                        <td class="p-3"><span>{{ $employee->name }} </span></td>
                        <td><span>{{ $employee->dgree }} </span></td>
                        <td><span>{{ $employee->adress }} </span></td>
                        <td><span>{{ $employee->adddate }}</span></td>
                        <td><span class="text-center">{{ $employee->duedate }} </span></td>
                        <td class="flex justify-center p-2">
                            <a type="button" value="{{ $employee->id }}" class="p-1"
                                href="{{ route('editEmployee', $employee->id) }}">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <g data-name="72 - Edit">
                                        <path fill="#3939aa"
                                            d="M12,21.5a1.5,1.5,0,0,1-1.49-1.69l.56-4.36a1.52,1.52,0,0,1,.42-.87L22.35,3.73a4.19,4.19,0,1,1,5.92,5.92L17.42,20.51a1.52,1.52,0,0,1-.87.42l-4.36.56Zm4.36-2.05h0ZM14,16.34l-.25,1.93L15.66,18,26.15,7.53a1.18,1.18,0,0,0,0-1.68,1.21,1.21,0,0,0-1.68,0Z" />
                                        <path fill="#3939aa"
                                            d="M24.89 12.41A1.51 1.51 0 0 1 23.83 12L20 8.17a1.5 1.5 0 1 1 2.12-2.12L26 9.85a1.5 1.5 0 0 1-1.06 2.56zM26 29.5H4A1.5 1.5 0 0 1 2.5 28V6A1.5 1.5 0 0 1 4 4.5H15a1.5 1.5 0 0 1 0 3H5.5v19h19V17a1.5 1.5 0 0 1 3 0V28A1.5 1.5 0 0 1 26 29.5z" />
                                    </g>
                                </svg>
                            </a>

                            <a type="button" class="p-1" href="{{ route('Book', $employee->id) }}">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                    viewBox="0 0 120 120">
                                    <defs>
                                        <linearGradient id="a" x1="60" x2="60" y1="-725.988"
                                            y2="-845.988" gradientTransform="matrix(1 0 0 -1 0 -725.988)"
                                            gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#fe9d02" />
                                            <stop offset="1" stop-color="#f7701d" />
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#a)"
                                        d="M26,0H94a25.94821,25.94821,0,0,1,26,26V94a25.94821,25.94821,0,0,1-26,26H26A25.94822,25.94822,0,0,1,0,94V26A26.012,26.012,0,0,1,26,0Z" />
                                    <path fill="#fff" fill-rule="evenodd"
                                        d="M81.9,27c9.8,0,14.9,3.7,18,6.2a5.83118,5.83118,0,0,1,2.2,4.6V86.5a1.77672,1.77672,0,0,1-.4,1,1.28389,1.28389,0,0,1-1,.4,1.08577,1.08577,0,0,1-.9-.4c-3.1-2.6-9.2-6-18.2-6-15,0-19.4,14-19.4,14v-53A12.19743,12.19743,0,0,1,64.8,35C67.6,31.3,72.7,27,81.9,27ZM39.3,27c9.2,0,14.3,4.3,17.2,8a12.19756,12.19756,0,0,1,2.6,7.5v53s-4.4-14-19.4-14c-9,0-15.1,3.4-18.2,6a3.55193,3.55193,0,0,1-.9.4,1.36706,1.36706,0,0,1-1.4-1.4V37.8a5.97977,5.97977,0,0,1,2.2-4.6C24.4,30.7,29.5,27,39.3,27Z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $employees->links() }}
    </div>


    <!--add employee-->
    <!-- Default Modal -->
    <div class="bg-white"></div>
    <div id="medium-modal" tabindex="-1"
        class="lg:w-5/12 hidden fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-50 rounded-md py-6 drop-shadow-lg bg-gray-700"
        aria-hidden="true" aria-hidden="true">
        <!-- Modal header -->
        <div class="p-3">
            <h3 class="text-xl font-medium text-white">
                اضافة موظف جديد
            </h3>
            <hr class="border bg-sky-200 rounded my-3">

            <form action="{{ url('add-employee') }}" method="POST">
                @csrf

                <div class="grid gap-6 mb-6 lg:grid-cols-3">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-100 ">رمز
                            الموظف</label>
                        <input type="text" id="first_name" name="empl_id" autocomplete="off" placeholder="123406"
                            class="w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring"
                            required="">
                    </div>
                    <div>
                        <label for="first_name" class="block text-sm mb-2 font-medium text-gray-100">الاسم
                            الاول</label>
                        <input type="text" id="first_name" name="name" autocomplete="off" placeholder="احمد عبد"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring"
                            required="">
                    </div>

                    <input type="hidden" id="dept_code" name="dept_code" autocomplete="off" value="16"
                        placeholder="16"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full focus:outline-none focus:ring"
                        required="">

                    <div>
                        <label for="countries"
                            class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-400">الدرجة
                            الوظيفية</label>
                        <select id="degree" name="degree" value="{{ old('degree') }}"
                            class="hover:border-sky-300 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                            @foreach ($degrees as $val)
                                <option value={{ $val->id }}>{{ $val->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="countries"
                            class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-400">العنوان
                            الوظيفي</label>
                        <select name="address" id="address" value="{{ old('address') }}"
                            class="hover:border-sky-300 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">

                            @foreach ($addresses as $val)
                                <option value={{ $val->id }}>{{ $val->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-100">تاريخ المباشرة
                        </label>
                        <input name="commdate" type="date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-100">تاريخ تغيير
                            العنوان
                        </label>
                        <input name="adddate" type="date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>

                </div>
                <hr class="border bg-sky-200 rounded my-1">
                <h4 class="text-xl font-medium text-white">معلومات الموظف</h4>
                <hr class="border bg-sky-200 rounded my-2">
                <div class="grid gap-6 mb-6 lg:grid-cols-4">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-100">منطقة السكن
                        </label>
                        <input name="state" type="text" placeholder="العامرية"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-100">محلة
                        </label>
                        <input name="locality" type="text" placeholder="402"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-100">زقاق
                        </label>
                        <input name="ally" type="text" placeholder="12"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-100">دار
                        </label>
                        <input name="house" type="text" placeholder="1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>

                </div>
                <div class="grid gap-6 mb-6 lg:grid-cols-2">
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-100">رقم الهاتف
                        </label>
                        <input name="phone" type="text" placeholder="07721386265"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-100">الايميل الرسمي
                        </label>
                        <input name="email" type="text" placeholder="ahmed@gmail.com"
                            class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>
                </div>

                <div class="flex justify-end">
                    <!-- This button is used to open the dialog -->
                    <button data-modal-toggle="medium-modal" type="submit"
                        class="bg-white text-[#047857] hover:text-white border border-[#047857] hover:bg-[#047857] focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        اضافة موظف
                    </button>
                    <button type="button" data-modal-toggle="medium-modal"
                        class="bg-white text-[#dc2626] hover:text-white border border-[#dc2626] hover:bg-[#dc2626] focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        الغاء
                    </button>
                </div>

            </form>

        </div>
    </div>
@endsection

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();

    });
</script> --}}
