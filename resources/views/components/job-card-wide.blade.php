@props(["job"])

<div class="p-4 bg-white/5 rounded-xl flex gap-x-6 border border-transparent hover:border-logo-color">

    <div>
        <x-employer-logo />
    </div>

    <div class="font-bold flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-600">{{ $job->employer->name }}<</a>
        <h3 class="font-bold text-xl mt-2">{{ $job->title }}</h3>
        <p class="text-sm text-gray-600 mt-auto">{{ $job->type }} - From {{ $job->salary }}</p>
        {{-- <span>{{ $job->featured }}</span> --}}
    </div>

    <div class="flex justify-between items-center mt-auto space-x-2">
        @foreach ($job->tags as $tag)
            <x-tags size="small" :tag="$tag" />
        @endforeach
    </div>

</div>
