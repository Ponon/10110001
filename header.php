<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh">
	<head>
	    <meta charset="UTF8">
		<meta name="renderer" content="webkit">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title><?php $this->archiveTitle([
				'category' => _t('分类 %s 下的文章'),
				'search'   => _t('包含关键字 %s 的文章'),
				'tag'      => _t('标签 %s 下的文章'),
				'author'   => _t('%s 发布的文章')
			], '', ' - '); ?><?php $this->options->title(); ?></title>

		<!-- 使用url函数转换相关路径 -->
		<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
		<link rel="stylesheet" href="<?php $this->options->themeUrl('css/media.css'); ?>" />
		<script src="<?php $this->options->themeUrl('js/best.js'); ?>"></script>
		<!-- iconfont -->
		<link rel="stylesheet" href="<?php $this->options->themeUrl('fonts/iconfont.css'); ?>">
		<!-- favicon -->
		<link rel="icon" type="image/x-icon" href="<?php $this->options->themeUrl('images/favicon.svg'); ?>">
		<!-- 通过自有函数输出HTML头部信息 -->
		<?php $this->header(); ?>
		<!-- 百度统计 -->
		<script>
			var _hmt = _hmt || [];
			(function() {
			  var hm = document.createElement("script");
			  hm.src = "https://hm.baidu.com/hm.js?d46149f0e99ef5ed2f9c918ff90b86e5";
			  var s = document.getElementsByTagName("script")[0]; 
			  s.parentNode.insertBefore(hm, s);
			})();
		</script>
	</head>
	<body>