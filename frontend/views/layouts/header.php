<?php
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//
//NavBar::begin([
//    'brandLabel' => 'My Company',
//    'brandUrl' => Yii::$app->homeUrl,
//    'options' => [
//        'class' => 'navbar-inverse navbar-fixed-top',
//    ],
//]);
//$menuItems = [
//    ['label' => 'Home', 'url' => ['/site/index']],
//    ['label' => 'About', 'url' => ['/site/about']],
//    ['label' => 'Contact', 'url' => ['/site/contact']],
//];
//if (Yii::$app->user->isGuest) {
//    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//} else {
//    $menuItems[] = '<li>'
//        . Html::beginForm(['/site/logout'], 'post')
//        . Html::submitButton(
//            'Logout (' . Yii::$app->user->identity->username . ')',
//            ['class' => 'btn btn-link logout']
//        )
//        . Html::endForm()
//        . '</li>';
//}
//echo Nav::widget([
//    'options' => ['class' => 'navbar-nav navbar-right'],
//    'items' => $menuItems,
//]);
//NavBar::end();
?>

<div id="overlay">
    <div id="progstat"></div>
    <div id="progress"></div>
</div>
<!-- top menus -->
<header>
    <div class="wrapper">
        <div class="inner-wrap">
            <div class="telephone">
                <a href="tel:1-847-555-5555">
                    <figure><img src="img/mobile.png" alt="phone">
                    </figure><span>1-847-555-5555</span>
                </a>
            </div>
            <nav>
                <ul class="navigation">
                    <li>
                        <a data-toggle="modal" data-target="#login-modal">
                            <figure><img src="img/login.png" alt="Login">
                            </figure><span>Login</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <figure><img src="img/register.png" alt="Register">
                            </figure><span>Register</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>

    <div class="sub-header">
        <div id="logo">
            <figure><img src="img/company-logo.png" alt="logo">
            </figure>
        </div>
        <nav>
            <ul class="navigation last-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About Us</a>
                </li>
                <li><a href="#">Career</a>
                </li>
                <li><a href="#">Contact Us</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="menus-responsive">
        <div class="menu-container">
            <div class="menu-res">
                <ul class="nav-res">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Career</a>
                    </li>
                    <li><a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="buttons">
                <a class="button-res button-menu-res icon-list"></a>
            </div>
        </div>
    </div>
</header>
