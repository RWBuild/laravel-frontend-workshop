@props(['type' => 'text', 'name', 'placeholder' => '', 'label' => ''])

<div {{ $attributes->merge(['class' => 'mb-3' ]) }}>
    <label for="dob" class="font-bold leading-9">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
        class="block border border-gray-200 rounded-md w-full py-2 px-2 focus:outline-none"
        placeholder="{{ $placeholder }}" />
    @error($name)
        <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
    @enderror
</div>
