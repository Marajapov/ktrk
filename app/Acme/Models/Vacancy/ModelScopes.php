<?php
namespace Model\Vacancy;

trait ModelScopes {

    public function scopePublished($query)
    {
        return $query->where('published', '=', true);
    }
}
