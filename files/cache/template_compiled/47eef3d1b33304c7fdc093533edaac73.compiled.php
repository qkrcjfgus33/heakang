<?php if(!defined("__XE__"))exit;?><style>
    .news-container{
        padding: 20px 10px;
        width: 480px;
        height: 190px;
    }
    .news-container header{
        border-bottom: rgb(33, 150, 190) 3px solid;
        height: 25px;
    }
    .news-container header .title{
        font-family: sans-serif;
        font-weight: bold;
        font-size: 15px;
        padding-left: 10px;
    }
    .news-container header .more{
        text-decoration: none;
        float: right;
        background-color: rgb(33,150,190);
        margin: 0px;
        padding: 0px;
        width: 80px;
        height: 100%;
        line-height: 25px;
        text-align: center;
        font-weight: bold;
        color: white;
    }
    .news-container header .more:hover{
        font-size: 95%;
        -webkit-transition: all .1s; /* Safari 3.1 to 6.0 */
        transition: all .1s;
    }
</style>
<style>
    .news-posts{
        color: black;
        padding: 10px;
        margin: 5px 0px;
        height: 150px;
    }
    .news-posts .post{
        height: 25px;
        line-height: 25px;
        list-style-position: inside;
        cursor: pointer;
    }
    .news-posts a{
        text-decoration: none;
        color: black;
    }
    .news-posts .post:hover>.title, .news-posts .post:hover>.time{
        color: rgb(35, 145, 182);
        font-weight: bold;
    }
    .news-posts .time{
        float: right;
        color: black;
    }
</style>
<section class="news-container">
    <header>
        <span class="title"><?php echo $__Context->title ?></span>
        <a href="<?php echo $__Context->oDocumentMid ?>" class="more">more +</a>
    </header>
    <ul class="news-posts">
        <?php if($__Context->oDocumentItemList&&count($__Context->oDocumentItemList))foreach($__Context->oDocumentItemList as $__Context->i => $__Context->oDocument){ ?>
            <a href="/<?php echo $__Context->oDocument->document_srl ?>">
            <li class="post">
                <span class="title"><?php echo $__Context->oDocument->getTitleText() ?></span>
                <span class="time"><?php echo $__Context->oDocument->getRegdate('m.d') ?></span>
                
            </li>
            </a>
        <?php } ?>
</ul>
</section>