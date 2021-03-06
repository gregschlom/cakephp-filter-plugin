<?php
/*
This file is part of CakePHP Filter Plugin.
 
CakePHP Filter Plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
 
CakePHP Filter Plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with CakePHP Filter Plugin. If not, see <http://www.gnu.org/licenses/>.
*/
?>
<div class="filterForm">
	<?php echo $form->create(false, array('url' => '/'.$this->params['url']['url'], 'id' => $modelName.'Filter')); ?>
		<fieldset>
			<?php
			if (isset($options['legend']))
			{
				?><legend><?php echo $options['legend']; ?></legend><?php
			}
			?>
			<?php echo $form->input('Filter.filterFormId', array('type' => 'hidden', 'value' => $modelName)); ?>
