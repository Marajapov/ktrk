<?php
namespace Model\Media;

trait ModelRelationships
{
    public function users()
    {
        return $this->hasMany(\Model\User\ModelName::class, 'user');
    }

    public function channel_name()
    {
        return $this->hasMany(\Model\Channel\ModelName::class, 'channel_id');
    }

    public function videoType()
    {
        return $this->hasOne(\Model\MediaCategory\ModelName::class, 'videoType');
    }

    public function hasProject()
    {
        return $this->belongsTo(\Model\Project\ModelName::class, 'program');
    }

    public function mediaHasCategory()
    {
        return $this->hasMany(\Model\MediaCategory\ModelName::class, 'videoType');
    }
}
