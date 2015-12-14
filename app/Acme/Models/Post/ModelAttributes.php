<?php
namespace Model\Post;

trait ModelAttributes
{
    public function getTagListAttribute()
    {
        return isset($this->id) ? $this->tags->lists('id')->toArray() : [];
    }

    public function getTagListName()
    {
        return isset($this->id) ? $this->tags->lists('name')->toArray() : [];
    }

}
