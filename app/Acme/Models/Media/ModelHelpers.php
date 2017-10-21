<?php
namespace Model\Media;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

trait ModelHelpers
{

    public function incrementViewed($step = 1)
    {
        $this->viewed += $step;
        $this->save();
    }

    public function isImage()
    {
        return $this->type == 'image';

    }

    public static function customPaginate($items,$perPage)
    {
        //Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Create a new Laravel collection from the array data
        $collection = new Collection($items);

        //Define how many items we want to be visible in each page
        $perPage = $perPage;

        //Slice the collection to get the items to display in current page
        $currentPageSearchResults = $collection->slice($currentPage * $perPage, $perPage)->all();

        //Create our paginator and pass it to the view
        $paginatedSearchResults = new LengthAwarePaginator($currentPageSearchResults, count($collection), $perPage);

       return $paginatedSearchResults;
    }
}
