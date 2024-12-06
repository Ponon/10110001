<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
        <div class="poster_comments">
            <div class="poster_comments_header">
				<p>评论列表</p>
				<p>
					<span><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></span>
		    	</p>
			</div>
            <?php $comments->listComments(); ?>
            <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="cancel-comment-reply">
                <?php $comments->cancelReply(); ?>
            </div>

            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                <?php if ($this->user->hasLogin()): ?>
                    
                    <div class="comment_bbb">
                        <div class="comment-top">
                            <p>
                                <textarea placeholder="请输入评论内容" rows="4" cols="50" name="text" id="textarea" class="textarea"
                                  required><?php $this->remember('text'); ?></textarea>
                            </p>
                        </div>
                        <!--下面-->
                        <div class="comment-user-bottom">
                            <!--称呼-->
                            <div class="comment-user-bottom-1"><?php $this->user->screenName(); ?></div>
                            <!--按钮-->
                            <a class="comment-user-bottom-2" href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a>
                            
                            <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
                            
                        </div>
                    </div>
                    
                <?php else: ?>
                    <div class="comment_bbb">
                        <div class="comment-top">
                            <p>
                                <textarea rows="4" placeholder="请输入评论内容" cols="50" name="text" id="textarea" class="textarea"
                                          required><?php $this->remember('text'); ?></textarea>
                            </p>
                        </div>
                        <!--下面-->
                        <div class="comment-bottom">
                            <!--称呼-->
                            <input type="text" name="author" placeholder="请输入用户名" autocomplete="off" id="author" class="text"
                                       value="<?php $this->remember('author'); ?>" required/>
                            <!--按钮-->
                            <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
                            
                        </div>
                    </div>
                    
                    
                <?php endif; ?>
            </form>
        </div>
    <?php else: ?>
        <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
