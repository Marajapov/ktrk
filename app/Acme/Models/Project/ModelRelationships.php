<?php
namespace Model\Project;

trait ModelRelationships
{
	public function program()
    {
        return $this->hasMany(\Model\Post\ModelName::class, 'dostukProgram');
    }

    public function oneprogram()
    {
        return $this->hasMany(\Model\Post\ModelName::class, 'birinchiProgram');
    }
}
