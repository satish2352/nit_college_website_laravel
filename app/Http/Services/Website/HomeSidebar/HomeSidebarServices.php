<?php
namespace App\Http\Services\Website\HomeSidebar;

use App\Http\Repository\Website\HomeSidebar\HomeSidebarRepository;

// use App\Marquee;
use Carbon\Carbon;


class HomeSidebarServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new HomeSidebarRepository();
    }


    public function getMandataryDisclosure()
    {
        try {
            $dataOutputCategory = $this->repo->getMandataryDisclosure();
            return $dataOutputCategory; // This will never be executed due to dd()
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getAICTEExtension()
    {
        try {
            $dataOutputCategory = $this->repo->getAICTEExtension();
            return $dataOutputCategory; // This will never be executed due to dd()
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getMSBTE()
    {
        try {
            $dataOutputCategory = $this->repo->getMSBTE();
            return $dataOutputCategory; // This will never be executed due to dd()
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getPolytechnicAffiliationCertificates()
    {
        try {
            $dataOutputCategory = $this->repo->getPolytechnicAffiliationCertificates();
            return $dataOutputCategory; // This will never be executed due to dd()
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getServiceRule()
    {
        try {
            $dataOutputCategory = $this->repo->getServiceRule();
            return $dataOutputCategory; // This will never be executed due to dd()
        } catch (\Exception $e) {
            return $e;
        }
    }


    // public function getAntiRagging()
    // {
    //     try {
    //         $dataOutputCategory = $this->repo->getAntiRagging();
      
    //         return $dataOutputCategory; // This will never be executed due to dd()
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }
    public function getAntiRagging()
{
    try {
        $dataOutputCategory = $this->repo->getAntiRagging();
        return $dataOutputCategory;
    } catch (\Exception $e) {
        throw $e;
    }
}

public function getInternalComplaint()
{
    try {
        $dataOutputCategory = $this->repo->getInternalComplaint();
        return $dataOutputCategory;
    } catch (\Exception $e) {
        // Log the exception
        \Log::error('Error in Service getInternalComplaint: ' . $e->getMessage());
        return null; // Return null in case of error
    }
}

public function getAboutSCST()
{
    try {
        $dataOutputCategory = $this->repo->getAboutSCST();
      
        return $dataOutputCategory;
    } catch (\Exception $e) {
        \Log::error('Error in Service getAboutSCST: ' . $e->getMessage());
        return null;
    }
}

   
public function getAcademicCalendar()
{
    try {
        $dataOutputCategory = $this->repo->getAcademicCalendar();
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return $e;
    }
}


}