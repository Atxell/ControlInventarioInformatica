<div class="relative">
    <input 
        type="text" 
        name="{{ $name }}" 
        id="{{ $name }}"
        value="{{ old($name, $value) }}" 
        placeholder="{{ $placeholder }}"
        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
    >
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        
    </div>
</div>