<?php
namespace Model\Post;

trait ModelScopes {

    public function scopePublished($query)
    {
        return $query->where('published', '=', true);
    }

    public function scopeType($query, $type = "post")
    {
        $type = in_array($type, ['post', 'post'])? $type : "post";

        return $query->where('type', '=', $type);
    }

    public function scopeGeneral($query, \Model\Channel\ModelName $channel = null)
    {
        return $query->where('general', '=', true)->orWhere('channel_id', '=', $channel->id());
    }

}
