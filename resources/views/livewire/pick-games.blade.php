<div class="max-w-4xl mx-auto py-10">
    <h2 class="text-3xl font-bold text-center mb-8">Your Picks</h2>

    @foreach ($games as $game)
        <div wire:key="{{ $game->id }}" class="flex items-center justify-between mb-4 p-4">
            <div class="flex-1 flex justify-start space-x-4">
                <button wire:click="selectWinner({{ $game->id }}, '{{ $game->away_team }}')"
                    class="px-4 py-2 border-2 border-gray-300 {{ isset($picks[$game->id]['winner']) && $picks[$game->id]['winner'] === $game->away_team ? 'bg-dolphins-green border-dolphins-green text-white' : 'hover:bg-gray-100' }} cursor-pointer">
                    {{ $game->awayTeam->city }} {{ $game->awayTeam->name }}
                </button>
                <span
                class="flex items-center"
                >@</span>
                <button wire:click="selectWinner({{ $game->id }}, '{{ $game->home_team }}')"
                    {{-- style="border-color: {{ $game->homeTeam->colors[array_rand($game->homeTeam->colors)] }}; {{ isset($picks[$game->id]['winner']) && $picks[$game->id]['winner'] === $game->home_team ? 'background-color: ' . $game->homeTeam->colors[array_rand($game->homeTeam->colors)] : '' }}" --}}
                    class="px-4 py-2 border-2 border-gray-300 {{ isset($picks[$game->id]['winner']) && $picks[$game->id]['winner'] === $game->home_team ? 'bg-dolphins-green border-dolphins-green text-white' : 'hover:bg-gray-100' }} cursor-pointer">
                    {{ $game->homeTeam->city }} {{ $game->homeTeam->name }}
                </button>
            </div>
            <div class="flex-1 max-w-xs">
                <select wire:model="picks.{{ $game->id }}.points"
                        wire:change="updateAvailablePoints({{ $game->id }})"
                        class="w-full border-2 border-gray-300 text-gray-700 h-10 pl-3 pr-6 bg-white hover:border-gray-400 focus:outline-none">
                    <option value="">Points</option>
                    @foreach ($availablePoints as $point)
                        @if (!in_array($point, $disabledPoints) || (isset($picks[$game->id]['points']) && $point == $picks[$game->id]['points']))
                            <option value="{{ $point }}" @if (isset($picks[$game->id]['points']) && $point == $picks[$game->id]['points']) selected @endif>
                                {{ $point }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
    @endforeach

    <div class="mt-6 text-center">
        <button wire:click="savePicks" 
                class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50 cursor-pointer"
                
                @if (count($picks) !== count($games) || in_array('', array_column($picks, 'points')))
                hidden @endif>
            Save Picks
        </button>
    </div>
</div>
