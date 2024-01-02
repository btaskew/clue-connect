<x-layout>
    <section class="container mx-auto px-6 py-12 h-full flex flex-col items-center" style="max-width: 1000px">
        <header class="flex justify-center">
            <h1>
                <img src="/logo.svg" alt="Clue Connect" class="w-96">
            </h1>
        </header>

        <h2 class="mt-10 font-semibold text-2xl text-tertiary">Can you find the link between these four questions?</h2>

        <livewire:question-card  />
    </section>
</x-layout>
