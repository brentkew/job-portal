@props(["job"])

<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-logo-color">

    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h3 class="text-xl font-bold">{{ $job->title }}</h3>
        <p class="text-sm mt-3">{{ $job->type }} - From {{ $job->salary }}</p>
        {{-- <span>{{ $job->featured }}</span> --}}
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-2">
            @foreach ($job->tags as $tag)
                <x-tags size="small" :tag="$tag" />
            @endforeach
        </div>
        <x-employer-logo :width="42" />
    </div>

</div>
