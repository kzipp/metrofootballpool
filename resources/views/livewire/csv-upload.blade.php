<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save">
        <div>
            <label for="weekNumber">Week Number:</label>
            <select id="weekNumber" wire:model="weekNumber">
                @for ($i = 1; $i <= 18; $i++) <!-- NFL regular season has 18 weeks -->
                    <option value="{{ $i }}">Week {{ $i }}</option>
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