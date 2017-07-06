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
        $fileTime = filemtime(self::$tmpFilePath) + 60;
        $date = new DateTime();
        $actualTime = $date->getTimestamp();
        if ($actualTime > $fileTime) {
            $data = file_get_contents("https://raw.githubusercontent.com/nilzao/soapbox-race-hill/master/serverlist-v2.txt");
            file_put_contents(self::$tmpFilePath, $data);
            self::writeJson();
        } else {
            self::countServerListSize();
        }
        $srvArrLst = array();
        for ($i = 0; $i < self::$serverListSize; $i ++) {
            $serverTest = file_get_contents("tmp/{$i}.json");
            $srvArrLst[] = new ServerObj("test" . $i, "http://localhost:8680", $serverTest);
        }
        return $srvArrLst;
    }

    private static function countServerListSize()
    {
        $handle = fopen(self::$tmpFilePath, "r");
        while (($line = fgets($handle)) !== false) {
            self::$serverListSize ++;
        }
        fclose($handle);
    }

    private static function writeJson()
    {
        self::$serverListSize = 0;
        $handle = fopen(self::$tmpFilePath, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $serverInfo = explode(";", $line);
                $serverUrl = trim($serverInfo[1]) . "/soapbox-race-core/Engine.svc/GetServerInformation";
                $jsonInfo = file_get_contents($serverUrl);
                file_put_contents("tmp/" . self::$serverListSize . ".json", $jsonInfo);
                self::$serverListSize ++;
            }
            fclose($handle);
        }
    }
}
