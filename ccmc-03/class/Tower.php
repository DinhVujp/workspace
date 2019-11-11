<?php
require_once("Building.php");
class Tower extends Building {
    /*
    *属性
    */
    private $builtYear;
    /*
    *コンストラクタ
    */
    function __construct(string $name, int $height , int $builtyear) {
        parent::__construct($name, $height);
        $this->builtyear = $builtyear;
    }
    
    function getProfile():string {
        $profile = "{$this->name}の高さは{$this->height}mで,{$this->builtyear} 年に開業しました。";
        return $profile;
    }
}
?>