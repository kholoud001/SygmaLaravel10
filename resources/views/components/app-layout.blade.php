<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="md:flex hidden bg-[#008080] w-52 h-screen justify-between flex-col fixed">
        <div class="flex flex-col gap-4 mt-8">
            <div class="bg-[#009999] h-fit">
                <img src="{{ asset('images/SygmaLogo.png') }}" class="px-2 py-2" alt="">
            </div>

            <div class="bg-[#009999] h-fit flex flex-col py-4 gap-4">
                <div class="flex items-center flex-col px-4">
                    <a class="w-full text-center text-white text-[1.1rem] bg-[#00B3B3] p-2 rounded-lg font-bold" href="{{ route('dashboard') }}"><i class="fa-solid fa-chart-simple mr-2"></i>Dashboard</a>
                </div>

                <div class="flex items-center flex-col px-4">
                    <a class="w-full text-center text-white text-[1.1rem] bg-[#00B3B3] p-2 rounded-lg font-bold" href="#"><i class="fa-solid fa-newspaper mr-2"></i>Rapports</a>
                </div>

                <div class="flex items-center flex-col px-4">
                    <a class="w-full text-center text-white text-[1.1rem] bg-[#00B3B3] p-2 rounded-lg font-bold" href="#">
                        <i class="fa-solid fa-newspaper mr-2"></i>Etapes
                    </a>
                </div>
                
            </div>
        </div>
        <div class="bg-[#009999] h-fit flex flex-col justify-center px-4 py-4">
        <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-center text-white text-[1.1rem] p-2 bg-[#00B3B3] rounded-lg font-bold">
                    <i class="fa-solid fa-right-from-bracket mr-2"></i>{{ Auth::check() ? 'Se déconnecter' : 'Login' }}
                </button>
            </form>
        </div>
    </div>
    <div class="md:hidden block h-fit bg-[#008080]">
        <div class="w-full h-full flex items-center justify-center flex-col">
            <div class="flex flex-row w-full h-full justify-between items-center px-4">
                <img src="{{ asset('images/SygmaLogo.png') }}" class="w-fit pt-4 pb-1" alt="">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-[#009999] h-fit w-fit px-2 py-1 rounded-full text-white text-2xl font-bold">
                        <i class="fa-solid fa-right-from-bracket mr-2"></i>{{ Auth::check() ? 'Se déconnecter' : 'Login' }}
                    </button>
                </form>            </div>
            <div class="flex flex-row pb-4 gap-2">
                <a class="bg-[#009999] px-2 py-1 rounded-full text-white text-2xl font-bold" href="{{ route('dashboard') }}"><i class="fa-solid fa-chart-simple mr-2"></i>Dashboard</a>
                <a class="bg-[#009999] px-2 py-1 rounded-full text-white text-2xl font-bold" href="#"><i class="fa-solid fa-newspaper mr-2"></i>Rapports</a>
                <a class="bg-[#009999] px-2 py-1 rounded-full text-white text-2xl font-bold" href="#"><i class="fa-solid fa-bell mr-2"></i>Notifications</a>
            </div>
        </div>
    </div>
    <div class="p-4 md:ml-52 flex gap-2 flex-col">
        {{ $slot }}
    </div>
</body>
</html>
