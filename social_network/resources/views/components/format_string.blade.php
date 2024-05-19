@if (!empty($content))
<div class="description pb-2">
    @if (strlen($content) > 300)
    <span id="short-content">{{ Str::limit($content, 300) }}</span>
    <span id="full-content" style="display:none;">{{ $content }}</span>
    <a href="javascript:void(0);" id="read-more">Show more</a>
    <a href="javascript:void(0);" id="read-less" style="display:none;">Show less</a>
    @else
    {{ $content }}
    @endif
</div>
@endif