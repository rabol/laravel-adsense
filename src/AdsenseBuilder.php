<?php

namespace Rabol\Adsense;

class AdsenseBuilder
{
    public function show($name)
    {
        return view('adsense::adsense')->with([
            'ad_client'                 => config("adsense.client_id"),
            'ad_style'                  => config("adsense.ads.$name.ad_style", "display:block;"),
            'ad_slot'                   => config("adsense.ads.$name.ad_slot", null),
            'ad_format'                 => config("adsense.ads.$name.ad_format", null),
            'ad_full_width_responsive'  => config("adsense.ads.$name.ad_full_width_responsive", null)
        ]);
    }
}
