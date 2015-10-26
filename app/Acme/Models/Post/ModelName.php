<?php
namespace Model\Post;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class ModelName extends Model
{
    use ModelHelpers, ModelScopes, ModelRelationships, ModelAttributes, SearchableTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $guarded = ['id'];
    // protected $fillable = [];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'title'   => 10, // order of search, title will be first in listing
            'content' => 9,
        ],
    ];

    public static function boot()
    {
        parent::boot();

        self::observe(new ModelObserver);
    }

    public function id()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getViewed()
    {
        return $this->viewed;
    }

    public function getCreated()
    {
        return $this->created_at;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getFile()
    {
        return $this->thumbnail;
    }

    public function getPhoto1()
    {
        return $this->photo1;
    }

    public function getPhoto2()
    {
        return $this->photo2;
    }

    public function getPhoto3()
    {
        return $this->photo3;
    }

    public function getPhoto4()
    {
        return $this->photo4;
    }

    public function getPhoto5()
    {
        return $this->photo5;
    }

    public function getPhoto6()
    {
        return $this->photo6;
    }

    public function getPhoto7()
    {
        return $this->photo7;
    }

    public function getPhoto8()
    {
        return $this->photo8;
    }

    public function getPhoto9()
    {
        return $this->photo9;
    }
    public function getPhoto10()
    {
        return $this->photo10;
    }

    public function getParentId()
    {
        return $this->parentId;
    }
}
