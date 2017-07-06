<?php
include 'src/autoload.php';

$serverObjLst = ServerList::getServerObjectList();
$listSize = count($serverObjLst);
for ($i = 0; $i < $listSize; $i ++) {
    $serverView = new ServerView($serverObjLst[$i]);
    echo $serverView->getTemplateStr();
}
