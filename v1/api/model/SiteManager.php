<?php

class SiteManager
{
    private $siteManagerID;
    private $siteManagerName;
    private $siteLocation;

    /**
     * @param $siteManagerID
     * @param $siteManagerName
     * @param $siteLocation
     */
    public function __construct($siteManagerID, $siteManagerName, $siteLocation)
    {
        $this->siteManagerID = $siteManagerID;
        $this->siteManagerName = $siteManagerName;
        $this->siteLocation = $siteLocation;
    }

    /**
     * @return mixed
     */
    public function getSiteManagerID()
    {
        return $this->siteManagerID;
    }

    /**
     * @param mixed $siteManagerID
     */
    public function setSiteManagerID($siteManagerID)
    {
        $this->siteManagerID = $siteManagerID;
    }

    /**
     * @return mixed
     */
    public function getSiteManagerName()
    {
        return $this->siteManagerName;
    }

    /**
     * @param mixed $siteManagerName
     */
    public function setSiteManagerName($siteManagerName)
    {
        $this->siteManagerName = $siteManagerName;
    }

    /**
     * @return mixed
     */
    public function getSiteLocation()
    {
        return $this->siteLocation;
    }

    /**
     * @param mixed $siteLocation
     */
    public function setSiteLocation($siteLocation)
    {
        $this->siteLocation = $siteLocation;
    }

}