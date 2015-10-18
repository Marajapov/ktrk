<?php
namespace Model\MediaCategory;

use Illuminate\Database\Eloquent\Model;

class ModelName extends Model
{
    use ModelHelpers, ModelScopes, ModelRelationships;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'media_category';
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

    public function getName()
    {
        return $this->name;
    }

    public function getNameRu()
    {
        return $this->name_ru;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getTitleRu()
    {
        return $this->title_ru;
    }

    public function getResourceType()
    {
        return $this->resource_type;
    }

}
