<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                    <form method="POST" action="{{ route('series.store') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Season -->
                        <div class="mt-4">
                            <x-input-label for="season" :value="__('Season')" />
                            <x-text-input id="season" class="block mt-1 w-full" type="number" name="season" :value="old('season')" />
                            <x-input-error :messages="$errors->get('season')" class="mt-2" />
                        </div>

                        <!-- Episode -->
                        <div class="mt-4">
                            <x-input-label for="episode" :value="__('Episode')" />
                            <x-text-input id="episode" class="block mt-1 w-full" type="number" name="episode" :value="old('episode')"  />
                            <x-input-error :messages="$errors->get('episode')" class="mt-2" />
                        </div>

                        <!-- Time -->
                        <div class="mt-4">
                            <x-input-label for="time" :value="__('Time')" />
                            <x-text-input id="time" class="block mt-1 w-full" type="time" name="time" step="1" :value="old('time')" />
                            <x-input-error :messages="$errors->get('time')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Create') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
