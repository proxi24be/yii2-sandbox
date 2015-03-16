<?php
/**
 * Created by PhpStorm.
 * User: bluenight
 * Date: 1/25/15
 * Time: 3:46 PM
 */

use yii\helpers\Html;
use app\assets\KoSandboxAsset;

/* @var $this yii\web\View */
KoSandboxAsset::register($this);
$this->title = 'Ko sandbox';
$this->params['breadcrumbs'][] = $this->title;
?>

<div>
    <h1><?= Html::encode($this->title) ?></h1>

    <div id="scope-object">
        <p>The name is <span data-bind="text: person1.firstName"></span></p>
        <p>The name is <input type="text" data-bind="value: person1.firstName"></p>
        <button class="btn btn-primary" data-bind="click: display.bind($data, person1)">person 1</button>
        <button class="btn btn-primary" data-bind="click: display.bind($data, person2)">person 2</button>
    </div>

    <code><?= __FILE__ ?></code>
</div>


<script type="text/javascript">
    var scope = {};

    $(function() {
        scope.person1 = new Person();
        scope.person2 = new Person();
        scope.display = function (object, scope, event) {
            console.log(object.firstName());
        };
        ko.applyBindings(scope, document.getElementById('scope-object'));
    });

</script>