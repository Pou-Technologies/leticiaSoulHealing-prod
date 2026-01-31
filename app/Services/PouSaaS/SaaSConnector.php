<?php

namespace App\Services\PouSaaS;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SaaSConnector
{
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.pou_saas.url');
        $this->apiKey = config('services.pou_saas.key');
    }

    public function sendLead(array $data)
    {
        return $this->sendRequest('post', '/api/leads', $data);
    }

    public function sendSale(array $data)
    {
        return $this->sendRequest('post', '/api/sales', $data);
    }

    protected function sendRequest($method, $endpoint, $data)
    {
        if (!$this->baseUrl || !$this->apiKey) {
            Log::warning('PouSaaS: Missing configuration.');
            return null;
        }

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Accept' => 'application/json',
            ])->$method($this->baseUrl . $endpoint, $data);

            if ($response->failed()) {
                Log::error('PouSaaS Error: ' . $response->body());
            }

            return $response->json();
        } catch (\Exception $e) {
            Log::error('PouSaaS Exception: ' . $e->getMessage());
            return null;
        }
    }
}
