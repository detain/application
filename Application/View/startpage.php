<?php
    $page = new Ness\UI\Page();
    $page->setLayout('master_page.php');
    $page->BeginContent();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ness PHP | Application Under Maintenance</title>

    <style type="text/css">
    body{
        margin: 0px;
        padding: 0px; 
        background-color: #09102C;
    }
    .header-box{
        padding-top: 90px;
        width: 95%;
        margin: 0 auto;
        justify-content: center;
        align-items: center;
    }
    .header-box h1{
        text-align: center;
        vertical-align: middle;
        color:#41CD52;
        font-weight: lighter;
        text-transform: uppercase;
        font-size: 60px;
        font-family: 'Segoe UI';

    }
    .header-box img{
        display:block;
        margin-left: auto;
        margin-right: auto;
    }

    .header-box h5{
        vertical-align: middle;
        text-align: center;
        font-size: larger;
        font-weight: lighter;
        font-family: 'Segoe UI';
        color: #DFDFDF;
    }
    .header-box a{
        vertical-align: middle;
        text-align: center;
        font-size: larger;
        color:#DFDFDF;
        text-decoration: none;
        font-family: 'Segoe UI';
        border-bottom: 2px solid transparent;
        margin-right: 20px;
        padding-bottom: 10px;
        transition: all 0.5s ease;
    }
    .header-box a:hover{
        text-decoration: none;
        font-family: 'Segoe UI';
        border-bottom: 2px solid #41CD52;
    }
    .footer-box{
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1rem;
        text-align: center;
    }
    .footer-box h1{
        font-size: 37px;
        color:#0F1A46;
        font-family: 'Segoe UI';
        font-weight: lighter;
    }
    .disable-selection0 {
        -webkit-touch-callout: none; 
        -webkit-user-select: none; 
        -khtml-user-select: none; 
        -moz-user-select: none; 
        -ms-user-select: none; 
        user-select: none; 
    }
    </style>
</head>
<body>

<div class="header-box">
    <img src="<?= Ness\ContentManager::getImage('ness_logo_rounded.png');?>" width="120"/>
    <h1 class="disable-selection0"><?= Ness\Configuration::getTitle();?></h1>
    <h5 class="disable-selection0"><?= Ness\Configuration::getDescription();?></h5>

    <br>
    <center>
        <a href="http://nessphp.github.io/">Home Page</a> 
        <a href="https://github.com/nessphp">GitHub</a> 
        <a href="http://nessphp.github.io/">Documentation</a> 
    </center>
    

</div>


<div class="footer-box">
    <h1 class="disable-selection0">Ness PHP</h1>
</div>
</body>
</html>


<?php
    $page->EndContent();
?>
