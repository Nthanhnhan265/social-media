@if (!empty($content))
<div class="description pb-2">
    @if (strlen($content) > 300)
    <div class="long-text">
        <span id="short-content" class="short">{{ Str::limit($content, 300) }}</span>
        <span id="full-content" class="full" style="display:none;">{{ $content }}</span>
        <div id="read-more" class = "readmore-btn">Show more</div>
        <div id="read-less" class = "readless-btn" style="display:none;">Show less</div>
    </div>
    @else
    {{ $content }}
    @endif
</div>
@endif