<?php echo form_open('backend/updatepay'); ?>

<?php  				
		// Show reset password message if exist
		if (isset($reset_message))
			echo $reset_message;
		
		// Show error
		echo validation_errors();
		
			$tmpl = array (
																'table_open'          => '<table class="table" border="0" cellpadding="4" cellspacing="0">',

																'heading_row_start'   => '<tr>',
																'heading_row_end'     => '</tr>',
																'heading_cell_start'  => '<th>',
																'heading_cell_end'    => '</th>',

																'row_start'           => '<tr>',
																'row_end'             => '</tr>',
																'cell_start'          => '<td>',
																'cell_end'            => '</td>',

																'row_alt_start'       => '<tr>',
																'row_alt_end'         => '</tr>',
																'cell_alt_start'      => '<td>',
																'cell_alt_end'        => '</td>',

																'table_close'         => '</table>'
										);

		$this->table->set_template($tmpl);
		
			$this->table->set_heading('Payuser');
			$accept = $users[0]->whom;
			if($accept == 1)
			{
				$this->table->add_row(
				form_checkbox('check', 'payuser', TRUE)
				);
				echo form_checkbox('newsletter', 'accept', TRUE);
			}
			else
			{
				$this->table->add_row(
				form_checkbox('check', 'payuser')
				);
			}
		
		echo form_open($this->uri->uri_string());
				
		echo '<div class="clsUser_Buttons"><ul class="clearfix"><li>';			
	 echo form_submit('delete', 'Update Payment mode');
		echo '</li></ul></div>';
		
		echo $this->table->generate(); 
		
		echo form_close();
			
	?>