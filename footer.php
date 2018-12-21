<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php if ($this->is('index')) : ?>
   <footer class="layoutSingleColumn layoutSingleColumn--wide footer" role="contentinfo"> 
    <div class="site-info"> 
     <p>blog since 2018.&nbsp;&nbsp;&nbsp;&nbsp; I made this shit with ♥.<a href="<?php $this->options ->siteUrl(); ?>/log" class="cute" title="日志" target="_blank"> devlog</a>.
	 &nbsp;&nbsp;&nbsp;&nbsp;theme design by <a href="https://github.com/jozhn/Bigfa" class="cute" title="jozhn/Bigfa" target="_blank">jozhn/Bigfa</a>.</p>
    </div>
   </footer> 
<?php else: ?>
<footer class="footer--empty"></footer>
<?php endif; ?>
  </div> <!-- 对应site-main surface-container -->
<div class="loadingBar"></div>
<?php $this->footer(); ?>
	<?php if ($this->options->highlightjs == 'able'):?>
	<script type="text/javascript" src="https://cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js" data-no-instant></script>
	<?php endif; ?>
	<?php if ($this->options->viewimage == 'able'):?>
	<script src="https://img.dearjohn.cn/usr/themes/Bigfa/static/js/view-image.min.js" data-no-instant></script>
	<?php endif; ?>
	<?php if ($this->options->instantclick == 'able'):?>
    <script src="https://cdn.bootcss.com/instantclick/3.0.0/instantclick.min.js" data-no-instant></script>
    <script data-no-instant>
		InstantClick.on('change', function(isInitialLoad) {
			$("pre code").each(function(i, block) {hljs.highlightBlock(block);});
			<?php if ($this->options->aplayer == 'able'):?>
			if (typeof aplayers !== 'undefined'){
				for (var i = 0; i < aplayers.length; i++) {
					try {aplayers[i].destroy()} catch(e){}
				}
			}
			loadMeting();
			<?php endif; ?>
			jQuery(document).ready(function () {
				$.lately({
					'target' : '.lately-a,.lately-b,.lately-c'
				});
				jQuery.viewImage({
				'target' : '.view-image img', //需要使用ViewImage的图片
				'exclude': '.exclude img',    //要排除的图片
				'delay'  : 300                //延迟时间
				});
			});
		});
		InstantClick.init('mousedown');
    </script>
	<?php endif; ?>
	
	<?php if($this->options->Analytics): ?>
	<script>
	<?php $this->options->Analytics(); ?>
	</script>
	<?php endif; ?>

</body>
</html>
