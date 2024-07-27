<x-filament-widgets::widget>
    <x-filament::section>
        <p class="text-lg mb-2">Navigasi</p>
        <ul class="list-disc">
            <li>
                <a href="{{route('home')}}">Homepage</a>
            </li>
            @if(!is_null(auth()->user()->kelompok))
            <li>
                <a href="{{route('filament.kompak.pages.dashboard')}}">Login ke Dashboard Kompak</a>
            </li>
            @endif
            @if(auth()->user()->is_admin)
            <li>
                <a href="{{route('filament.admin.pages.dashboard')}}">Login ke  Dashboard Admin</a>
            </li>
            @endif
        </ul>
    </x-filament::section>
</x-filament-widgets::widget>
