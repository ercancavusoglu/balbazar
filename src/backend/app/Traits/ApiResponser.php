<?php

namespace App\Traits;

/*
|--------------------------------------------------------------------------
| Api Responser Trait
|--------------------------------------------------------------------------
|
| This trait will be used for any response we sent to clients.
|
*/

use Illuminate\Http\JsonResponse;

trait ApiResponser
{
    /**
     * Return a success JSON response.
     *
     * @param array $data
     * @param string|null $message
     * @param int $code
     * @return JsonResponse
     */
    protected function success(array $data, string $message = null, int $code = 200)
    {
        $response = [
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ];

        if ($data) {
            unset($response['message']);
        }

        return response()->json($response, $code);
    }

    /**
     * Return an error JSON response.
     *
     * @param string|null $message
     * @param int $code
     * @param array $data
     * @return JsonResponse
     */
    protected function error(string $message = null, int $code = 500, $data = []): JsonResponse
    {
        $response = [
            'status' => 'error',
            'message' => $message,
            'data' => $data
        ];

        if (!$data) {
            unset($response['data']);
        }

        return response()->json($response, $code);
    }
}
