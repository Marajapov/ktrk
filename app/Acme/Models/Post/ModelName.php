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
        $lc = app()->getlocale();
        if($lc == 'kg' && ($this->language == 'languageKg')){
            return $this->title;
        }elseif ($lc = 'ru' && ($this->language == 'languageRu')) {
            return $this->title;
        }elseif($lc = ''){
            return 'default kg';
        }else{
            return 'nothing';
        }
    }

    public function getContent()
    {
        // $lc = app()->getlocale();
        // if($lc == 'kg' || ($this->neutral && trim($this->content_kg) != ""))
        //     return $this->content_kg;

        // return $this->content_ru;

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

    public function getDay()
    {
        $fullDate = $this->created_at;
        $day = date('d', strtotime($fullDate));
        return $day;
    }

    public function getTime()
    {
        $fullDate = $this->created_at;
        $time = date('H-i', strtotime($fullDate));
        return $time;
    }

    public function getYear()
    {
        $fullDate = $this->created_at;
        $year = date('Y', strtotime($fullDate));
        return $year;
    }

    public function getMonthKg()
    {
        $fullDate = $this->created_at;
        $MonthKg = date('m', strtotime($fullDate));
        $January = 'үчтун айы';
        $February = 'Бирдин айы';
        $October = 'Тогуздун айы';
        if($MonthKg == 10){
            $MonthKg = $October;
        }
        return $MonthKg;
    }  

    public function getMonthRu()
    {
        $fullDate = $this->created_at;
        $MonthKg = date('m', strtotime($fullDate));
        $January = 'үчтун айы';
        $February = 'Бирдин айы';
        $October = 'Окт';
        if($MonthKg == 10){
            $MonthKg = $October;
        }
        return $MonthKg;
    }   

    public function getDate()
    {
        $fullDate = $this->created_at;
        $date = date('d-M-Y', strtotime($fullDate));
        return $date;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getFile()
    {
        return $this->thumbnail;
    }

    public function getParentId()
    {
        return $this->parentId;
    }
}
