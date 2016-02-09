<?php
namespace Model\Quote;

use Illuminate\Database\Eloquent\Model;

class ModelName extends Model
{
    use ModelHelpers, ModelRelationships;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'quotes';
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

    public function getAuthor()
    {
        return $this->author;
    }

    public function getAuthorRu()
    {
        return $this->authorRu;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function getDesc()
    {
        return $this->description;
    }

    public function getDescRu()
    {
        return $this->descriptionRu;
    }
}
