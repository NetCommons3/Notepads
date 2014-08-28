<?php
/**
 * index/status_label template elements
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @package     app.Plugin.Notepads.View.Elements.index
 */
?>

<div>
	<span class="label label-info ng-hide"
		  ng-init="Label.publish=<?php echo ($notepad['Notepad']['status'] === Notepad::STATUS_PUBLISHED ? 'true' : 'false'); ?>"
		  ng-show="Label.publish"
	>
		<?php echo __d('notepads', 'Publish'); ?>
	</span>

	<span class="label label-info ng-hide"
		  ng-init="Label.approval=<?php echo ($notepad['Notepad']['status'] === Notepad::STATUS_APPROVED ? 'true' : 'false'); ?>"
		  ng-show="Label.approval"
	>
		<?php echo __d('notepads', 'Approval'); ?>
	</span>

	<span class="label label-info ng-hide"
		  ng-init="Label.draft=<?php echo ($notepad['Notepad']['status'] === Notepad::STATUS_DRAFTED ? 'true' : 'false'); ?>"
		  ng-show="Label.draft"
	>
		<?php echo __d('notepads', 'Draft'); ?>
	</span>

	<span class="label label-info ng-hide"
		  ng-init="Label.disapproval=<?php echo ($notepad['Notepad']['status'] === Notepad::STATUS_DISAPPROVED ? 'true' : 'false'); ?>"
		  ng-show="Label.disapproval"
	>
		<?php echo __d('notepads', 'Disapproval'); ?>
	</span>

</div>
