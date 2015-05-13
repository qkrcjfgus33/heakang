<?php if(!defined("__XE__"))exit;?><style>
  .slide-container{
    width: 100%;
    height: 100%;
  }
  .slide-container>.slide{
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    opacity: 0;
    -webkit-transition: opacity 1s;
    transition: opacity 1s;
  }
  .slide-container>.slide.active{
    opacity: 1;
    -webkit-transition: opacity 1s;
    transition: opacity 1s;
  }
  .slide-container .img{
    height: 400px;
    margin: 0 auto;
    display: block; 
    position: absolute;
    bottom: 0px;
  }
  .slide-container .comment_wrap{
    display: block;
    width: 1000px;;;
    height: 100%;
    margin: 0 auto;
  }
  .slide-container .slide{
  }
  .slide-container .slide-interface-wrap{
    width: 100%;
    height: 400px;
    position: absolute;
    z-index: 9999999999999;
    line-height: 400px;
  }
  .slide-container .slide-interface{
    width: 100%;
    height: 100%;
    margin: 0 auto;
    font-size: 30px;
    opacity: .9;
  }
  .slide-container .slide-interface .icon:before{
    border-radius: 60px;
    cursor: pointer;
    padding: 10px;
    text-align: center;
    margin: 0 100px;
    color: white;
    -webkit-transition: background-color, color .5s;
    transition: background-color, color .5s;
  }
  .slide-container .slide-interface .icon:hover:before{
    color: rgb(35, 145, 182);
    -webkit-transition: background-color, color .5s;
    transition: background-color, color .5s;
  }
  .slide-container .comment{
    z-index: 100000;
    position: absolute;
    margin:50px 50px;
    display: inline-block;
    background-color: rgba(64, 64, 64, 0.2);
    padding:10px;
    border-radius: 3px;
  }
  .slide-container .comment .comment_title{
    font-size: 30px;
    margin-bottom: 30px;
    display: inline-block;
    color:white;
  }
  .slide-container .comment .comment_content{
    display: inline-block;
  }
  #slide_pre_btn{
    float: left;
  }
  #slide_next_btn{
    float: right;
  }
  #slide-loading-img{
    display: block;
    margin: 0 auto;
    height: 400px;
  }
</style>
<script>
  jQuery(function(){
    var $ = jQuery;
    var $slide_container = $('.slide-container');
    var $slide_img = $('.slide-container .img');
    var $slide = $('.slide-container>.slide');
    var image_height = 400;
    var real_width_key ='real-width';
    var loaded = false;
    var slide_len = $slide.length;
    var current_slide_index = 0;
    var slide_mouse_over = false;
    $slide_container.hover(function(){
      slide_mouse_over = true;
    }, function(){
      slide_mouse_over = false;
    });
    slideImgInit();
    imgPositionInit();
    $('#slide_next_btn').click(next);
    $('#slide_pre_btn').click(pre);
    setInterval(function(){
      if(!slide_mouse_over && loaded){
        next();
      }
    }, 5000);
    
    function imgPositionInit(){
      $(window).resize(function(){
        $slide_img.each(_imgPositionInit);
      });
      var loaded_len = 0;
      
      $slide_img.each(function() {
          var $this = $(this);
          var tmpImg = new Image() ;
          tmpImg.onload = (function(ele){
            return function(){
              loaded_len++;
              console.log(slide_len, loaded_len);
              if(slide_len == loaded_len){
                loaded = true;
                $('#slide-loading-img').hide();
                next();
              }
              imageLoaded.call(ele, this.width, this.height)
            };
          })(this);
          tmpImg.src = $this.attr('src') ;
      });
      function imageLoaded(width, height){
        var $this = $(this);
        $this.attr(real_width_key, 
          parseInt(width * image_height/height));
        _imgPositionInit.call(this);
      }
      function _imgPositionInit(){
        var width = $slide.outerWidth();
        var $this = $(this);
        var real_width = parseFloat($this.attr(real_width_key));
        console.log(real_width);
        console.log(width);
        if(real_width){
          if(width >= real_width){
            $this
              .width('100%')
              .css('left', '0px');
          }else{
            $this
              .width(real_width)
              .css('left', -((real_width - width)/2)+'px');
          }
        }
      }
    }
    function slideImgInit(){
      $slide.each(function(i){
        $(this).css('top', (image_height * i * -1)+'px');
      })
    }
    function next(){
      $slide.eq(current_slide_index % slide_len).removeClass('active');
      current_slide_index++;
      $slide.eq(current_slide_index % slide_len).addClass('active');
    }
    function pre(){
      $slide.eq(current_slide_index % slide_len).removeClass('active');
      current_slide_index--;
      $slide.eq(current_slide_index % slide_len).addClass('active');
    }
    function move(i){
      $slide.eq(current_slide_index % slide_len).removeClass('active');
      current_slide_index = i;
      $slide.eq(current_slide_index % slide_len).addClass('active');
    } 
  })
</script>
<?php  $__Context->oDocumentModel = &getModel('document') ?>
<?php  $__Context->doc_opt->module_srl = $__Context->layout_info->slider_board_srl ?>
<?php  $__Context->output = $__Context->oDocumentModel->getDocumentList($__Context->doc_opt) ?>
<?php  $__Context->document_list = $__Context->output->data ?>
<div class="slide-container">
  <img src="<?php echo $__Context->layout_info->path ?>image/loading.gif" id="slide-loading-img" />
  <section class="slide-interface-wrap">
    <section class="slide-interface">
      <span class="oi icon left" data-glyph="chevron-left" id="slide_pre_btn"></span>
      <span class="oi icon right" data-glyph="chevron-right" id="slide_next_btn"></span>
    </section>
  </section>
  <?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->document){ ?>
  <?php  $__Context->img_src = array_pop($__Context->document->getUploadedFiles())->uploaded_filename ?>
  <section class="slide">
    <img class="img" src="<?php echo $__Context->img_src ?>"></img>
    <div class="comment_wrap">
    <div class="comment">
      <span class="comment_title"><?php echo $__Context->document->getTitleText() ?></span>
      <br>
      <span class="comment_content"><?php echo $__Context->document->getContent(false, false) ?></span>
    </div>
    </div>
  </section>
  <?php } ?>
</div>