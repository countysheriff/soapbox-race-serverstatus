<?php

class ServerObj
{

    private $serverHttpName;

    private $serverHttpAddress;

    private $messageSrv;

    private $homePageUrl;

    private $facebookUrl;

    private $discordUrl;

    private $serverName;

    private $country;

    private $timezone;

    private $bannerUrl;

    private $adminList;

    private $ownerList;

    private $numberOfRegistered;

    private $onlineNumber;

    /**
     *
     * @param string $strJson            
     */
    public function __construct($serverHttpName, $serverHttpAddress, $strJson)
    {
        $this->serverHttpName = $serverHttpName;
        $this->serverHttpAddress = $serverHttpAddress;
        $data = json_decode($strJson);
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }

    public function getServerHttpName()
    {
        return $this->serverHttpName;
    }

    public function setServerHttpName($serverHttpName)
    {
        $this->serverHttpName = $serverHttpName;
        return $this;
    }

    public function getServerHttpAddress()
    {
        return $this->serverHttpAddress;
    }

    public function setServerHttpAddress($serverHttpAddress)
    {
        $this->serverHttpAddress = $serverHttpAddress;
        return $this;
    }

    public function getMessageSrv()
    {
        return $this->messageSrv;
    }

    public function setMessageSrv($messageSrv)
    {
        $this->messageSrv = $messageSrv;
        return $this;
    }

    public function getHomePageUrl()
    {
        return $this->homePageUrl;
    }

    public function setHomePageUrl($homePageUrl)
    {
        $this->homePageUrl = $homePageUrl;
        return $this;
    }

    public function getFacebookUrl()
    {
        return $this->facebookUrl;
    }

    public function setFacebookUrl($facebookUrl)
    {
        $this->facebookUrl = $facebookUrl;
        return $this;
    }

    public function getDiscordUrl()
    {
        return $this->discordUrl;
    }

    public function setDiscordUrl($discordUrl)
    {
        $this->discordUrl = $discordUrl;
        return $this;
    }

    public function getServerName()
    {
        return $this->serverName;
    }

    public function setServerName($serverName)
    {
        $this->serverName = $serverName;
        return $this;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    public function getTimezone()
    {
        return $this->timezone;
    }

    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

    public function getBannerUrl()
    {
        return $this->bannerUrl;
    }

    public function setBannerUrl($bannerUrl)
    {
        $this->bannerUrl = $bannerUrl;
        return $this;
    }

    public function getAdminList()
    {
        return $this->adminList;
    }

    public function setAdminList($adminList)
    {
        $this->adminList = $adminList;
        return $this;
    }

    public function getOwnerList()
    {
        return $this->ownerList;
    }

    public function setOwnerList($ownerList)
    {
        $this->ownerList = $ownerList;
        return $this;
    }

    public function getNumberOfRegistered()
    {
        return $this->numberOfRegistered;
    }

    public function setNumberOfRegistered($numberOfRegistered)
    {
        $this->numberOfRegistered = $numberOfRegistered;
        return $this;
    }

    public function getOnlineNumber()
    {
        return $this->onlineNumber;
    }

    public function setOnlineNumber($onlineNumber)
    {
        $this->onlineNumber = $onlineNumber;
        return $this;
    }
}
