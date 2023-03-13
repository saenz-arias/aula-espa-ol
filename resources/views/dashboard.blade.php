<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
                    <video width="520" height="340" controls>
                    <source src="https://vimeo.com/795071696">
                    <!-- <source src="movie.ogg" type="video/ogg"> -->
                    <iframe src="https://player.vimeo.com/video/795071696?h=cb60f8b4fa" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    Your browser does not support the video tag.
                    </video>
        </div>
    </div>
</x-app-layout>
