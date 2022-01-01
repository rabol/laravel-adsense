<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client={!! $ad_client !!}"
    @if(isset($ad_crossorigin))
        crossorigin="{!! $ad_crossorigin !!}"
    @endif
></script>
    @if(isset($ad_comment))
        <!-- {{ $ad_comment }} -->
    @endif
<ins class="adsbygoogle"
    @if(isset($ad_style))
    style="{!! $ad_style !!}"
    @endif
    @if(isset($ad_client))
    data-ad-client="{!! $ad_client !!}"
    @endif
    @if(isset($ad_slot))
    data-ad-slot="{!! $ad_slot !!}"
    @endif
    @if(isset($ad_format))
    data-ad-format="{!! $ad_format !!}"
    @endif
    @if(isset($ad_layout))
    data-ad-layout="{!! $ad_layout !!}"
    @endif
    @if(isset($ad_full_width_responsive))
    data-full-width-responsive="{!! $ad_full_width_responsive !!}">
    @endif
</ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>