<div>
    @props([
        'name',
        'label',
        'options' => [],
        'optionValue' => 'id',
        'optionLabel' => 'name',
        'selected' => null,
        'withEmpty' => false,
        'disabled' => false
    ])

    <div>
        @if($label)
            <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
        @endif
        <select 
            id="{{ $name }}" 
            name="{{ $name }}" 
            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md"
            {{ $disabled ? 'disabled' : '' }}
            {{ $attributes }}
        >
            @if($withEmpty)
                <option value="">Seleccionar...</option>
            @endif
            
            @foreach($options as $option)
                <option 
                    value="{{ $option[$optionValue] }}"
                    {{ $selected == $option[$optionValue] ? 'selected' : '' }}
                >
                    {{ $option[$optionLabel] }}
                </option>
            @endforeach
        </select>
    </div>
</div>