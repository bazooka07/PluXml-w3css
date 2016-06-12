<?php if(!defined('PLX_ROOT')) exit; ?>

	<aside class="w3-col l4 s12" role="complementary">
		<div class="w3-card-4 w3-theme-light w3-margin w3-padding">

			<h3><i class="fa fa-folder-open" aria-hidden="true" ></i> <?php $plxShow->lang('CATEGORIES'); ?></h3>
			<ul class="cat-list unstyled-list"><?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?></ul>

			<h3><i class="fa fa-file-text-o" aria-hidden="true"></i> <?php $plxShow->lang('LATEST_ARTICLES'); ?></h3>
			<ul class="lastart-list unstyled-list "><?php $plxShow->lastArtList('<li> <a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?></ul>

			<h3><i class="fa fa-tags" aria-hidden="true" ></i> <?php $plxShow->lang('TAGS'); ?></h3>
			<ul class="tag-list w3-padding-0 w3-padding-left"><?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>'); ?></ul>

			<h3><i class="fa fa-comments-o" aria-hidden="true"></i> <?php $plxShow->lang('LATEST_COMMENTS'); ?></h3>
			<ul class="lastcom-list unstyled-list"><?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?></ul>

			<h3><i class="fa fa-archive" aria-hidden="true"></i> <?php $plxShow->lang('ARCHIVES'); ?></h3>
			<ul class="arch-list unstyled-list"><?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?></ul>

			<h3><i class="fa fa-rss" aria-hidden="true"></i> RSS</h3>
			<ul class="rss-list unstyled-list">
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></li>
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></li>
			</ul>
			
		</div>
	</aside>
