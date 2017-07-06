<?php

class ServerView
{

    private $templateStr;

    /**
     *
     * @param ServerObj $serverObj            
     */
    public function __construct($serverObj)
    {
        $this->templateStr = file_get_contents("view/template.html");
        $methods = get_class_methods(ServerObj::class);
        foreach ($methods as $v) {
            if (substr($v, 0, 3) == "get") {
                $name = substr($v, 3);
                $this->templateStr = str_replace("%{$name}%", $serverObj->$v(), $this->templateStr);
                // echo "{$v} to %{$name}%\n";
            }
        }
    }

    public function getTemplateStr()
    {
        return $this->templateStr;
    }
}
