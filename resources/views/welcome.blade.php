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
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-3">
                <x-tags size="base">Tag 1</x-tags>
                <x-tags size="base">Tag 2</x-tags>
                <x-tags size="base">Tag 3</x-tags>
                <x-tags size="base">Tag 4</x-tags>
                <x-tags size="base">Tag 5</x-tags>
                <x-tags size="base">Tag 6</x-tags>
                <x-tags size="base">Tag 7</x-tags>
                <x-tags size="base">Tag 8</x-tags>
                <x-tags size="base">Tag 9</x-tags>
                <x-tags size="base">Tag 10</x-tags>
            </div>
        </section>


        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>

        </section>
    </div>

</x-layout>
