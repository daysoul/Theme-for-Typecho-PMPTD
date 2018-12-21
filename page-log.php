<?php
/**
* 日志
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="layoutSingleColumn">
    <article class="u-paddingTop50" itemscope="itemscope" itemtype="http://schema.org/Article">
	<header class="entry-header">
		<h2 class="entry-title" itemprop="headline"><?php $this->title() ?></h2>
	</header>
	<div class="grap" itemprop="articleBody">
		<?php parseContent($this); ?>
	</div>
    </article>
</div><!-- end #main-->


<?php $this->need('footer.php'); ?>
