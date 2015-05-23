<?php
/**
 * @package		Noxidsoft.Site
 * @subpackage	mod_articles_popdate
 * @copyright	Copyright (C) 2007 - 2013 Noxidsoft. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<ul class="mostread<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) : ?>
	<li>
		<a href="<?php echo $item->link; ?>">
			<?php echo $item->title; ?></a>
			
		
	</li>
<?php endforeach; ?>
</ul>
