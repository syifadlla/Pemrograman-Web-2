<x-filament::page>
    {{-- Header: Oren ke Biru --}}
    <div class="rounded-2xl p-6 shadow-xl text-white mb-8" style="background: linear-gradient(to right, #f97316, #3b82f6);">
        <h2 class="text-3xl font-extrabold">👋 Selamat Datang</h2>
        <p class="mt-2 text-lg">Selamat datang di sistem manajemen parkir kampus.</p>
    </div>

    {{-- Kalender Hari Ini --}}
    <div class="bg-white rounded-2xl shadow-md p-4 mb-6">
        <h3 class="text-xl font-semibold text-blue-700 mb-3">📅 Kalender Hari Ini</h3>
        <div class="text-gray-800">
            <p>{{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</p>
        </div>
    </div>
</x-filament::page>
