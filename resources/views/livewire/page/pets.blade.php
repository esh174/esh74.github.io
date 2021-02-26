<div class="grid sm:grid-cols-3 gap-5 p-5">
    @foreach($pets as $pet)
        <div class="card w-full flex flex-col rounded p-5 border border-gray-400 transition transition-shadow duration-300 ease-in-out hover:shadow-2xl">
            <div class="card-image relative">
                <img src="{{ \Illuminate\Support\Facades\Storage::url("assets/test.png") }}">
                <span class="card-title absolute bottom-5 text-2xl w-full px-4">{{ $pet->name }}</span>
            </div>
            <div class="card-content py-5 px-4">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action rounded h-10 flex justify-center items-center font-thin text-xl text-mint hover:bg-mint hover:text-white">
                <a href="/{{ $pet->id }}">Подробнее</a>
            </div>
        </div>
    @endforeach
</div>
