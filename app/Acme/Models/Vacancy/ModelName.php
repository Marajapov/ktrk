<?php
namespace Model\Vacancy;

use Illuminate\Database\Eloquent\Model;

class ModelName extends Model
{
    use ModelHelpers, ModelRelationships, ModelScopes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vacancy';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $guarded = ['id'];
    // protected $fillable = [];

    public static function boot()
    {
        parent::boot();

        self::observe(new ModelObserver);
    }


    public function id()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getTitleRu()
    {
        return $this->titleRu;
    }

    public function getTitleOne()
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            return $this->title;
        } else {
            return $this->titleRu;
        }
    }

    public function getShortdesc() 
    {
        return $this->shortDesc;
    }

    public function getShortdescRu() 
    {
        return $this->shortDescRu;
    }

    public function getShortdescOne()
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            return $this->shortDesc;
        } else {
            return $this->shortDescRu;
        }
    }

    public function getWorktime() 
    {
        return $this->worktime;
    }

    public function getWorktimeRu() 
    {
        return $this->worktimeRu;
    }

    public function getWorktimeOne()
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            return $this->worktime;
        } else {
            return $this->worktimeRu;
        }
    }
    public function getLocation() 
    {
        return $this->location;
    }

    public function getLocationRu() 
    {
        return $this->locationRu;
    }

    public function getLocationOne()
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            return $this->location;
        } else {
            return $this->locationRu;
        }
    }
    public function getContent() 
    {
        return $this->content;
    }

    public function getContentRu() 
    {
        return $this->contentRu;
    }

    public function getContentOne()
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            return $this->content;
        } else {
            return $this->contentRu;
        }
    }
    

    public function getFile()
    {
        return $this->file;
    }

    public function getPublished()
    {
        return $this->published;
    }

}
