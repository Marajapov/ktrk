<?php
namespace Model\VacancyNews;

trait ModelScopes {

    public function scopePublished($query)
    {
        return $query->where('published', '=', true);
    }
}
