<?php


namespace Tailonperin\LaravelUtalkApi\Message;


class MediaMessage extends Base
{
    protected $link;

    protected function cmd()
    {
        return 'media';
    }

    public function addMedia($link)
    {
        $this->link = $link;

        return $this;
    }

    protected function extraParams()
    {
        return [
            'link' => $this->link
        ];
    }
}
