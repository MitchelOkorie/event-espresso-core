<h4><?php echo $category->category_name ?></h4>
<table class="form-table">
	<tbody>
		<tr>
			<th><label for="category_name">
					<?php _e('Category Name', 'event_espresso'); ?>
					<em title="<?php _e('This field is required', 'event_espresso') ?>"> *</em></label></th>
			<td><input id="category_name" type="text" name="category_name" value="<?php echo $category->category_name;?>" /></td>
		</tr>
		<tr>
			<th><label for="cat_id">
					<?php _e('Unique ID', 'event_espresso'); ?>
					<?php echo $unique_id_info_help_link; ?>
				</label></th>
			<td><input id="cat_id"  type="text" name="category_identifier" value="<?php echo $category->category_identifier;?>" /></td>
		</tr>
		<tr>
			<td colspan="2"><h4>
				<?php _e('Category Description', 'event_espresso'); ?>
			</h4></td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $category_desc_editor; ?>
				<table id="cat-descr-add-form" cellspacing="0">
					<tbody>
						<tr>
							<td class="aer-word-count"></td>
							<td class="autosave-info"><span>
								<p></p>
								</span></td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>