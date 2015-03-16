<?php
/**
 * Created by PhpStorm.
 * User: bluenight
 * Date: 3/14/15
 * Time: 1:59 PM
 */

namespace app\commands;


use yii\console\controllers\MigrateController;

/**
 * Do the same thing as "migrate" but with additional shortcuts.
 *
 * Class MyMigrateController
 * @package app\commands
 */
class MyMigrateController extends MigrateController
{
    public $templateFile = '@vendor/myYii/views/migration.php';

}