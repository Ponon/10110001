<?php
/**
 * 这是一个个人工作室主题，友链和部分内容是在首页内置。在首页展示的两个分类，通过更改index.php下面的分类mid来改就行。
 *
 * @package 10110001
 * @author Ponon
 * @version 1.1
 * @link http://10110001.xyz
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

			<!-- 头部 -->
			<header>
				<div class="header_left">
					<a href="https://github.com/Ponon" title="GitHub" target="_blank">
						<span class="iconfont icon-github"></span>
					</a>
					<a href="https://nuomio.zcool.com.cn/" title="站酷" target="_blank">
						<span class="iconfont icon-zhanku"></span>
					</a>
				</div>
				<div class="header_right">
					<a  href="javascript:void(0);" onclick="showAlert()" class="header_right_1">BiuBiu</a>
					<a class="header_right_2" href="mailto:qeeyo@outlook.com" target="_blank">联系我们</a>
				</div>
			</header>
	
			<!-- 主体内容 -->
			<div class="center">
				<!-- 用户 -->
				<div class="center_user">
					<img src="<?php $this->options->themeUrl('images/user.jpg'); ?>" alt="" />
					<div class="center_user_right">
						<p class="center_user_right_1">Ponon</p>
						<p class="center_user_right_2">qeeyo@outlook.com</p>
					</div>
				</div>
	
				<!-- 欢迎语 -->
				<div class="center_welcome">
					<p class="center_welcome_1">
						<span>你好</span>
						<span>,</span>
						<span>我是</span>
						<span class="center_welcome_1_name">Ponon</span>!
						</br>
						一位热衷于创建视觉元素、主题制作和嵌入式开发的全栈工程师。
					</p>
					<p class="center_welcome_2">
					   <?php $this->options->description() ?>
					</p>
				</div>
	
				<!-- 盒子 -->
				<div class="center_hover">
					<div class="center_hover_book">
						<img src="<?php $this->options->themeUrl('images/banner/book_icon_1.svg'); ?>" class="center_hover_book_img_1" />
						<img src="<?php $this->options->themeUrl('images/banner/book_icon_shu1.svg'); ?>" class="book_icon_shu1" />
						<img src="<?php $this->options->themeUrl('images/banner/book_icon_shu2.svg'); ?>" class="book_icon_shu2" />
						<img src="<?php $this->options->themeUrl('images/banner/book_icon_shu3.svg'); ?>" class="book_icon_shu3" />
						<img src="<?php $this->options->themeUrl('images/banner/book_icon_2.svg'); ?>" class="center_hover_book_img_2" />
						<img src="<?php $this->options->themeUrl('images/banner/book_icon_3.svg'); ?>" class="center_hover_book_img_3" />
					</div>
					<div class="center_hover_app">
						<img src="<?php $this->options->themeUrl('images/banner/app_icon_1.svg'); ?>" class="center_hover_app_1" />
						<img src="<?php $this->options->themeUrl('images/banner/app_icon_app.svg'); ?>" class="center_hover_app_app" />
						<img src="<?php $this->options->themeUrl('images/banner/app_icon_2.svg'); ?>" class="center_hover_app_2" />
						<img src="<?php $this->options->themeUrl('images/banner/app_icon_3.svg'); ?>" class="center_hover_app_3" />
					</div>
				</div>
	
				<!-- 经验 -->
				<div class="center_exp">
					<p class="center_exp_title">
					    <span>应用技术</span>
					    <span>🕷️</span>
					</p>
					<div class="center_exp_box">
						<div class="center_exp_box_list">
							<img src="<?php $this->options->themeUrl('images/experiences/ps.png'); ?>" alt="" />
							<div class="center_exp_box_list_tc">
								<p class="center_exp_box_list_tc_1">Adobe Photoshop</p>
								<p class="center_exp_box_list_tc_2">Adobe
									Photoshop（PS）是广为人知的图像处理软件。它操作界面较直观，易上手。在平面设计、摄影后期、插画绘制等方面作用显著，能调色、修图、合成及创作。无论是商业还是日常图片处理，靠多样工具与滤镜，PS
									都可帮人们实现创意，打造精彩视觉效果。</p>
							</div>
						</div>
						<div class="center_exp_box_list">
							<img src="<?php $this->options->themeUrl('images/experiences/pr.png'); ?>" alt="" />
							<div class="center_exp_box_list_tc">
								<p class="center_exp_box_list_tc_1">Adobe Premiere Pro</p>
								<p class="center_exp_box_list_tc_2">Adobe Premiere
									Pro（PR）是一款专业的视频编辑软件。它界面简洁，功能丰富，涵盖剪辑、调色、音频处理等多种操作。影视制作、广告宣传、自媒体创作等领域都常用到它，能高效帮助创作者将素材整合，打造出高质量、富有创意的精彩视频作品。
								</p>
							</div>
						</div>
						<div class="center_exp_box_list">
							<img src="<?php $this->options->themeUrl('images/experiences/xd.png'); ?>" alt="" />
							<div class="center_exp_box_list_tc">
								<p class="center_exp_box_list_tc_1">Adobe XD</p>
								<p class="center_exp_box_list_tc_2">Adobe XD
									是一款专注于用户体验设计的专业软件。它界面友好，操作便捷，集交互设计、原型制作与界面布局等功能于一身。适用于网页、移动应用等项目的设计流程，能助力设计师快速搭建原型，呈现创意，高效完成高质量的设计方案，备受行业青睐。
								</p>
							</div>
						</div>
						<div class="center_exp_box_list">
							<img src="<?php $this->options->themeUrl('images/experiences/ai.png'); ?>" alt="" />
							<div class="center_exp_box_list_tc">
								<p class="center_exp_box_list_tc_1">Adobe Illustrator</p>
								<p class="center_exp_box_list_tc_2">Adobe
									Illustrator（AI）是一款出色的矢量绘图软件。它有着多样绘图工具，可轻松绘制精美图形、创作艺术作品。基于矢量的特性让图像放大不失真，在平面、网页等多领域应用广泛，深受设计师喜爱，是打造高品质设计的得力助手。
								</p>
							</div>
						</div>
						<div class="center_exp_box_list">
							<img src="<?php $this->options->themeUrl('images/experiences/sketch.png'); ?>" alt="" />
							<div class="center_exp_box_list_tc">
								<p class="center_exp_box_list_tc_1">Sketch</p>
								<p class="center_exp_box_list_tc_2">Sketch 是一款专为界面设计打造的轻量级软件。它界面简洁，操作便捷，聚焦于 UI/UX
									设计，有丰富的插件可拓展功能。提供高效的矢量编辑与交互原型制作能力，在移动应用、网页等界面设计方面表现出色，深受众多设计师青睐。</p>
							</div>
						</div>
						<div class="center_exp_box_list">
							<img src="<?php $this->options->themeUrl('images/experiences/figma.png'); ?>" alt="" />
							<div class="center_exp_box_list_tc">
								<p class="center_exp_box_list_tc_1">Figma</p>
								<p class="center_exp_box_list_tc_2">Figma
									是一款基于云端的界面设计工具。它支持团队实时协作，多人可同步操作项目。界面简洁，功能涵盖原型制作、设计稿创建等。跨平台使用方便，无需下载安装就能在线编辑，在互联网产品、APP
									设计等领域颇受欢迎，助力高效产出设计成果。</p>
							</div>
						</div>
						<div class="center_exp_box_list">
							<img src="<?php $this->options->themeUrl('images/experiences/c4d.png'); ?>" alt="" />
							<div class="center_exp_box_list_tc">
								<p class="center_exp_box_list_tc_1">Cinema 4D</p>
								<p class="center_exp_box_list_tc_2">C4D 即 Cinema
									4D，是一款功能强大的三维设计软件。它操作相对容易上手，建模、渲染效果出色。在影视特效、广告包装、动画制作等领域应用广泛，能快速打造出炫酷的三维场景、逼真的角色与物体，为创作者实现创意想法提供有力支持。
								</p>
							</div>
						</div>
						<div class="center_exp_box_list">
							<img src="<?php $this->options->themeUrl('images/experiences/html.png'); ?>" alt="" />
							<div class="center_exp_box_list_tc">
								<p class="center_exp_box_list_tc_1">HTML</p>
								<p class="center_exp_box_list_tc_2">HTML
									即超文本标记语言，是构建网页的基础。它通过各种标签来定义网页内容结构，像文字排版、图片嵌入、链接设置等都靠它完成。虽然看似简单，却至关重要，是前端开发的基石，与
									CSS、JavaScript 配合，能打造出丰富多彩的网页。</p>
							</div>
						</div>
						<div class="center_exp_box_list">
							<img src="<?php $this->options->themeUrl('images/experiences/python.png'); ?>" alt="" />
							<div class="center_exp_box_list_tc">
								<p class="center_exp_box_list_tc_1">Python</p>
								<p class="center_exp_box_list_tc_2">Python
									是一门高级编程语言，语法简洁、易读易写。它应用广泛，在数据科学、人工智能、网络爬虫、软件开发等诸多领域都大显身手。丰富的库和框架能助力开发者高效完成项目，无论是新手入门，还是专业开发，Python
									都是绝佳选择。</p>
							</div>
						</div>
						<div class="center_exp_box_list">
							<img src="<?php $this->options->themeUrl('images/experiences/fastapi.png'); ?>" alt="" />
							<div class="center_exp_box_list_tc">
								<p class="center_exp_box_list_tc_1">FastAPI</p>
								<p class="center_exp_box_list_tc_2">
									FastAPI是一款基于Python的现代Web框架。它性能卓越，响应速度快，代码简洁易维护。支持异步编程，能高效处理高并发请求。适用于构建API，在开发后端服务，如数据接口等方面表现出色，深受Python开发者青睐，助力快速打造可靠的网络应用。
								</p>
							</div>
						</div>
						<div class="center_exp_box_list">
							<img src="<?php $this->options->themeUrl('images/experiences/pycharm.png'); ?>" alt="" />
							<div class="center_exp_box_list_tc">
								<p class="center_exp_box_list_tc_1">PyCharm</p>
								<p class="center_exp_box_list_tc_2">
									PyCharm是专为Python开发打造的集成开发环境（IDE）。它界面友好，功能强大，有着智能代码补全、语法检查、调试便捷等诸多优势。支持各类Python框架，能有效提升开发效率，无论是新手学习还是专业开发，都是Python编程的得力助手。
								</p>
							</div>
						</div>
					</div>
				</div>
	            
				<!-- 项目分享 -->
				<div class="center_project">
					<p class="center_exp_title">
					    <span>项目分享</span>
					    <span>🌍</span>
					</p>
					<div class="center_project_box">
					    
					    <!-- 循环项目 -->
                        <?php 
							$mid="3";//你的分类mid
							$this->widget('Widget_Archive@index'.$mid, 'pageSize=10&type=category', 'mid='.$mid)->to($project);
						?>
						<?php if($project->have()): ?>
							<?php while ($project->next()): ?>
                                <a href="<?php $project->fields->url(); ?>" target='_blank' class="center_project_box_list" title="<?php $project->title(); ?>">
    								<img src="<?php $project->fields->cover(); ?>" alt="" />
    								<div class="center_project_box_list_text">
    									<p class="center_theme_box_list_txt_title">
    									   <?php $project->title(); ?>
    									</p>
    									<p class="center_theme_box_list_txt_miaoshu">
    										<?php $project->fields->brief(); ?>
    									</p>
    									<div class="center_project_box_list_text_biaoqian">
											<?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=30')->to($tags); ?>
											<?php if($tags->have()): ?>
											<?php while ($tags->next()): ?>
												<span><?php $tags->name(); ?></span>
											<?php endwhile; ?>
											<?php else: ?>
												<span><?php _e('没有任何标签'); ?></span>
											<?php endif; ?>
    									</div>
    								</div>
    							</a>
							<?php endwhile;?>
                        <?php endif;?>
						<!-- 循环结束 -->
						
					</div>
				</div>
	
				<!-- Typecho主题 -->
				<div class="center_theme">
					<p class="center_exp_title">
					    <span>Typecho主题</span>
					    <span>💻</span>
					</p>
					<div class="center_theme_box">

						<!-- 循环主题 -->
						<?php
							$mid="2";//你的分类mid
							$this->widget('Widget_Archive@index'.$mid, 'pageSize=10&type=category', 'mid='.$mid)->to($themes);
						?>
						<?php if($themes->have()): ?>
							<?php while ($themes->next()): ?>
								<div class="center_theme_box_list">
									<div class="center_theme_box_list_img">
										<img src="<?php $themes->fields->cover(); ?>" alt="" />
									</div>
									<div class="center_theme_box_list_txt">
										<p class="center_theme_box_list_txt_title">
											<?php $themes->title();?>
										</p>
										<p class="center_theme_box_list_txt_miaoshu">
											<?php $themes->fields->brief();?>
										</p>
										<a href="<?php $themes->permalink();?>" class="center_theme_box_list_txt_btn">查看主题</a>
									</div>
								</div>
							<?php endwhile;?>
						<?php endif;?>
						<!-- 循环结束 -->
						
					</div>
				</div>
	
				<!-- 用户评价 -->
				<div class="center_test">
					<p class="center_exp_title">
					    <span>友情链接</span>
					    <span>🔗</span>
					</p>
					<div class="center_test_box">
					    
					    <!-- 信息 -->
						<a href="https://3.cn/28M9oy-l" target="_blank" class="center_test_box_list">
							<img src="<?php $this->options->themeUrl('images/link/jdcloud.svg'); ?>" alt="" />
							<div class="center_test_box_list_box">
								京东云
							</div>
						</a>
						<!-- 信息 -->
						<a href="https://www.9527.xyz/" target="_blank" class="center_test_box_list">
							<img src="<?php $this->options->themeUrl('images/link/9527_xyz.jpg'); ?>" alt="" />
							<div class="center_test_box_list_box">
								七六博客
							</div>
						</a>

					</div>
				</div>
	
				<!-- 页尾 -->
				<a href="https://beian.miit.gov.cn/" target="_blank" class="center_footer">湘ICP备2024043521号-3</a>
	
			</div>
		</body>
	</html>