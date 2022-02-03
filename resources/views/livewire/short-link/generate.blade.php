<div>
    <form wire:submit.prevent="submit">
        <label for="link">Link</label>
        <input type="url" wire:model="link" id="link">
        <button type="submit">Generate</button>
        @error('link') <p><span class="error">{{ $message }}</span></p> @enderror
    </form>

    @isset($shortLink)
        <p>Original Link: {{$link}}</p>
        <p>Short Link: <strong>{{$shortLink}}</strong></p>
    @endisset
</div>
