<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="footer">

<!-- 滚动进度 -->
<div id="bottomProgressBar"></div>

<!-- 音乐播放器 -->


<!-- 右下角菜单 -->
<div id="rightMenu">
</div>

<!-- cnzz统计 -->
<div id="cnzzProtocol"  style="display: none;">
    <?php $this->options->siteStatistics()?>
</div>

<!-- 备案信息 -->
<div id="beiAnInfo" style="display: none;">
    <?php $this->options->siteBeian() ?>
</div>



</div>


<!-- footer end -->
</div><!-- home end -->
<script src="https://cdn.staticfile.org/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/highlight.js/9.15.9/highlight.min.js"></script>

<?php $this->options->globalConfig()?>


<?php $this->footer(); ?>
</body>
</html>
