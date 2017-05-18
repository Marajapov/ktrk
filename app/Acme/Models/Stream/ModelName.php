<?php
namespace Model\Stream;

use Illuminate\Database\Eloquent\Model;

class ModelName extends Model
{
    use ModelHelpers, ModelRelationships, ModelScopes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'streams';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $guarded = ['id'];
    // protected $fillable = [];

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

    public function getStreamUrl()
    {
        return $this->streamUrl;
    }

    public function getPublished()
    {
        return $this->published;
    }

    public function getFile()
    {
        return $this->file;
    }
    public function getFileBig()
    {
        return $this->file_big;
    }

}
