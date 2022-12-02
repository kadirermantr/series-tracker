<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <ul>
                        @foreach($seriesAll as $series)
                            <li>
                                <a href="{{ route('series.show', $series->id) }}">
                                    Name: {{ $series->name }}<br />
                                    Season: {{ $series->season ?? '-' }}<br />
                                    Episode: {{ $series->episode ?? '-' }}<br />
                                    Time: {{ $series->time ?? '-' }}
                                </a>
                            </li>

                            <br /><br />
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
