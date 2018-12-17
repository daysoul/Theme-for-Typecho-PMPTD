<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article class="content-post post tag-jian-ti-zhong-wen" role="main">

  <div class="content-post-title">
    <h1><?php $this->title() ?></h1>
  </div>
  <div class="content-post-meta">
    <time class="post-date" datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date('Y年m月d日'); ?></time> · <?php $this->category(', '); ?></div>
  <div class="content-post-body">
  <?php $this->content(); ?>
  </div>
  <div class="content-post-meta post-meta-tags">
    <?php $this->tags(' , ', true, 'none'); ?>
  </div>

  <div class="content-post-comments">
  </div>

  <div class="doc_comments">
  <?php $this->need('comments.php'); ?>
  </div>

</article>


<?php $this->need('footer.php'); ?>
