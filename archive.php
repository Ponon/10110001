<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="content">
	<!--循环文章-->
	<div class="theme_box">
		<?php if ($this->have()): ?>
			<?php while ($this->next()): ?>
				<a href="<?php $this->permalink() ?>" class="theme_box_a">
					<img src="<?php $this->fields->image(); ?>" alt="" class="theme_box_a_banner"/>
					<p class="theme_box_a_title"><?php $this->title() ?></p>
					<p class="theme_box_a_time">
						<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
							<?php $this->date(); ?>
						</time>
					</p>
				</a>
			<?php endwhile; ?>
		<?php else: ?>
			<article class="post">
				<h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
			</article>
		<?php endif; ?>
	</div>
	<!--分页-->
	<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
	
</div><!-- end #main -->

