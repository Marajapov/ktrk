<?php
namespace Model\MediaCategory;

trait ModelScopes {

    public function scopePublished($query)
    {
        return $query->where('published', '=', true);
    }

    public function scopeByCategory($query)
    {
    	return $query->where('resource_type', '=', '1')->first();
    }

}