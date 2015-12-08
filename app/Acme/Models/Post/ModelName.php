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

    public function getTitle()
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            return $this->title;
        }else{
            return $this->titleRu;
        }
    }

    public function getTitleRuOrKg()
    {
        if(empty($this->title)){
            return $this->titleRu;
        }else{
            return $this->title;
        }
    
    }
    // end title

    public function getContent()
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            return $this->content;
        }else{
            return $this->contentRu;
        }

        return $this->content;
    }

    public function getIsPhoto() // at least one photo
    {
        $image = $this->content;
        
        if (stripos($image, "<img") !== false) {
            return "yes";
        }else{
            return "no";
        }
    }

    public function getIsVideo() // at least one photo
    {
        $image = $this->content;
        
        if (stripos($image, "www.youtube.com") !== false) {
            return "yes";
        }else{
            return "no";
        }
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
        $day = date('j', strtotime($fullDate));
        return $day;
    }

    public function getTime()
    {
        $fullDate = $this->created_at;
        $time = date('G:i', strtotime($fullDate));
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
        $MonthRu = date('m', strtotime($fullDate));
        $January = 'үчтун айы';
        $February = 'Бирдин айы';
        
        $JanuaryRu = 'Янв';
        $FebruaryRu = 'Фев';
        $MarchRu = 'Март';
        $AprilRu = 'Апр';
        $MayRU = 'Май';
        $JuneRU = 'Июнь';
        $JulyRu = 'Июль';
        $AugustRU = 'Авг';
        $SeptemberRU = 'Сент';
        $OctoberRu = 'Окт';
        $NovemberRu = 'Нояб';
        $DecemberRu = 'Дек';

        if($MonthRu == 1){
            $MonthRu = $JanuaryRu;
        }elseif($MonthRu == 2){
            $MonthRu = $FebruaryRu;
        }elseif($MonthRu == 3){
            $MonthRu = $MarchRu;
        }elseif($MonthRu == 4){
            $MonthRu = $AprilRu;
        }elseif($MonthRu == 5){
            $MonthRu = $MayRU;
        }elseif($MonthRu == 6){
            $MonthRu = $JuneRU;
        }elseif($MonthRu == 7){
            $MonthRu = $JulyRu;
        }elseif($MonthRu == 8){
            $MonthRu = $AugustRU;
        }elseif($MonthRu == 9){
            $MonthRu = $SeptemberRU;
        }elseif($MonthRu == 10){
            $MonthRu = $OctoberRu;
        }elseif($MonthRu == 11){
            $MonthRu = $NovemberRu;
        }elseif($MonthRu == 12){
            $MonthRu = $DecemberRu;
        }
        return $MonthRu;
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
