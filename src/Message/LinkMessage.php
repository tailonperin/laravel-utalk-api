<?php


namespace Tailonperin\LaravelUtalkApi\Message;


class LinkMessage extends Base
{
    protected $title;
    protected $description;
    protected $thumbLink;
    protected $link;

    protected function cmd()
    {
        return 'link';
    }

    public function addLink($link)
    {
        $this->link = $link;
        return $this;
    }

    public function addThumbnail($link)
    {
        $this->thumbLink = $link;
        return $this;
    }

    public function addTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function addDescription($desc)
    {
        $this->description = $desc;
        return $this;
    }

    protected function extraParams()
    {
        return [
            'link' => $this->link,
            'thumb' => $this->thumbLink,
            'title' => $this->title,
            'desc' => $this->description,
        ];
    }
}
