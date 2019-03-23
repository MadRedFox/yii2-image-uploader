<?php
/**
 * Created by PhpStorm.
 * User: chiff
 * Date: 23.03.2019
 * Time: 12:56
 */

namespace SFImages;
use yii\web\Controller;

class ImagesController
{
    public function checkFolder ()
    {
        if (!is_dir("@webroot/@app/uploads"))
            mkdir("@webroot/@app/uploads");
    }
}