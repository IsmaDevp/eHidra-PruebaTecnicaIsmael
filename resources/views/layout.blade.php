<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ismael-eHydra</title>
    @livewireStyles

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">




</head>

<body style="background: url({{ asset('images/bg.jpg') }}) no-repeat; background-size: cover;";>


    <!--NAV MENU-->
    <nav class="sticky top-0">
        <div class="h-16 w-full bg-rose-600">
            <div class="w-full h-full flex justify-center items-center">
                <div class="flex h-full items-center  hover:bg-red-800 hover:bg-opacity-50">
                    <div class="mx-4 text-white"> <a href="{{ url('/') }}">Home</a> </div>
                    <div class=" h-8 w-px bg-gray-300"></div>
                </div>
                <div class="flex h-full items-center  hover:bg-red-800 hover:bg-opacity-50">
                    <div class="mx-4 text-white"> <a href="{{ route('gestion.index') }}">User Management</a> </div>
                    <div class=" h-8 w-px bg-gray-300"></div>
                </div>

                <div class="flex h-full  items-center hover:bg-red-800 hover:bg-opacity-50">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    Log Out
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-white">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-white">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>


                </div>
            </div>
        </div>
    </nav>

    @yield('content')


    @livewireScripts
    <!--SCRIPTS-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
</body>

</html>
