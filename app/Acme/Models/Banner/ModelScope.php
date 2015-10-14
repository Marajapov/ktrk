<?php
namespace Model\Banner;

trait ModelScopes {

    public function scopePublished($query)
    {
        return $query->where('published', '=', true);
    }

    public function scopeName($query, $name = "general")
    {
        return $query->where('name', '=', $name)->first();
    }

}
