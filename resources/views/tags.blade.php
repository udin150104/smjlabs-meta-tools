@if (!empty($meta['meta']['title']))
    <title>{{ $meta['meta']['title'] }}</title>
@endif

@foreach ($meta['meta'] ?? [] as $name => $content)
    @if($name !== 'title' && !is_null($content))
        <meta name="{{ $name }}" content="{{ $content }}">
    @endif
@endforeach

@foreach ($meta['open_graph'] ?? [] as $property => $content)
    @if (!is_null($content))
        <meta property="{{ $property }}" content="{{ $content }}">
    @endif
@endforeach

@foreach ($meta['twitter'] ?? [] as $name => $content)
    @if (!is_null($content))
        <meta name="{{ $name }}" content="{{ $content }}">
    @endif
@endforeach

@foreach ($meta['security'] ?? [] as $httpEquiv => $content)
    @if (!is_null($content))
        <meta http-equiv="{{ $httpEquiv }}" content="{{ $content }}">
    @endif
@endforeach

@foreach ($meta['misc'] ?? [] as $name => $content)
    @if (!is_null($content))
        <meta name="{{ $name }}" content="{{ $content }}">
    @endif
@endforeach
