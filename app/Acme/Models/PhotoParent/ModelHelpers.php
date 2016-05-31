<?php
namespace Model\PhotoParent;

trait ModelHelpers
{
	public function incrementViewed($step = 1)
    {
        $this->viewed += $step;
        $this->save();
    }
	public function isImage()
    {
        $exists = \Storage::disk('public')->exists($this->getFile());

        $type = $exists ? \Storage::disk('public')->mimeType($this->getFile()) : '';

        return in_array($type, ['image/png', 'image/jpg', 'image/jpeg', 'image/gif']);
    }
}
