<?php
namespace Model\Post;

trait ModelSetters{
	public function setImage($value)
    {
        $this->image = $value;
    }
	public function setVideo($value)
    {
        $this->video = $value;
    }
}

?>