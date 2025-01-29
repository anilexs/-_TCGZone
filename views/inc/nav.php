</head>
<body>
<?php
if(isset($_COOKIE[''])){ ?>
    <nav>
        <ul>
            <li class="logoContener">
                <a href="<?= $host ?>">
                    <img src="<?= $host ?>asset/img/logo2.png" alt="logo img" class="logo">
                </a>
            </li>
        </ul>
    </nav>
<?php }else{ ?>
    <nav>
        <ul class="ulContenair">
            <li class="logoContener">
                <a href="<?= $host ?>" class="alogo">
                    <img src="<?= $host ?>asset/img/logo2.png" alt="logo img" class="logo">
                </a>
            </li>
            <li class="liulmidle">
                <ul class="ulmidle">
                    <li>
                        <a href="<?= $host ?>"><?= $trad['home'] ?></a>
                    </li>
                    <li>
                        <a href="<?= $host ?>earn"><?= $trad['earn'] ?></a>
                    </li>
                    <li>
                        <input type="text">
                    </li>
                    <li>
                        <button class="login"><?= $trad['login']; ?></button>
                    </li>
                    <li>
                        <button class="signUp"><?= $trad['SignUp']; ?></button>
                    </li>
                </ul>
            </li>
            <li>
                <div class='langSelect'>
                    
                    <div class="langDefaux">
                        <div class="langImg">
                            <img class="imgSelect" src="<?= $country[$lang]['flag'] ?>" alt="">
                        </div>
                        <div class="langTxt langTxtDefaux"><?= $country[$lang]['lang'] ?></div> 
                    </div>
                        
                    <div class="optLange close">
                        <?php foreach ($country as $key => $value) { 
                            if($key != $lang){ ?>
                                <div class="langOpt">
                                    <div class="langImg">
                                        <img src="<?= $value['flag'] ?>" alt="<?= $key ?>">
                                    </div>
                                    <div class="langTxt"><?= $value['lang'] ?></div> 
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
<?php } ?>