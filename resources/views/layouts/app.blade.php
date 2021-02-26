<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix(path: '/css/app.css') }}">
</head>
<body class="container xl:max-w-screen-xl mx-auto min-h-screen flex flex-col pt-12 sm:pt-24">
    <div id="nav" class="w-full px-7 py-3 sm:py-5 max-h-12 sm:max-h-24 flex flex-col sm:flex-row justify-between items-center fixed top-0 border-b border-gray-400 bg-white z-50 overflow-hidden">
        <div class="flex justify-between w-full sm:w-auto">
            <a href="/" class="h-5 sm:h-10 hover:opacity-50">
                <img src="{{ \Illuminate\Support\Facades\Storage::url('assets/MeetPetlogo.png') }}" alt="" class="h-full object-contain">
            </a>
            <img onclick="opennav(this)" src="{{ \Illuminate\Support\Facades\Storage::url("assets/menu.svg") }}" alt="" class="h-5 sm:hidden">
        </div>
        <ul class="flex flex-col sm:flex-row items-end sm:justify-start sm:h-10 w-full sm:w-auto mt-3 sm:mt-0">
            <li class="flex items-center h-10">
                <a href="" class="h-1/2 hover:opacity-50">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url("assets/find.svg") }}" alt="" class="h-full object-contain sm:mx-3">
                </a>
            </li>
            <li class="flex items-center h-10">
                <a href="/chat" class="h-1/2 hover:opacity-50">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url("assets/chat.svg") }}" alt="" class="h-full object-contain sm:mx-3 sm:mr-6">
                </a>
            </li>
            <li class="flex items-center mt-2">
                <a href="/profile" class="sm:ring-1 ring-mint rounded sm:p-2 sm:px-3 text-mint hover:bg-mint hover:text-white hover:opacity-50">Мой профиль</a>
            </li>
        </ul>
    </div>
    {{ $slot }}

{{--    <script src="{{ mix(path: '/js/app.js') }}"></script>--}}

    <script>
        let nav = document.getElementById('nav')

        document.addEventListener('click', function(ev) {
            console.log(ev.target)
            if (ev.target != nav && !nav.contains(ev.target)) {
                nav.classList.remove('max-h-screen');
            }
        });

        function opennav(el) {
            nav.classList.toggle('max-h-screen')
        }
    </script>
</body>
</html>
