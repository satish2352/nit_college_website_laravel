<?php
namespace App\Http\Services\Website\Library;

use App\Http\Repository\Website\Library\LibraryRepository;

// use App\Marquee;
use Carbon\Carbon;


class LibraryServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new LibraryRepository();
    }


    public function getLibraryStaff()
    {
        try {
            $dataOutputCategory = $this->repo->getLibraryStaff();
            // dd($dataOutputCategory);
            // die();
            return $dataOutputCategory; // This will never be executed due to dd()
        } catch (\Exception $e) {
            return $e;
        }
    }
    

}