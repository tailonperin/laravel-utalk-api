<?php


namespace Tailonperin\LaravelUtalkApi\Message;


class PlainTextMessage extends Base
{
    protected function cmd()
    {
        return 'chat';
    }
}
