<?php
namespace Model\Anons;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class ModelName extends Model
{
    use ModelHelpers,ModelRelationships, ModelScopes, SearchableTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'anons';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $guarded = ['id'];
    // protected $fillable = [];

    protected $searchable = [
        'columns' => [
            'id'    => 10,
            'name'   => 10, // order of search, title will be first in listing
            'nameRu'   => 10, // order of search, title will be first in listing
            'description' => 9,
            'descriptionRu' => 9,
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

    public function getNameOne()
    {
        $lc = app()->getlocale();

        if($lc == 'kg'){
            return $this->name;
        } else {
            return $this->nameRu;
        }
    }    

    public function getDesc()
    {
        $lc = app()->getlocale();

        if($lc == 'kg'){
            return $this->description;
        } else {
            return $this->descriptionRu;
        }
    }

    public function getWeekDayOne()
    {
        $lc = app()->getlocale();

        if($lc == 'kg'){
            return $this->weekday;
        } else {
            return $this->weekdayRu;
        }
    }

    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getDateFormatted()
    {
        $fullDate = $this->created_at;
        $date = date('d/m/Y', strtotime($fullDate));
        return $date;
    }

}
