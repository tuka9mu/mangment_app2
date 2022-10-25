@extends('layouts.default')
<!-- Modal toggle -->
@section('content')
    <!--add book-->
    <!-- Overlay element -->
    <div class="w-1/2">
        @if (session('status'))
            <p class="bg-green-400 p-3 w-1/2 text-white font-semibold rounded-md mb-3">{{ session('status') }}</p>
        @endif
    </div>
    <div tabindex="-1"
        class=" lg:w-5/12  fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-50 rounded-md py-6 drop-shadow-lg bg-gray-700">
        <!-- Modal header -->
        <div class="p-3">
            <div class="flex justify-between">
                <div>
                    <h3 class="text-xl font-medium text-white">
                        اضافة كتاب شكر
                    </h3>
                </div>
                <div>
                    <a type="button" class="p-1" href="{{ route('book-export', $employee->id) }}">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            enable-background="new 0 0 24 24" id="Layer_1" version="1.1" viewBox="0 0 24 24"
                            xml:space="preserve">
                            <g>
                                <rect fill="#FFFFFF" height="17" width="11.5" x="12" y="3.5" />
                                <path
                                    d="M23.5,21h-10c-0.2763672,0-0.5-0.2236328-0.5-0.5s0.2236328-0.5,0.5-0.5H23V4h-9.5   C13.2236328,4,13,3.7763672,13,3.5S13.2236328,3,13.5,3h10C23.7763672,3,24,3.2236328,24,3.5v17   C24,20.7763672,23.7763672,21,23.5,21z"
                                    fill="#177848" />
                                <polygon fill="#177848" points="14,0 0,2.6086957 0,21.391304 14,24  " />
                                <polygon fill="#FFFFFF" opacity="0.2" points="0,2.6087036 0,2.8587036 14,0.25 14,0  " />
                                <rect fill="#177848" height="2" width="4" x="13" y="5" />
                                <rect fill="#177848" height="2" width="4" x="18" y="5" />
                                <rect fill="#177848" height="2" width="4" x="13" y="8" />
                                <rect fill="#177848" height="2" width="4" x="18" y="8" />
                                <rect fill="#177848" height="2" width="4" x="13" y="11" />
                                <rect fill="#177848" height="2" width="4" x="18" y="11" />
                                <rect fill="#177848" height="2" width="4" x="13" y="14" />
                                <rect fill="#177848" height="2" width="4" x="18" y="14" />
                                <rect fill="#177848" height="2" width="4" x="13" y="17" />
                                <rect fill="#177848" height="2" width="4" x="18" y="17" />
                                <polygon opacity="0.1" points="0,21.3912964 14,24 14,23.75 0,21.1412964  " />
                                <linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="9.5" x2="23.3536377"
                                    y1="7.5" y2="21.3536377">
                                    <stop offset="0" style="stop-color:#000000;stop-opacity:0.1" />
                                    <stop offset="1" style="stop-color:#000000;stop-opacity:0" />
                                </linearGradient>
                                <path d="M23.5,21c0.2763672,0,0.5-0.2236328,0.5-0.5V13L14,3v18H23.5z"
                                    fill="url(#SVGID_1_)" />
                                <polygon fill="#FFFFFF"
                                    points="7.357666,12.5 9.6552734,8.3642578 9.6262817,8.3481445 7.8796387,8.4729004 6.5,10.9562378    5.225647,8.6624756 3.5758667,8.7802734 5.642334,12.5 3.5758667,16.2197266 5.225647,16.3375244 6.5,14.0437622    7.8796387,16.5270996 9.6262817,16.6518555 9.6552734,16.6357422  " />
                                <linearGradient
                                    gradientTransform="matrix(60.9756088 0 0 60.9756088 20560.1210938 -26748.4140625)"
                                    gradientUnits="userSpaceOnUse" id="SVGID_2_" x1="-337.1860046" x2="-336.9563904"
                                    y1="438.8707886" y2="438.8707886">
                                    <stop offset="0" style="stop-color:#FFFFFF" />
                                    <stop offset="1" style="stop-color:#000000" />
                                </linearGradient>
                                <path d="M14,0L0,2.6086957v18.782608L14,24V0z" fill="url(#SVGID_2_)" opacity="0.05" />
                                <linearGradient gradientUnits="userSpaceOnUse" id="SVGID_3_" x1="-1.5634501"
                                    x2="25.0453987" y1="5.9615331" y2="18.369442">
                                    <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0.2" />
                                    <stop offset="1" style="stop-color:#FFFFFF;stop-opacity:0" />
                                </linearGradient>
                                <path
                                    d="M23.5,3H14V0L0,2.6087036v18.7825928L14,24v-3h9.5c0.2763672,0,0.5-0.2236328,0.5-0.5v-17   C24,3.2236328,23.7763672,3,23.5,3z"
                                    fill="url(#SVGID_3_)" />
                            </g>
                            <g />
                            <g />
                            <g />
                            <g />
                            <g />
                            <g />
                            <g />
                            <g />
                            <g />
                            <g />
                            <g />
                            <g />
                            <g />
                            <g />
                            <g />
                        </svg>
                    </a>
                </div>
            </div>


            <hr class="border bg-sky-500 rounded my-3">

            <form action="/add-book" method="POST">
                @csrf
                <input type="hidden" id="id" name="id" value="{{ $employee->empl_id }}">
                <div class="grid gap-6 mb-6 lg:grid-cols-2">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-100 ">رمز
                            الموظف</label>
                        <input type="text" name="employee" autocomplete="off" value="{{ $employee->empl_id }}"
                            class="w-1/2 bg-gray-50 border border-gray-300 text-gray-300 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring"
                            required="">
                    </div>
                    <div>
                        <label for="first_name" class="block text-sm mb-2 font-medium text-gray-100">الاسم
                            الاول</label>
                        <select name="book"
                            class="hover:border-sky-300 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                            @foreach ($books as $val)
                                <option value={{ $val->id }}>{{ $val->name }} <<< {{ $val->type }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('name')
                        <div class="alert alert-danger error" style="font-size: 14px; width:170px;">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="bookdate" class="block mb-2 text-sm font-medium text-gray-100">تاريخ الكتاب
                    </label>
                    <input id="duedate" name="date" type="date"
                        class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                </div>
                <div class="flex justify-end">
                    <!-- This button is used to open the dialog -->
                    <button type="submit"
                        class="bg-white text-[#34d399] hover:text-white border border-[#34d399] hover:bg-[#34d399] focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        اضافة كتاب
                    </button>

                    <a type="button" href="{{ route('request.index') }}"
                        class="close bg-white text-[#dc2626] hover:text-white border border-[#dc2626] hover:bg-[#dc2626] focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        الغاء
                    </a>
                </div>
            </form>
            <table class="w-full mt-2 mb-2">
                <thead class="text-gray-100 font-semibold text-center">

                    <tr class="bg-gradient-to-r from-sky-600 to-cyan-400 text-center">
                        <th class="p-3"><span> ID</span></th>
                        <th class="p-3"><span> رمز الموظف</span></th>
                        <th><span> الكتاب </span></th>
                        <th><span> تاريخ الكتاب </span></th>
                        <th><span>الاجراء </span></th>
                    </tr>

                </thead>
                <tbody class="bg-white">

                    @foreach ($data as $val)
                        <tr class="text-center">
                            <td>{{ $val->id }}</td>
                            <td>{{ $val->_empl }}</td>
                            <td>{{ $val->_name }}</td>
                            <td>{{ $val->date }}</td>
                            <td> <a type="button" class="p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#f97316" class="h-5 w-5 text-green-700"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>



    {{-- <div class="bg-white"></div>
    <div id="medium-modal" tabindex="-1"
        class="lg:w-5/12 w-1/2 hidden fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-50 rounded-md py-6 drop-shadow-lg bg-white"
        aria-hidden="true" aria-hidden="true">
        <!-- Modal header -->
        <div class="p-3">
            <h3 class="text-xl font-medium text-gray-700">
                اضافة كتاب شكر
            </h3>
            <hr class="border-2 bg-gray-900 rounded my-3">

            <form action="{{ url('add-book') }}" method="POST">
                @csrf
                <input value="id" name="id" type="hidden">
                <div class="grid gap-6 mb-6 lg:grid-cols-2">
                    <input type="text" id="employee" name="employee">
                    <div>
                        <label class="block text-sm mb-2 font-medium text-gray-700">اسم الكتاب
                        </label>
                        <select id="name" name="name" autocomplete="off"
                            class="hover:border-sky-300 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                            @foreach ($books as $val)
                                <option value={{ $val->id }}>{{ $val->name }}</option>
                            @endforeach
                        </select>

                    </div>


                </div>

                <div class="flex justify-end">
                    <button data-modal-toggle="medium-modal" type="submit"
                        class="bg-white text-[#047857] hover:text-white border border-[#047857] hover:bg-[#047857] focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        اضافة
                    </button>
                    <button type="button" data-modal-toggle="medium-modal"
                        class="bg-white text-[#dc2626] hover:text-white border border-[#dc2626] hover:bg-[#dc2626] focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        الغاء
                    </button>
                </div>

            </form>

        </div>
    </div> --}}
@endsection



{{-- <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>
<script>
    $(function() {
        $("select").each(function(index, element) {
            const val = $(this).data('value');
            if (val !== '') {
                $(this).val(val);
            }
        });
    })
</script> --}}
