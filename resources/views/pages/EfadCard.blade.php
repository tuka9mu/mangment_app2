@extends('layouts.default')
<!-- Modal toggle -->
@section('content')
    <div>
        <div class="container">
            <div class="flex flex-col text-center w-200">
                <h1 class="bg-sky-700 title-font p-5 rounded text-white font-semibold text-xl">احصائيات موظفي دائرة تقنية
                    المعلومات والاتصالات </h1>
            </div>
        </div>
        <div class="flex mt-4 border-2 border-gray-300 p-4 rounded">
            <form>
                <form method="GET" action="{{ route('efad.search') }}">
                    <input autocomplete="off" type="search" name="search"
                        class="w-96 bg-white pr-12 py-2 focus:outline-none rounded-lg text-gray-400">
                    <button class="bg-sky-500 text-white p-2 rounded mr-2" type="submit">ابحث</button>
                </form>
        </div>
        <div class="flex justify-between flex-wrap">
            @foreach ($blog as $value)
                <div class="pt-2 bg-white shadow-lg rounded-lg my-10">
                    <div class="flex justify-center md:justify-center">
                        <img class="w-1/4 object-cover rounded-full border-2 border-green-500"
                            src="data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%20transform%3D%22translate(0%20-1004.362)%22%3E%3Ccircle%20cx%3D%2224%22%20cy%3D%221028.362%22%20r%3D%2224%22%20fill%3D%22%231d67b1%22%2F%3E%3Cpath%20style%3D%22line-height%3Anormal%3Btext-indent%3A0%3Btext-align%3Astart%3Btext-decoration-line%3Anone%3Btext-decoration-style%3Asolid%3Btext-decoration-color%3A%23000%3Btext-transform%3Anone%3Bblock-progression%3Atb%3Bisolation%3Aauto%3Bmix-blend-mode%3Anormal%22%20fill%3D%22%23fff%22%20fill-rule%3D%22evenodd%22%20d%3D%22M15.48%204.434c-3.021%200-5.48%202.469-5.48%205.5%200%203.03%202.459%205.5%205.48%205.5%203.022%200%205.48-2.47%205.48-5.5.001-3.031-2.458-5.5-5.48-5.5zm0%201c2.48%200%204.481%202.007%204.48%204.5%200%202.492-2%204.5-4.48%204.5a4.483%204.483%200%200%201-4.48-4.5c0-2.493%202.001-4.5%204.48-4.5zm-2.98%2011c-4.148%200-7.5%203.368-7.5%207.529v4.516a.5.5%200%200%200%20.5.5h3.854a.5.5%200%200%200%20.292%200h11.708a.5.5%200%200%200%20.292%200H25.5a.5.5%200%200%200%20.5-.5v-4.516c0-4.161-3.352-7.53-7.5-7.53h-6zm0%201h6c3.609%200%206.5%202.902%206.5%206.529v4.016h-3v-4.024a.5.5%200%200%200-.508-.506.5.5%200%200%200-.492.506v4.024H10v-4.024a.5.5%200%200%200-.508-.506.5.5%200%200%200-.492.506v4.024H6v-4.016c0-3.627%202.891-6.53%206.5-6.53z%22%20color%3D%22%23000%22%20font-family%3D%22sans-serif%22%20font-weight%3D%22400%22%20overflow%3D%22visible%22%20transform%3D%22translate(8.5%201011.362)%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                    </div>
                    <div>
                        <h4 class="text-gray-800 font-semibold text-center mt-3">{{ $value->name }}</h4>
                        <p class="mt-4 text-gray-600 text-center">دائرة تقنية المعلومات والاتصالات</p>
                        <p class="mt-2 text-gray-600 text-center">{{ $value->sction }} </p>
                    </div>
                    <div class="flex justify-center mt-4">
                        <a type="button" href="{{ route('EfadEmployee', $value->id) }}"
                            class="text-[#567ee3] hover:text-white border border-[#414cdf] hover:bg-[#443ce1] focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            عرض
                        </a>
                    </div>
                </div>
            @endforeach
             
        </div>
     
    </div>

@endsection
