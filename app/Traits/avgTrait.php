<?php

namespace App\Traits;

use App\Models\Review;

trait avgTrait
{


    public function avgRating($place)

    {
        // dd( $place->reviews());


        $avg = $place->reviews()->selectRaw('avg(service_rating) service, avg(quality_rating) quality, avg(cleanliness_rating) cleanliness, avg(pricing_rating) pricing')->first();

        $total = array_sum($avg->toArray()) / 4;
        // dd($avg);
        return [
            'total' => $total,
            'service' => $avg->service,
            'quality' => $avg->quality,
            'cleanliness' => $avg->cleanliness,
            'pricing' => $avg->pricing,
        ];
    }
}
