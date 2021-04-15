<?php

namespace Tailonperin\LaravelUtalkApi\Message;

use Illuminate\Support\Facades\Http;

abstract class Base
{
    const URL = 'https://v1.utalk.chat/send/';
    protected $chatCode;

    protected $to;
    protected $msg;

    protected $toType = self::TO_CONTACT;

    const TO_GROUP = '@g.us';
    const TO_CONTACT = '@c.us';

    public function __construct($chatCode)
    {
        $this->chatCode = $chatCode;
    }

    protected abstract function cmd();

    public function toGroup()
    {
        $this->toType = self::TO_GROUP;
        return $this;
    }

    public function toContact()
    {
        $this->toType = self::TO_CONTACT;
        return $this;
    }

    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

    public function to($to)
    {
        $this->to = $to;
        return $this;
    }

    protected function generateRandomId()
    {
        return base64_encode(uniqid('U'));
    }

    protected function extraParams()
    {
        return [];
    }

    public function enviar()
    {
        $id = $this->generateRandomId();

        $url = self::URL."{$this->chatCode}";

        $paramsDefault = [
            'cmd' => $this->cmd(),
            'id' => $id,
            'to' => ($this->to.$this->toType),
            'msg' => $this->msg,
        ];

        $params = array_merge($paramsDefault, $this->extraParams());

        $response = Http::get($url, $params);

        return [
            'status' => $response->status(),
            'msg_id' => $id,
            'response' => $response->json()
        ];
    }
}
