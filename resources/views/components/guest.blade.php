       {{-- Guest Master Layout --}}
<x-app title="{{ $title }} - InStocks">
    <x-navbar> </x-navbar>

        <main>
            {{ $slot }}
        </main>

    <x-footer></x-footer>
</x-app>
