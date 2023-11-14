<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <a href="{{ route('csv-template') }}">Click here to download a template.</a>
    <p 
    class="text-red-500 text-sm mt-10"
    >It's basically a copy of the original file, but a CSV and only the following columns:</p>
    <ul
    class="
        list-disc
        list-inside
        text-sm
        text-red-500"
    >
        <li>Away Team</li>
        <li>Home Team</li>
        <li>Week Number</li>
        <li>yes in the Wager Game column if it's a wager game</li>
    </ul>
<Br /><Br />
    <form wire:submit.prevent="save">
        <div>
            <label for="weekNumber">Week Number:</label>
            <select id="weekNumber" wire:model="weekNumber">
                @for ($i = 1; $i <= 18; $i++) <!-- NFL regular season has 18 weeks -->
                    <option value="{{ $i }}"
                        {{ $i == $weekNumber ? 'selected' : '' }}
                    >Week {{ $i }}</option>
                @endfor
            </select>
        </div>

        <div>
            <label for="csvFile">CSV File:</label>
            <input type="file" id="csvFile" wire:model="csvFile">
        </div>

        <button type="submit">Upload</button>
    </form>
</div>