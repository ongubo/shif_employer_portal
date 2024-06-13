<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

function get_org_details($data)
{
    $request_data = $data;

    $response = Http::timeout(360000)->withHeaders([
        'Content-type' => 'application/json',
        'Accept' => 'application/json',
        'X-NSSF-API-KEY' => config('app.NSSF_API_KEY'),
    ])->post(config('app.NSSF_URL') . '/api/partner/validate', $request_data);

    Log::channel('app')->info('Validate organization' . json_encode([
        'type' => 'get organization details ',
        'request' => $request_data,
        'response' => $response->json(),
        'date' => Carbon::now(),
    ]));
    return $response;
}