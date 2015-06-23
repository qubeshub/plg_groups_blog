<?php
/**
 * HUBzero CMS
 *
 * Copyright 2005-2015 Purdue University. All rights reserved.
 *
 * This file is part of: The HUBzero(R) Platform for Scientific Collaboration
 *
 * The HUBzero(R) Platform for Scientific Collaboration (HUBzero) is free
 * software: you can redistribute it and/or modify it under the terms of
 * the GNU Lesser General Public License as published by the Free Software
 * Foundation, either version 3 of the License, or (at your option) any
 * later version.
 *
 * HUBzero is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * HUBzero is a registered trademark of Purdue University.
 *
 * @package   hubzero-cms
 * @author    Shawn Rice <zooley@purdue.edu>
 * @copyright Copyright 2005-2015 Purdue University. All rights reserved.
 * @license   http://www.gnu.org/licenses/lgpl-3.0.html LGPLv3
 */

// No direct access
defined('_HZEXEC_') or die();

?>
<table class="activity">
	<tbody>
<?php
if ($this->entries) {
	foreach ($this->entries as $entry)
	{
?>
		<tr>
			<th scope="row"><?php echo $area; ?></th>
			<td class="author"><a href="<?php echo Route::url('index.php?option=com_members&id='.$entry->created_by); ?>"><?php echo stripslashes($name); ?></a></td>
			<td class="action"><?php echo stripslashes($entry->title); ?></td>
			<td class="date"><?php echo Date::of($entry->publish_up)->toLocal(Lang::txt('DATE_FORMAT_HZ1') . ' @' . Lang::txt('TIME_FORMAT_HZ1')); ?></td>
		</tr>
<?php
	}
} else {
	// Do nothing if there are no events to display
?>
		<tr>
			<td><?php echo Lang::txt('PLG_GROUPS_BLOG_NO_ENTRIES_FOUND'); ?></td>
		</tr>
<?php
}
?>
	</tbody>
</table>
