<?php
namespace Model\Channel;

trait ModelScopes {

    public function scopePublished($query)
    {
        return $query->where('published', '=', true);
    }

    public function scopeGeneral($query)
    {
        return $query->where('name', '=', 'general')->first();
    }

    public function scopeName($query, $name = "general")
    {
        return $query->where('name', '=', $name)->first();
    }

}
