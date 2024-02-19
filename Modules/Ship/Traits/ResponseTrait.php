<?php

namespace Modules\Ship\Traits;

use Carbon\Carbon;
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

    public function emptyData(): JsonResponse
    {
        return response()->json([
            'data' =>[],
            'Server_time' => Carbon::now()
        ]);
    }
}
