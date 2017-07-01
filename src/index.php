<?php
include 'src/autoload.php';

$serverObjLst = ServerList::getServerObjectList();
$listSize = count($serverObjLst);
for ($i = 0; $i < $listSize; $i ++) {
    echo "\n" .$serverObjLst[$i]->getServerHttpName();
    echo "\n" . $serverObjLst[$i]->getServerHttpAddress();
    echo "\n" . $serverObjLst[$i]->getCountry();
}
