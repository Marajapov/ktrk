<?php
namespace Model\Stream;

trait ModelHelpers
{
	public function isImage()
    {
        $exists = \Storage::disk('public')->exists($this->getFile());

        $type = $exists ? \Storage::disk('public')->mimeType($this->getFile()) : '';

        return in_array($type, ['image/png', 'image/jpg', 'image/jpeg', 'image/gif', 'image/svg+xml']);
    }

    public function incrementViewed($step = 1)
    {
        $this->viewed += $step;
        $this->save();
    }
    
}
