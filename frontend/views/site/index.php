<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?= Yii::t('app', 'Congratulations') ?>!</h1>

        <p class="lead">Current <?= Yii::$app->language ?></p>
        <p class="lead">Original <?= Yii::$app->sourceLanguage ?></p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    <div><h3 class="text text-danger">Вкажи свою стать:</h3>
        <form name="form" id="form">
            <input type="radio" id="male" name="sex" value="male"><lable for="male" id="lab"> Man</lable>
            <input type="radio" id="female" name="sex" value="female"><lable for="female" id="lab"> Women</lable>
<br>
            <span id="message"></span>
            <input type="button" id="done" value="Select">

        </form>
    </div>
    </div>

    <div class="body-content">
        <div>
        <img src="https://www.volynnews.com/files/messages/641/641-31u.jpg" style="display: none" id="img">
            <div id="1"></div>
        <img src="https://ru.fishki.net/picsw//092012/28/post/man/tn.jpg" style="display: none" id="img2">
        </div>

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>
                <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2 id="read">Heading</h2>

                <p class="test2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p class="test3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
            <ul id="list">
                <li><a href="#">Link 1</a> </li>
                <li><a href="#">Link 2</a> </li>
                <li><a href="#">Link 3</a> </li>
                <li><a href="#">Link 4</a> </li>
                <li><a href="#">Link 5</a> </li>
                <li><a href="#">Link 6</a> </li>
            </ul>
        </div>

    </div>
</div>
