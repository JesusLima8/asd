<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sensores Disponibles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg transparent-bg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Contenedor de tarjetas -->
                    <div class="flex flex-wrap justify-center gap-6">
                        @foreach ($sensors as $sensor)
                            @if ($sensor->is_visible)
                                <div class="sensor-card w-72" style="background-image: url('{{ $sensor->image ? asset('storage/' . $sensor->image) : asset('default-image.png') }}');">
                                    <div class="sensor-card-overlay">
                                        <h3>{{ $sensor->name }}</h3>
                                        <p><strong>Ubicación:</strong> {{ $sensor->location }}</p>
                                        <p><strong>Latitud:</strong> {{ $sensor->latitude ?? 'No Disponible' }}</p>
                                        <p><strong>Longitud:</strong> {{ $sensor->longitude ?? 'No Disponible' }}</p>
                                        <a href="{{ route('sensors.show', $sensor->id) }}" class="view-more-button">
                                            Ver Más
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
