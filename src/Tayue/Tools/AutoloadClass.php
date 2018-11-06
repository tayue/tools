<?php
/**
 * Created by PhpStorm.
 * User: zhjx
 * Date: 2018/9/14
 * Time: 12:28
 */
namespace Tayue\Tools;
use Tayue\Lib\AutoloadLibBaseClass;
//文件 autoloadClass.php ,需要new的文件
class AutoloadClass extends AutoloadLibBaseClass{

    public function __construct()
    {
        parent::__construct();
        echo '自动初始类';
    }
}