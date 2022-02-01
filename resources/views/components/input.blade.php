@props(['type' => 'text','name','placeholder'])
<input type="{{ $type }}" name="{{ $name }}"  placeholder="{{ $placeholder }}"
        class="@error('{{ $name }}')
          invalid
        @enderror"
>
@error('{{ $name }}')
         <p class="error">{{ $message }}</p>   
@enderror