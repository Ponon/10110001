<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

		<div class="poster">
			<a href="<?php $this->options->siteUrl(); ?>" class="poster_header">
				<span class="iconfont icon-xiangzuo"></span>
				<p>返回首页</p>
			</a>
			<p class="poster_title">
				<?php $this->title() ?>
			</p>
			<div class="poster_data">
				<p>Typecho主题</p>
				<p>
					<span><?php _e(getViewsStr($this)); ?>次浏览</span>
					<span>|</span>
					<span><?php $this->date(); ?></span>
				</p>
			</div>
			<!-- 主要内容 -->
			<div class="poster_center">
				<!-- 文章主体部分 -->
				<?php $this->content(); ?>
				<!-- 文章结束部分 -->
				<div class="poster_center_footer">
					<div class="poster_center_footer_text">
						<p>
							<span>©</span>
							<span>版权声明</span>
						</p>
						<p>内容版权归站长所有，未经允许请勿转载。</p>
					</div>
					
            	</div>
				<!-- 点赞部分 -->
			</div>
			<!-- 评论内容 -->
			<?php $this->need('comments.php'); ?>

		</div>
		
		<script>
			// 当DOM加载完成后执行回调函数
			document.addEventListener('DOMContentLoaded', function () {
				// 通过类名选择器获取元素
				const posterCenter = document.querySelector('.poster_center');
				if (posterCenter) {
					// 获取该元素内部所有的a标签
					const aTags = posterCenter.querySelectorAll('a');
					// 遍历所有a标签并添加属性
					aTags.forEach(function (aTag) {
						aTag.setAttribute('target', '_blank');
					});
				}
			});
		</script>
		
	</body>
</html>