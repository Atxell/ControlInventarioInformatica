<div>
    @props([
        'name',
        'label' => null,
        'checked' => false,
        'value' => null,
        'id' => null,
    ])

    <div class="flex items-center">
        <input 
            type="checkbox" 
            name="{{ $name }}" 
            id="{{ $id ?? $name }}" 
            value="{{ $value ?? '1' }}"
            {{ $checked ? 'checked' : '' }}
            {{ $attributes->merge(['class' => 'h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded']) }}
        >
        
        @if($label)
            <label for="{{ $id ?? $name }}" class="ml-2 block text-sm text-gray-700">
                {{ $label }}
            </label>
        @endif
    </div>
</div>