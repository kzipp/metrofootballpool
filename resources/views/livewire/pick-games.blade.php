<div class="max-w-4xl mx-auto py-10">
    <h2 class="text-3xl font-bold text-center mb-8">Your Picks</h2>


    {{-- show weeks and update $game->week --}}
    <div class="flex justify-center space-x-4 mb-8">
        Week: <Br />
        @foreach ($weeks as $week)
            <div wire:key={{$week->id}}>
                          <button wire:click="changeWeek({{$week->week_number}})">
                {{ $week->week_number }}
            </button>
        </div>
        @endforeach
    </div>

    @foreach ($games as $game)
        <div wire:key="{{ $game->id }}" class="flex items-center justify-between mb-4 p-4
            @if ($game->wagergame) bg-yellow-500 @endif
            ">
            <div class="flex-1 flex justify-start space-x-4">
                <button wire:click="selectWinner({{ $game->id }}, '{{ $game->away_team }}')"
                    class="px-4 py-2 {{ isset($picks[$game->id]['winner']) && $picks[$game->id]['winner'] === $game->away_team ? 'bg-dolphins-green border-dolphins-green text-white' : 'hover:bg-yellow-200' }} cursor-pointer">
                    <img src="{{ $game->awayTeam->logo}}" 
                        alt="{{ $game->awayTeam->city }} {{ $game->awayTeam->name }}" 
                        class="w-8 h-8 inline-block mr-2">
                </button>
                {{-- an input form under the button to enter the awayScore of this game --}}
                {{-- if role is admin --}}
                @if (auth()->user()->role === 'admin')
                <input type="number" 
                    wire:model.blur="picks.{{ $game->id }}.awayScore"
                    class="w-16 text-center border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"
                    placeholder="0"
                    @if (isset($picks[$game->id]['winner']) && $picks[$game->id]['winner'] === $game->away_team) disabled @endif
                    >
                @endif
                <span
                class="flex items-center"
                >@</span>
                <button wire:click="selectWinner({{ $game->id }}, '{{ $game->home_team }}')"
                    {{-- style="border-color: {{ $game->homeTeam->colors[array_rand($game->homeTeam->colors)] }}; {{ isset($picks[$game->id]['winner']) && $picks[$game->id]['winner'] === $game->home_team ? 'background-color: ' . $game->homeTeam->colors[array_rand($game->homeTeam->colors)] : '' }}" --}}
                    class="px-4 py-2 {{ isset($picks[$game->id]['winner']) && $picks[$game->id]['winner'] === $game->home_team ? 'bg-dolphins-green border-dolphins-green text-white' : 'hover:bg-yellow-200' }} cursor-pointer">
                    <img src="{{ $game->homeTeam->logo}}" 
                        alt="{{ $game->homeTeam->city }} {{ $game->homeTeam->name }}" 
                        class="w-8 h-8 inline-block mr-2">
                </button>
                @if (auth()->user()->role === 'admin')
                <input type="number" 
                wire:model.blur="picks.{{ 
                    $game->id
                 }}.homeScore"
                    class="w-20 text-center border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"
                    placeholder="0"
                    >
                @endif
            </div>
            <div class="flex-1 max-w-xs">
                <select wire:model="picks.{{ $game->id }}.points"
                        wire:change="updateAvailablePoints({{ $game->id }})"
                        class="w-full text-gray-700 h-10 pl-3 pr-6 bg-white hover:border-gray-400 focus:outline-none">
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
                
                {{-- @if (count($picks) !== count($games) || in_array('', array_column($picks, 'points'))) hidden @endif --}}
                {{-- same as above but also only if $week is not empty --}}
                @if (count($games) == 0 || count($picks) !== count($games) || in_array('', array_column($picks, 'points'))) hidden @endif
                >
            Save Picks
        </button>
    </div>
</div>
