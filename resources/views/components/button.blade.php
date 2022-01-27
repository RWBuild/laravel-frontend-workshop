@if ($type == 'link')
    <a href="{{ $link  }}" class="btn">
    {{ $message }}
    </a>
@else
    <button type="{{ $link }}" class="btn">{{ $message }}</button>
@endif
