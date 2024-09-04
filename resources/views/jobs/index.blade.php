<x-layout>
    <div class="space-y-12">


        <section class="text-center">
            <h1 class="text-4xl font-bold mb-6">Let's find your next Job</h1>
            <form>
                <input type="text" class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl" placeholder="Web Developer..." />
            </form>
        </section>


        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featured as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-3">
                @foreach ($tags as $tag)
                    <x-tags size="base" :tag="$tag" />
                @endforeach
            </div>
        </section>


        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :job="$job" />
                @endforeach
            </div>

        </section>
    </div>

</x-layout>
