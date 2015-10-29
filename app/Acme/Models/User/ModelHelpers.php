<?php
namespace Model\User;

trait ModelHelpers
{
    public function isAdmin()
    {
    	return $this->role == 'admin';
    }
}
