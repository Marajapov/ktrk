<?php
namespace Model\Anons;

trait ModelScopes {

    public function scopePublished($query)
    {
        return $query->where('published', '=', true);
    }

    public function scopeLanguagekg($query)
    {
        return $query->having('name', '<>', '');
    }

    public function scopeLanguageru($query)
    {
        return $query->having('nameRu', '<>', '');
    }

    public function scopeDesckg($query)
    {
        return $query->having('description', '<>', '');
    }

    public function scopeDescru($query)
    {
        return $query->having('descriptionRu', '<>', '');
    }

    public function scopeLanguageKgOrRu($query)
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            return $query->having('name', '<>', '');
        }else{
            return $query->having('nameRu', '<>', '');    
        }        
    }

}
