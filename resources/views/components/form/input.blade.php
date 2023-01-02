<label>
    <span class="block cursor-default font-semibold mb-1 w-full">{{ $label ?? $slot ?? '' }}</span>
    <input class="block w-full" type="{{ $type ?? 'text' }}" value="{{ $value ?? '' }}" wire:model="{{ $wireModel ?? '' }}" />
    @error($wireModel)<span class="italic text-sm text-red-600">{{ $message }}</span>@enderror 
</label>
