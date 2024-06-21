			<!-- Content End -->
            </div>
<?php wp_footer();?>
<!-- ====== FOOTER BOC ====== -->
<footer> 
    <div class="footer-main">
        <div class="container">
            <div class="footer-text">
                <div class="footer-left">
                    <p>Copyright © <?php echo date('Y');?> PAl. All rights reserved.</p>
                </div>
                <div class="footer-right">
                    <h5>Developed by</h5>
                    <div class="developed-by-img"><a href="https://www.appgurus.com.au/" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/images/appguruslogo.png" alt="appgurus"></a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ====== FOOTER End ====== -->
<style type="text/css">
    .footer-main .footer-text .footer-left p{text-align:left;}
    .footer-main .footer-text{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;}
    .footer-main .footer-text .footer-right{display:flex;}
    .footer-main .footer-text .footer-right .developed-by-img{width:191px;height:38px;}
    .footer-main .footer-text .footer-right h5{color:#fff;margin-bottom:0px;font-size:24px;font-weight:400;line-height:38px;height:38px;padding-top:6px;padding-right:10px;}

    @media (max-width:1199px){
        .footer-main .footer-text .footer-right h5{font-size:20px;line-height:33px;height:33px;padding-top:4px;}
        .footer-main .footer-text .footer-right .developed-by-img{width:155px;height:33px;}
    }

    @media (max-width:991px){
        .footer-main .footer-text{padding:15px 0px;}
    }
    
    @media (max-width:767px){
        .footer-main .footer-text .footer-left{width:100%;}
        .footer-main .footer-text .footer-right{width:100%;justify-content:center;padding-top:10px;padding-bottom:5px;}
        .footer-main .footer-text .footer-left p{text-align:center;}
        .footer-main .footer-text .footer-right h5{font-size:18px;line-height:30px;height:30px;padding-top:3px;}
        .footer-main .footer-text .footer-right .developed-by-img{width:141px;height:30px;}
    }
</style>
</body>
<script type="text/javascript">
var plugin_url =
  "https://plugins.svn.wordpress.org/play-pause-button-for-video/trunk";
jQuery(document).ready(function () {
  if (jQuery("video").length > 0) {
    jQuery("video").wrap("<div class='video-parent-class'></div>");
    /*Add image just before to vedio  */
    jQuery(
      "<img class='pause-play-img' src='" + plugin_url + "/img/img01.png' >"
    ).insertBefore("video");
    jQuery("video").each(function (index) {
      /*vedio parent div height width code*/
      var vedio_width = jQuery(this).width();
      var vedio_height = jQuery(this).height();
      jQuery(".video-parent-class").css({
        width: vedio_width + "px",
        height: vedio_height + "px"
      });

      /*Pause Play image, middle width in vedio code*/
      var half_width_vedio = vedio_width / 2;
      var middle_object_width = half_width_vedio - 32;
      jQuery(".pause-play-img").css({
        left: middle_object_width + "px"
      });

      /*Pause Play image middle height in vedio code*/
      var half_height_vedio = vedio_height / 2;
      var middle_object_heigh = half_height_vedio - 32;
      jQuery(".pause-play-img").css({
        top: middle_object_heigh + "px"
      });

      /*Pause play and image src change code*/
      jQuery(this).on("click", function () {
        if (this.paused) {
          this.play();
          jQuery(this)
            .prev()
            .attr("src", plugin_url + "/img/img02.png");
        } else {
          this.pause();
          jQuery(this)
            .prev()
            .attr("src", plugin_url + "/img/img01.png");
        }
      });

      /*pause play image click vedio on off functionlity code*/
      jQuery(this)
        .prev()
        .on("click", function () {
          var myVideo = jQuery(this).next()[0];
          if (myVideo.paused) {
            myVideo.play();
            jQuery(this).attr("src", plugin_url + "/img/img02.png");
          } else {
            myVideo.pause();
            jQuery(this).attr("src", plugin_url + "/img/img01.png");
          }
        });
      /*Floating js for HTML Video Start*/
      var windows = jQuery(window);
      var videoWrap = jQuery(this).parent();
      var video = jQuery(this);
      var videoHeight = video.outerHeight();
      var videoElement = video.get(0);
      windows.on("scroll", function () {
        var windowScrollTop = windows.scrollTop();
        var videoBottom = videoHeight + videoWrap.offset().top;
        //alert(videoBottom);

        if (windowScrollTop > videoBottom) {
          if (!videoElement.paused) {
            videoWrap.height(videoHeight);
            video.addClass("stuck");
            if (video.hasClass("stuck")) {
              video.attr("controls", "1");
            }
            video.prev().attr("src", plugin_url + "/img/img02.png");
            jQuery(".scrolldown").css({ display: "none" });
          } else {
            videoWrap.height("auto");
            video.removeClass("stuck");
            video.removeAttr("controls");
            if (videoElement.paused) {
              video.prev().attr("src", plugin_url + "/img/img01.png");
            }
          }
        } else {
          videoWrap.height("auto");
          video.removeClass("stuck");
          video.removeAttr("controls");
        }
      });
      /*Floating js for HTML Video End*/
    });
    /*After end vedio change image*/
    var video = document.getElementsByTagName("video")[0];

    video.onended = function (e) {
      jQuery(".pause-play-img").attr("src", plugin_url + "/img/img01.png");
    };
  }
});
</script>
</html>