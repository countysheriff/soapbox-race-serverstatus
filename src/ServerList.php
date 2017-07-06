<?php
// https://raw.githubusercontent.com/nilzao/soapbox-race-hill/master/serverlist-v2.txt
// srvrAddress/soapbox-race-core/Engine.svc/GetServerInformation
class ServerList
{

    private static $tmpFilePath = "tmp/list.txt";

    private static $serverListSize = 0;

    /**
     *
     * @return ServerObj[]
     */
    public static function getServerObjectList()
    {
        $srvArrLst = array();
        $fileTime = filemtime(self::$tmpFilePath) + 120;
        $date = new DateTime();
        $actualTime = $date->getTimestamp();
        if ($actualTime > $fileTime) {
            $data = file_get_contents("https://raw.githubusercontent.com/nilzao/soapbox-race-hill/master/serverlist-v2.txt");
            file_put_contents(self::$tmpFilePath, $data);
            $srvArrLst = self::getServerArrayObject(true);
        } else {
            $srvArrLst = self::getServerArrayObject();
        }
        return $srvArrLst;
    }

    /**
     *
     * @return ServerObj[]
     */
    private static function getServerArrayObject($write = false)
    {
        $srvArrLst = array();
        self::$serverListSize = 0;
        $handle = fopen(self::$tmpFilePath, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $serverInfo = explode(";", $line);
                $serverName = trim($serverInfo[0]);
                $serverUrl = trim($serverInfo[1]);
                $jsonInfo = "";
                if ($write) {
                    $jsonInfo = file_get_contents($serverUrl . "/soapbox-race-core/Engine.svc/GetServerInformation");
                    file_put_contents("tmp/" . self::$serverListSize . ".json", $jsonInfo);
                } else {
                    $jsonInfo = file_get_contents("tmp/" . self::$serverListSize . ".json");
                }
                $srvArrLst[] = new ServerObj($serverName, $serverUrl, $jsonInfo);
                self::$serverListSize ++;
            }
            fclose($handle);
        }
        return $srvArrLst;
    }
}
