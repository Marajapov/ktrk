<?php
namespace Model\VacancyNews;

use Illuminate\Database\Eloquent\Model;

class ModelName extends Model
{
    use ModelHelpers, ModelRelationships, ModelScopes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vacancynews';
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

    public function getShortDesc() 
    {
        return $this->shortDescription;
    }

    public function getShortDescRu() 
    {
        return $this->shortDescriptionRu;
    }

    public function getShortDescOne()
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            return $this->shortDescription;
        } else {
            return $this->shortDescriptionRu;
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

    public function getFullMonth()
    {
        $fullDate = $this->created_at;
        $MonthRu = date('m', strtotime($fullDate));

        $JanuaryRu = 'Январь';
        $FebruaryRu = 'Февраль';
        $MarchRu = 'Март';
        $AprilRu = 'Апрель';
        $MayRU = 'Май';
        $JuneRU = 'Июнь';
        $JulyRu = 'Июль';
        $AugustRU = 'Август';
        $SeptemberRU = 'Сентябрь';
        $OctoberRu = 'Октябрь';
        $NovemberRu = 'Ноябрь';
        $DecemberRu = 'Декабрь';

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

    public function getDateFormatted()
    {
        $fullDate = $this->created_at;
        $date = date('d/m/Y', strtotime($fullDate));
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

    public function getFileBig()
    {
        return $this->thumbnail_big;
    }

    public function getThumbnailDesc()
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            return $this->thumb_desc;
        }else{
            return $this->thumb_desc_ru;
        }
    }   

    public function getPublished()
    {
        return $this->published;
    }

}
