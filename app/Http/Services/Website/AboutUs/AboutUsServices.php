<?php
namespace App\Http\Services\Website\AboutUs;

use App\Http\Repository\Website\AboutUs\AboutUsRepository;

// use App\Marquee;
use Carbon\Carbon;


class AboutUsServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new AboutUsRepository();
    }
    public function index()
    {
        try {
            return $this->repo->index();
        } catch (\Exception $e) {
            return $e;
        }
    } 

}