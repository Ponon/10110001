<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'logoUrl',
        null,
        null,
        _t('站点 LOGO 地址'),
        _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO')
    );

    $form->addInput($logoUrl);

    $sidebarBlock = new \Typecho\Widget\Helper\Form\Element\Checkbox(
        'sidebarBlock',
        [
            'ShowRecentPosts'    => _t('显示最新文章'),
            'ShowRecentComments' => _t('显示最近回复'),
            'ShowCategory'       => _t('显示分类'),
            'ShowArchive'        => _t('显示归档'),
            'ShowOther'          => _t('显示其它杂项')
        ],
        ['ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'],
        _t('侧边栏显示')
    );

    $form->addInput($sidebarBlock->multiMode());
}

/*
function themeFields($layout)
{
    $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'logoUrl',
        null,
        null,
        _t('站点LOGO地址'),
        _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO')
    );
    $layout->addItem($logoUrl);
}
*/


function getViewsStr($widget, $format = "{views}") {
    $fields = unserialize($widget->fields);
    if (array_key_exists('views', $fields))
        $views = (!empty($fields['views'])) ? intval($fields['views']) : 0;
    else
        $views = 0;
    
    //增加浏览次数
    if ($widget->is('single')) {
        $vieweds = Typecho_Cookie::get('contents_viewed');
        if (empty($vieweds))
            $vieweds = array();
        else
            $vieweds = explode(',', $vieweds);
        if (!in_array($widget->cid, $vieweds)) {
            $views = $views + 1;
            $widget->setField('views', 'str', strval($views), $widget->cid);
            $vieweds[] = $widget->cid;
            $vieweds = implode(',', $vieweds);
            Typecho_Cookie::set("contents_viewed",$vieweds);
        }
    }
    return str_replace("{views}", $views, $format);
}


function themeFields($layout) {
    $cover = new Typecho_Widget_Helper_Form_Element_Text('cover', null, null, _t('封面图'), _t('文章头图会显示在文章的顶部。'));
    $cover->input->setAttribute('class', 'w-100');//这是自定义输入框的样式
	
	$brief = new Typecho_Widget_Helper_Form_Element_Text('brief', null, null, _t('简介'), _t('首页调用字段'));
    $brief->input->setAttribute('class', 'w-100');//这是自定义输入框的样式
	
	$url = new Typecho_Widget_Helper_Form_Element_Text('url', null, null, _t('链接'), _t('这个东西就是项目地址，可以让用户跳转的。'));
    $url->input->setAttribute('class', 'w-100');//这是自定义输入框的样式
    
	$layout->addItem($cover);  //  注册
    $layout->addItem($brief);  //  注册
    $layout->addItem($url);  //  注册
}