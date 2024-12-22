<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased overflow-x-hidden">
    <div class="min-h-screen flex flex-col sm:justify-center items-center">
        <div class="w-[1920px] h-[1080px] relative bg-white">
            <div class="w-[276px] h-auto left-96 top-0 fixed">
                <div class="w-[276px]  h-auto left-0 top-0 absolute bg-gradient-to-t from-[#f9b115] via-[#d15519] to-red-700">
                    @if(Auth::user()->usertype == 'admin')
                        @include('components.sidebar_admin')
                    @else
                        @include('components.sidebar')
                    @endif
                </div>
            </div>
            <div class="w-[600px] h-auto left-[618px] top-0 absolute">
                <div class="w-[600px] h-auto left-0 top-0 bg-white rounded-[20px] shadow">
                    <div class="w-[599px] h-[53px] left-0 top-0 bg-gradient-to-b from-[#b21c1c] via-[#b32121] to-white rounded-[20px]">
                        {{ $header }}
                    </div>
                    <div class="w-[599px] h-px left-0 top-[52px] bg-white"></div>
                    {{ $slot }}
                </div>
            </div>

            <div class="w-[360px] h-[1000px] right-96 top-0 fixed">
                <div class="w-[360px] h-[1000px] left-0 top-0 absolute bg-gradient-to-t from-[#f9b115] via-[#d25619] to-red-700"></div>

                @if (Route::has('register'))
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-[230px] h-[50px] left-[65px] top-[800px] absolute bg-white rounded-[50px] border border-black">
                        <div class="left-[57px] top-[13px] absolute text-[#161616] text-[19px] font-bold font-['Inter']"> Đăng xuất </div>
                    </button>
                </form>
                @endif
                <div style="width: 252px; height: 30px; left: 54px; top: 54px; position: absolute">
                    <div style="width: 200px; height: 30px; padding-left: 15px; padding-right: 15px; padding-top: 6px; padding-bottom: 6px; left: 52px; top: 0px; position: absolute; background: white; border-radius: 15px; border: 1px black solid; justify-content: flex-start; align-items: center; gap: 50px; display: inline-flex">
                        <div style="color: black; font-size: 15px; font-family: Inter; font-weight: 700; word-wrap: break-word">Chọn khu vực</div>
                        <div style="width: 18px; height: 14px; transform: rotate(-180deg); transform-origin: 0 0; border: 1px black solid"></div>
                    </div>
                    <div style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                        <div style="width: 22.50px; height: 22.50px; left: 3.75px; top: 3.75px; position: absolute; border: 3px #1E1E1E solid"></div>
                    </div>
                </div>
            </div>

            <div class="w-[360px] h-[1080px] relative">
                <div class="w-[360px] h-[1000px] right-96 top-0 fixed">
                    <div class="w-[360px] h-[1000px] left-0 top-0 absolute bg-gradient-to-t from-[#f9b115] via-[#d25619] to-red-700"></div>

                    <form method="post" action="{{ route('Search') }}" role="none">
                    @csrf
                    <div class="w-[360px] h-[30px] top-[54px] absolute">
                            <input class="w-[360px] h-[30px] px-[15px] py-1.5 top-0 absolute bg-white rounded-[15px] border border-black justify-start items-center gap-[50px]" placeholder="Chọn khu vực" name="search"></input>
                        <div class="w-[30px] h-[30px] left-0 top-0 absolute  overflow-hidden"></div>
                    </div>
                    </form>    
                    @if (Route::has('register'))
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-[230px] h-[50px] left-[65px] top-[900px] absolute bg-white rounded-[50px] border border-black">
                            <div class="left-[57px] top-[13px] absolute text-[#161616] text-[19px] font-bold font-['Inter']"> Đăng xuất </div>
                        </button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>