<?php

namespace Modules\Ship\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

trait ResponseTrait
{
    public function response(JsonResource $message, $status = 200, array $headers = [], $options = 0): JsonResponse
    {
        return $message->response()->setStatusCode($status)->withHeaders($headers);
    }

    public function created(JsonResource $message, $status = 201, array $headers = [], $options = 0): JsonResponse
    {
        return $message->response()->setStatusCode($status)->withHeaders($headers);
    }

    public function noContent($status = 204): JsonResponse
    {
        return new JsonResponse(null, $status);
    }
}
