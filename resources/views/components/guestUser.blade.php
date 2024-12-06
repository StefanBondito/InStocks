       {{-- Guest Master Layout --}}
<x-app title="{{ $title }} - InStocks">
    <x-userNavbar> </x-userNavbar>

        <main>
            {{ $slot }}
        </main>

    <x-footer></x-footer>
</x-app>
