<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

        <a href="" class="btn-link btn-lg mb-2">+ New Note</a>

            @forelse ($notes as $note)

                <div class="my-6 p-6 bg-white dark:bg-gray-800 border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl dark:text-gray-100">
                        {{ $note->title }}
                    </h2>
                    <p>
                        {{ Str::limit($note->text, 200) }}
                    </p>
                    <span class="text-gray-500 text-sm">
                        {{ $note->updated_at->diffForHumans() }}
                    </span>
                </div>
            @empty
                <div class="my-6 p-6 bg-white dark:bg-gray-800 border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <p>
                        No notes yet.
                    </p>
                </div>
            @endforelse
            {{ $notes->links() }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
