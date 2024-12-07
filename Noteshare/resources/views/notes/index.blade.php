<x-app-layout>

    @php

    $notes = App\Models\Note::all()->where('user_id', Auth::user()->id);
        @endphp

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach($notes as $note)
                        <li>
                            <p>{{$note->title}}</p>
                        </li>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
