<?php
/**
 * Here is your custom functions.
 */
function ok(string $message, mixed $data = null, int $statusCode = 200): \support\Response
{
    return response(json_encode([
        'message' => $message,
        'success' => true,
        'data' => $data
    ]), $statusCode, [
        'Content-Type' => 'application/json'
    ]);
}

function notOk(string $message, mixed $data = null, int $statusCode = 400): \support\Response
{
    return response(json_encode([
        'message' => $message,
        'success' => false,
        'data' => $data
    ]), $statusCode, [
        'Content-Type' => 'application/json'
    ]);
}