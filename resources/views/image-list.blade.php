<x-layout title="Discover images">

    <div class="container-fluid mt-4">

        @include('shared._grid-images', ['images' => $images])

        {{-- pagination --}}
        {{ $images->links() }}
    </div>


</x-layout>
