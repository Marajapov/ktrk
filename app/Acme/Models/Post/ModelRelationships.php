<?php
namespace Model\Post;

trait ModelRelationships
{
    public function category()
    {
        $category_id = $this->category_id;
        $category = \Model\Category\ModelName::where('id',$category_id)->first();
        
        return $this->belongsTo(\Model\Category\ModelName::class, 'category_id');
    }
    public function comments()
    {
        $comments = \Model\Comment\ModelName::where('resourceId', $this->id)->where('approved', true)->get();
        return $comments;
    }

    public function owner()
    {
        return $this->belongsTo(\Model\User\ModelName::class, 'owner_id');
    }

    public function channel()
    {
        return $this->belongsTo(\Model\Channel\ModelName::class, 'channel_id');
    }

    public function tags()
    {
        return $this->morphToMany(\Model\Tag\Tag::class, 'taggable');
    }

    public function kyrgyzradioProjects() // FromPost
    {
        return $this->belongsTo(\Model\Project\ModelName::class, 'kyrgyzradioProgram');
    }
    
}
