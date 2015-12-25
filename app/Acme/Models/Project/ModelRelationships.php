<?php
namespace Model\Project;

trait ModelRelationships
{
	public function program()
    {
        return $this->hasMany(\Model\Post\ModelName::class, 'dostukProgram');
    }
}
