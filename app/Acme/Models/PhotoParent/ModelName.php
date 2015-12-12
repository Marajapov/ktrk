<?php
namespace Model\PhotoParent;

use Illuminate\Database\Eloquent\Model;

class ModelName extends Model
{
    use ModelHelpers, ModelScopes, ModelRelationships;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'photoParent';
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
        $lc = app()->getlocale();
        if($lc == 'kg'){
            return $this->name;    
        }else{
            return $this->nameRu;
        }
        
    }

    public function getDescription()
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            return $this->description;    
        }else{
            return $this->descriptionRu;
        }
    }

    public function getFile()
    {
        return $this->file;
    }

}
