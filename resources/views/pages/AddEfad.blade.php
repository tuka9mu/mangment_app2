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
            <h3 class="text-xl font-medium text-white">
                 اضافة ايفاد
            </h3>
            <hr class="border bg-sky-500 rounded my-3">

            <form action="/AddEfad" method="POST">
                @csrf
                <input type="hidden" id="id" name="id" value="{{ $employee->empl_id }}">

                <div class="grid gap-6 lg:grid-cols-3">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-100 ">رمز
                            الموظف</label>
                        <input type="text" name="employee" autocomplete="off" value="{{$employee->empl_id}}"
                            class="w-1/2 bg-gray-50 border border-gray-300 text-gray-300 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring"
                            required="">
                    </div>
                    <div>
                        <label for="countries"
                            class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-400">جهة الايفاد
                            </label>
                        <select name="country" id="section" value="{{ old('section') }}"
                            class="hover:border-sky-300 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                            @foreach ($countries as $val)
                                <option value={{ $val->id }}>{{ $val->ctry_b_desc }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-100 ">
                            المحافظة</label>
                        <input type="text" name="emp_prov" autocomplete="off"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring"
                           >
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-100">تاريخ الايفاد من
                        </label>
                        <input name="emp_date_from" type="date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-100">تاريخ الايفاد الى
                        </label>
                        <input name="emp_date_to" type="date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:border-sky-300 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:ring">
                    </div>
                </div>


              <div class="flex justify-end">
                  <!-- This button is used to open the dialog -->
                  <button type="submit"
                      class="bg-white text-[#34d399] hover:text-white border border-[#34d399] hover:bg-[#34d399] focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                      اضافة الايفاد
                  </button>
                  <a type="button" href="{{ route('test.index') }}"
                      class="close bg-white text-[#dc2626] hover:text-white border border-[#dc2626] hover:bg-[#dc2626] focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                      الغاء
                  </a>
              </div>
            </form>
            <table class="w-full mt-2 mb-2">
                    <thead class="text-gray-100 font-semibold text-center">

                        <tr class="bg-gradient-to-r from-sky-600 to-cyan-400 text-center">
                            <th class="p-3"><span> رمز الموظف</span></th>
                            <th><span> جهة الايفاد </span></th>
                            <th><span> المحافظة </span></th>
                            <th><span>  تاريخ الايفاد من </span></th>
                            <th><span>تاريخ الايفاد الى </span></th>
                        </tr>

                    </thead>
                    <tbody class="bg-white">

                        @foreach ($data as $val)
                        <tr class="text-center">
                            <td>{{$val->_empl}}</td>
                            <td>{{$val->_code}}</td>
                            <td>{{$val->emp_prov}}</td>
                            <td>{{$val->emp_date_from}}</td>
                            <td>{{$val->emp_date_to}}</td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
                {{ $data->links() }}
        </div>
    </div>
@endsection
