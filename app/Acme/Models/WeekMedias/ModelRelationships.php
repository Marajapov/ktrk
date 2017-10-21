<?php
namespace Model\WeekMedias;

trait ModelRelationships
{
    public function owner()
    {
        return $this->belongsTo(\Model\User\ModelName::class, 'owner_id');
    }
}
