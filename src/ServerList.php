<?php
// https://raw.githubusercontent.com/nilzao/soapbox-race-hill/master/serverlist-v2.txt
// srvrAddress/soapbox-race-core/Engine.svc/GetServerInformation
class ServerList
{

    /**
     *
     * @return ServerObj[]
     */
    public static function getServerObjectList()
    {
        $serverList = file_get_contents("tmp/list.txt");
        $serverListSize = 3;
        ;
        $srvArrLst = array();
        for ($i = 1; $i <= $serverListSize; $i ++) {
            $serverTest = file_get_contents("tmp/00{$i}.json");
            $srvArrLst[] = new ServerObj("test" . $i, "http://localhost:8680", $serverTest);
        }
        return $srvArrLst;
    }
}
