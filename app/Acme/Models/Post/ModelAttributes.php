<?php
namespace Model\Post;

trait ModelAttributes
{
    public function getTagListAttribute()
    {
        return isset($this->id) ? $this->tags->lists('name')->toArray() : [];
    }

}
