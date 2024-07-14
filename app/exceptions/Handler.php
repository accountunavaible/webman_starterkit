<?php

namespace app\exceptions;

use Throwable;
use Webman\Http\Request;
use Webman\Http\Response;

class Handler extends \support\exception\Handler
{
    public function render(Request $request, Throwable $exception): Response
    {
        if ($this->debug) {
            return parent::render($request, $exception);
        }

        return notOk("服务器响应失败", null, 500);
    }
}