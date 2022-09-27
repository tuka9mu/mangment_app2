@extends('layouts.default')
<!-- Modal toggle -->
@section('content')
    <!--edit employee-->
    <!-- Overlay element -->

    <div tabindex="-1"
        class=" lg:w-5/12  fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-50 rounded-md py-6 drop-shadow-lg bg-gray-700">
        <!-- Modal header -->
        <div class="p-3">
            <h3 class="text-xl font-medium text-white">
                تعديل بيانات موظف
            </h3>
            <hr class="border bg-sky-500 rounded my-3">

            <form action="/edit" method="POST">
                @csrf
                <input type="hidden" id="id" name="id" value="{{ $employee->id }}">
                <div class="grid gap-6 mb-6 lg:grid-cols-3">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-100 ">رمز
                            الموظف</label>
                        <input type="text" name="empl_id" autocomplete="off" value="{{ $employee->empl_id }}"
                            class="w-1/2 bg-gray-50 border border-gray-300 text-gray-300 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring"
                            required="">
                    </div>
                    <div>
                        <label for="first_name" class="block text-sm mb-2 font-medium text-gray-100">الاسم
                            الاول</label>
                        <input type="text" name="name" autocomplete="off" value="{{ $employee['name'] }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring"
                            required="">
                    </div>
                    @error('name')
                        <div class="alert alert-danger error" style="font-size: 14px; width:170px;">{{ $message }}
                        </div>
                    @enderror

                    <input type="hidden" name="dept_code" autocomplete="off" value="16" placeholder="16"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full focus:outline-none focus:ring"
                        required="">

                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-400">الدرجة
                            الوظيفية</label>
                        <select name="degree" id="degree" required
                            data-value="{{ $employee ? $employee->degree : old('degree') }}"
                            class="hover:border-sky-300 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                            @foreach ($degrees as $val)
                                <option value="{{ $val->id }}">
                                    {{ $val->name }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-400">العنوان
                            الوظيفي</label>
                        <select name="address" data-value="{{ $employee ? $employee->address : old('address') }}"
                            class="hover:border-sky-300 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">

                            @foreach ($addresses as $val)
                                <option value={{ $val->id }}>
                                    {{ $val->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div>
                        <label for="duedate" class="block mb-2 text-sm font-medium text-gray-100">تاريخ المباشرة
                        </label>
                        <input id="duedate" name="duedate" type="date" value="{{ $employee['duedate'] }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>

                    <input id="commdate" name="commdate" type="hidden" value="{{ $employee['commdate'] }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">


                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-100">تاريخ تغيير
                            العنوان
                        </label>
                        <input id="adddate" name="adddate" type="date" value="{{ $employee['adddate'] }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>

                </div>

                <div class="grid gap-6 mb-6 lg:grid-cols-4">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-100">منطقة السكن
                        </label>
                        <input name="state" type="text" value="{{ $employee->state }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-100">محلة
                        </label>
                        <input name="locality" type="text" value="{{ $employee->locality }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-100">زقاق
                        </label>
                        <input name="ally" type="text" value="{{ $employee->ally }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-100">دار
                        </label>
                        <input name="house" type="text" value="{{ $employee->house }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>

                </div>
                <div class="grid gap-6 mb-6 lg:grid-cols-2">
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-100">رقم الهاتف
                        </label>
                        <input name="phone" type="text" value="{{ $employee->phone }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-100">الايميل الرسمي
                        </label>
                        <input name="email" type="text" value="{{ $employee->email }}"
                            class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>
                </div>



                <div class="flex justify-end">
                    <!-- This button is used to open the dialog -->
                    <button type="submit"
                        class="bg-white text-[#edd84d] hover:text-white border border-[#f8cd0d] hover:bg-[#f8cd0d] focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        تحديث بيانات
                    </button>
                    <a type="button" href="{{ route('request.index') }}"
                        class="close bg-white text-[#dc2626] hover:text-white border border-[#dc2626] hover:bg-[#dc2626] focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        الغاء
                    </a>
                </div>

            </form>


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



<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
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
</script>
