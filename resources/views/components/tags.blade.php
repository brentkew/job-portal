@props(["tag","size"=> "base"])

@php
    $classess = "bg-white/10 px-3 py-1 rounded-xl font-bold hover:bg-white/25 transition-colors duration-300";
    if($size ==='base') {
        $classess .= " px-2 py-1 rounded-full text-sm/[20px]";
    }

    if($size ==='small') {
        $classess .= " text-2xs";
    }
@endphp


<a class="{{$classess}}" href="/tags/{{ strtolower($tag->name) }}">
    {{ $tag->name }}
</a>
