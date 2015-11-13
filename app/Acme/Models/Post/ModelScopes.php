<?php
namespace Model\Post;

trait ModelScopes {

    public function scopePublished($query)
    {
        return $query->where('published', '=', true);
    }

    public function scopeLanguagekg($query)
    {
        return $query->having('title', '<>', '');
    }

    public function scopeLanguageru($query)
    {
        return $query->having('titleRu', '<>', '');
    }

    public function scopeLanguageKgOrRu($query)
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            return $query->having('title', '<>', '');
        }else{
            return $query->having('titleRu', '<>', '');    
        }        
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
