<?php
namespace Model\Media;

use Illuminate\Database\Eloquent\Model;

class ModelName extends Model
{
    use ModelHelpers, ModelRelationships, ModelScopes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'medias';
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

    public function getName()
    {
        return $this->name;
    }

    public function getNameRu()
    {
        return $this->nameRu;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getPublished()
    {
        return $this->published;
    }

    public function getViewed()
    {
        return $this->viewed;
    }

    public function getContent()
    {
        return $this->description;
    }

    public function getUrl()
    {
        return $this->url;

    }

    public function getVideoType()
    {
        return $this->videoType;
    }

    public function getProgram()
    {
        return $this->program;
    }

    public function getProgramName()
    {
        $lc = app()->getlocale();
        $programId = $this->program;
        $programName = \Model\Project\ModelName::where('id','=',$programId)->first();
        $name = $programName->name;
        $nameRu = $programName->nameRu;
        if($lc == 'kg'){
            return $name;
        }else{
            return $nameRu;
        }
        
    }
}
