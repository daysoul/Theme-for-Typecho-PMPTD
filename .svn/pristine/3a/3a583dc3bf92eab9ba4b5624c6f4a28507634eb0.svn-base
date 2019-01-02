<?php
/**
* 文章主页
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
    <div class="layoutSingleColumn">   
			<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
			    $year=0; $mon=0; $i=0; $j=0; 
			    $output = '<div class="pagelist">';
			    while($archives->next()):
			        $year_tmp = date('Y',$archives->created);
			        $mon_tmp = date('m',$archives->created);
			        $y=$year; $m=$mon;
			        if ($mon != $mon_tmp && $mon > 0) $output .= '<ul></li>';
			        if ($year != $year_tmp && $year > 0) $output .= '</ul>';
			        if ($year != $year_tmp) {
			            $year = $year_tmp;
			            $output .= '<h2 class="pagearchive-year">'. $year .' </h2><ul>'; 
			        }
			        if ($mon != $mon_tmp) {
			            $mon = $mon_tmp;
			            $output .= '<li><h3 class="pagemonth-title">'. $year .' - '. $mon .'</h3><ul class="pagearchive-list">';
			        }
			        $output .= '<li class="pagearchive-item"><a class="pagearchive-item-title" href="'.$archives->permalink .'">'. $archives->title .'</a><div class="pagearchive-item-meta">'. $archives->commentsNum.' responses</div></li>';
			    endwhile;
			    $output .= '</ul></li></ul></div>';
			    echo $output;
			?>           
    </div>  

