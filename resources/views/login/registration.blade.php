@extends('pages.main')

@section('content')
    <div class="bg-white h-screen overflow-hidden flex items-center justify-center">
        <div class="bg-gray-700 lg:w-5/12 md:6/12 w-10/12 shadow-3xl rounded-lg">
            <div
                class="bg-gradient-to-r from-sky-600 to-cyan-400 absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 rounded-full p-4 md:p-8">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="#FFF">
                    <path
                        d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z" />
                </svg>
            </div>
            <form class="p-12 md:p-20" action="{{ route('register.post') }}" method="POST">
                @csrf
                <div class="flex items-center text-lg md:mb-4">
                    <svg class="absolute mr-3" width="24" viewBox="0 0 24 24" fill="gray">
                        <path
                            d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z" />
                    </svg>
                    <input type="text" name="name"
                        class="bg-white pr-12 py-2 md:py-4 focus:outline-none w-full rounded-lg text-gray-400" />
                    
                </div>
                @if ($errors->has('name'))
                        <span class="text-sm text-red-500">{{ $errors->first('name') }}</span>
                    @endif


                <div class="flex items-center text-lg md:mb-4">
                    <svg class="absolute mr-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24" fill="gray" id="Layer_1" style="enable-background:new 0 0 512 512;"
                        version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve">
                        <g>
                            <path
                                d="M67,148.7c11,5.8,163.8,89.1,169.5,92.1c5.7,3,11.5,4.4,20.5,4.4c9,0,14.8-1.4,20.5-4.4c5.7-3,158.5-86.3,169.5-92.1   c4.1-2.1,11-5.9,12.5-10.2c2.6-7.6-0.2-10.5-11.3-10.5H257H65.8c-11.1,0-13.9,3-11.3,10.5C56,142.9,62.9,146.6,67,148.7z" />
                            <path
                                d="M455.7,153.2c-8.2,4.2-81.8,56.6-130.5,88.1l82.2,92.5c2,2,2.9,4.4,1.8,5.6c-1.2,1.1-3.8,0.5-5.9-1.4l-98.6-83.2   c-14.9,9.6-25.4,16.2-27.2,17.2c-7.7,3.9-13.1,4.4-20.5,4.4c-7.4,0-12.8-0.5-20.5-4.4c-1.9-1-12.3-7.6-27.2-17.2l-98.6,83.2   c-2,2-4.7,2.6-5.9,1.4c-1.2-1.1-0.3-3.6,1.7-5.6l82.1-92.5c-48.7-31.5-123.1-83.9-131.3-88.1c-8.8-4.5-9.3,0.8-9.3,4.9   c0,4.1,0,205,0,205c0,9.3,13.7,20.9,23.5,20.9H257h185.5c9.8,0,21.5-11.7,21.5-20.9c0,0,0-201,0-205   C464,153.9,464.6,148.7,455.7,153.2z" />
                        </g>
                    </svg>
                    <input type="text" name="email"
                        class="bg-white pr-12 py-2 md:py-4 focus:outline-none w-full rounded-lg text-gray-400" />
                  
                </div>  
                @if ($errors->has('email'))
                        <span class="text-sm text-red-500">{{ $errors->first('email') }}</span>
                  @endif



                <div class="flex items-center text-lg md:mb-4">
                    <svg class="absolute mr-3" viewBox="0 0 24 24" width="24" fill="gray">
                        <path
                            d="m18.75 9h-.75v-3c0-3.309-2.691-6-6-6s-6 2.691-6 6v3h-.75c-1.24 0-2.25 1.009-2.25 2.25v10.5c0 1.241 1.01 2.25 2.25 2.25h13.5c1.24 0 2.25-1.009 2.25-2.25v-10.5c0-1.241-1.01-2.25-2.25-2.25zm-10.75-3c0-2.206 1.794-4 4-4s4 1.794 4 4v3h-8zm5 10.722v2.278c0 .552-.447 1-1 1s-1-.448-1-1v-2.278c-.595-.347-1-.985-1-1.722 0-1.103.897-2 2-2s2 .897 2 2c0 .737-.405 1.375-1 1.722z" />
                    </svg>
                    <input type="password" name="password"
                        class="bg-white pr-12 py-2 md:py-4 focus:outline-none w-full rounded-lg text-gray-400" />
                   
                </div> 
                @if ($errors->has('password'))
                        <span class="text-sm text-red-500">{{ $errors->first('password') }}</span>
                    @endif

            <!--    <div class="flex mb-3">
                      <div class="flex items-center px-4">
                    <input type="checkbox" name="usertype" value="1"
                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox" class="mr-2 text-sm font-medium text-gray-100">
                        ادمن</label>
                </div>
              <div class="flex items-center">
                    <input checked type="checkbox" name="usertype" value="0"
                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checked-checkbox" class="mr-2 text-sm font-medium text-gray-100">مستخدم
                        </label>
                </div>
                </div>
            -->
            <div class="text-white">
<input class="" type="checkbox" name="usertype" value="0" /> مستخدم
<input class="text-white" type="checkbox" name="usertype" value="1" /> ادمن

</div>
                <div class="felx items-center w-1/2 mx-auto">
                    <button
                        class="rounded-lg bg-gradient-to-b from-sky-600 to-cyan-400 hover:bg-gradient-to-r from-sky-700 to-cyan-500 font-medium p-2 md:p-4 text-white uppercase w-full">تسجيل
                    </button>

                </div>
            </form>
        </div>
    </div>
@endsection
