<!--Footer-->
<div id="selFooter">
	<ul class="clsClearFix">
		
		<li><a href="<?php echo base_url()?>pages/contact"><?php echo translate("Contact"); ?></a></li>
		<?php
		$pages = $this->db->get('page')->result();
		if(isset($pages))
		{
				foreach($pages as $page)
				{
				echo 	'<li><a href="'. base_url().'pages/view/'.$page->page_url .'">'.$page->page_title.'</a></li>';
				}
		}
		?>
		<li><span class="clsBold"><?php echo translate("Best Deals"); ?>:&nbsp;&nbsp;</span> <a href="#">&nbsp; <?php echo translate("New York"); ?></a></li>
		<li><a href="#"><?php echo translate("San Francisco"); ?></a></li>
		<li><a href="#"><?php echo translate("Paris"); ?></a></li>
		<li class="clsFoot_Last_li"><a href="#"><?php echo translate("Top Cities"); ?></a></li>
	</ul>
	<p><span class="clsBold"><?php echo translate("Join us on"); ?> :</span> Twitter & Facebook   <?php echo translate("Copyrights 2011"); ?> &copy; <?php echo $this->dx_auth->get_site_title(); ?> - <a href="http://www.cogzidel.com/">Cogzidel Technologies P Ltd</a>.</p>
</div>

		<?php 
			/*trans('test');*/
			$google_analytics = $this->db->get_where('settings', array('code' => 'GOOGLE_ANALYTICS_CODE'))->row()->text_value;
			
			if($google_analytics) echo $google_analytics;
		?>
<!--Footer Ends-->
</body>
</html>