<div class="w-full p-5 overflow-hidden">
    <div class="flex flex-col sm:flex-row mb-5">
        <div class="flex flex-col items-center sm:w-1/4">
            <img src="{{ \Illuminate\Support\Facades\Storage::url("assets/test.png") }}" alt="" class="w-full">
            <a href="/chat" class="rounded p-2 px-3 bg-mint hover:opacity-50 text-white w-2/3 text-center mt-3">Написать хозяину</a>
        </div>
        <div>
            <span class="text-2xl font-semibold py-5 flex">{{ $pet->name }}</span>
            <ul>
                <li class="flex h-8 py-2 items-center"><img src="{{ \Illuminate\Support\Facades\Storage::url("assets/complete.png") }}" alt="" class="h-full object-contain mr-2">подтвержденная родословная</li>
                <li class="flex h-10 py-2 items-center"><img src="{{ \Illuminate\Support\Facades\Storage::url("assets/prize.png") }}" alt="" class="h-full object-contain mr-2">победитель "Мейн-Куны г. Челябинска 2020"</li>
                <li class="flex h-10 py-2 items-center"><img src="{{ \Illuminate\Support\Facades\Storage::url("assets/girl.svg") }}" alt="" class="h-full object-contain mr-2">пол: женский</li>
                <li class="flex h-6 items-center mt-3">возраст: 3 года</li>
                <li class="flex h-6 items-center">порода: Мейн Кун</li>
            </ul>
        </div>
    </div>
    <div class="py-5 flex h-52 border-t border-b border-gray-300 w-full">
        <img src="{{ \Illuminate\Support\Facades\Storage::url("assets/test.png") }}" alt="" class="mx-5">
    </div>
    <div class="w-full py-5 text-xl">
        <p>
            Some text
        </p>
    </div>
</div>
