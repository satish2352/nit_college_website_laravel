<?php
namespace App\Http\Services\Website\Facilities;

use App\Http\Repository\Website\Facilities\FacilitiesRepository;

// use App\Marquee;
use Carbon\Carbon;


class FacilitiesServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new FacilitiesRepository();
    }

    public function getPolytechniCampus()
    {
        try {
            return $this->repo->getPolytechniCampus();
        } catch (\Exception $e) {
            return $e;
        }
    } 

    public function getPolytechniHostel()
    {
        try {
            return $this->repo->getPolytechniHostel();
        } catch (\Exception $e) {
            return $e;
        }
    } 

    public function getPolytechniLibrary()
    {
        try {
            return $this->repo->getPolytechniLibrary();
        } catch (\Exception $e) {
            return $e;
        }
    } 

    public function getPolytechnicTransportation()
    {
        try {
            return $this->repo->getPolytechnicTransportation();
        } catch (\Exception $e) {
            return $e;
        }
    } 

    public function getPolytechnicOther()
    {
        try {
            return $this->repo->getPolytechnicOther();
        } catch (\Exception $e) {
            return $e;
        }
    }

}