<style type="text/css">
#selBanner{
display: none;
}
#slideshow_container {
min-height:428px;
}
</style>
<?php
 		$query = $this->db->get_where('admin',array('id' => 1));
			$q = $query->result();
 ?>
<div id="main">
<div id="selContentHome" class="clsClearFix">			
		

<div id="selBanner" class="clsFloatRight">
    <div id="slideshow_container">
	        <?php echo $divprint; ?>
    </div>
    <script type="text/javascript">
        var loadImmediately = [];
    </script>

        <div class="rounded_top" id="slideshow_controls">
            <a id="ss_button_prev" href="javascript:void(0);" class="ss_button_icon"></a>
            <a id="ss_button_pause_play" href="javascript:void(0);" class="ss_button_icon ss_button_pause"></a>
            <a id="ss_button_next" href="javascript:void(0);" class="ss_button_icon"></a>
        </div>
    </div>


			
				
	<div id="selSearch" class=" clsFloatLeft">
		<h2><span><?php echo $this->db->get_where('settings',array('code' => 'SITE_SLOGAN'))->row()->string_value; ?></span></h2>

		
  <div class="cls_bor">
		<form action="<?php echo site_url('search')?>" id="search_form" method="post">     	
        <div class="clsClearFix" id="search">
		 		 
			<div class="clsSearchBox clsFloatLeft">
       <label for="location" class="inner_text" id="location_label" style="display:none;"><?php echo translate("Where are you going?"); ?> </label>
            <input type="text" class="location rounded_left" autocomplete="off" id="location" name="location" />
					   
			</div>
			<div class="clsSearch clsFloatLeft">
			  <input type="submit" value="<?php echo translate("Search"); ?>" class="clsSearchButton" name="Submit">
			</div>
			
			 
		</div>
		<p id="enter_location_error_message" class="bad" style="display:none; clear:both; margin-left: 27px; font-weight: bold; color:#fff;"><?php echo translate("Please set location"); ?></p>
		<div class="cls_all clearfix">
		
		<div class="cls_chat clearfix">
  	<p><?php echo translate("Check in"); ?>:</p>
				<p><input type="text" id="checkin" class="checkin" name="checkin" value="mm/dd/yy" /></p>
  </div>
  <div class="cls_chat">
  	<p><?php echo translate("Check out"); ?>:</p>
   <p><input type="text" id="checkout" class="checkout" name="checkout" value="mm/dd/yy" /></p>
  </div>
  <div class="cls_chat clsNoPadding">
  	<p><?php echo translate("Guests"); ?></p>
	<div class="cls_chatsel">
<p>
<select name="number_of_guests" id="number_of_guests">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>

<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>

<option value="14">14</option>
<option value="15">15</option>
<option value="16">16+</option>
</select>
</p>
	</div>
	</div>
	</div>
</form>
	  <!--check box-->
	 
  </div>
  
  </div>

 
  </div>
  </div>

<!--Invites-->
<div style="clear:both;"></div>

<div class="cls_drop ">
<ul class="clsClearFix">
	<li><a href="<?php echo site_url('info/how_it_works'); ?>">
		<img src="<?php echo base_url(); ?>css/images/img1.jpg" width="221" height="124" alt="" title="" />
		<p class="cls_work"><?php echo translate("How It's Works"); ?></p>
		</a>
	</li>
	<li><a href="#"><img src="<?php echo base_url(); ?>css/images/img2.jpg" width="230" height="124" alt="" title="" /></a></li>
	<li class="clsImgNoBorder"><a href="<?php echo site_url('#'); ?>">
		<img src="<?php echo base_url(); ?>css/images/himg3.png" width="240" height="140" alt="" title="" />
		<p class="cls_inv"><?php echo translate("INVITE NOW"); ?></p></a>
	</li>
	<li><a href="#">
		<img src="<?php echo base_url(); ?>css/images/img4.jpg" width="230" height="124" alt="" title="" />
		<p class="cls_enter"><?php echo translate("ENTER NOW"); ?></p></a>
	</li>
</ul>	
</div>




<div style="clear:both;"></div>

<table class="clsPress_Bg">
<tr>
	<td style="padding:0 0 0 10px;"><span><?php echo translate("As seen on"); ?>:</span></td>
	<td><a href="#"><img src="<?php echo base_url(); ?>css/images/prees_img.png" alt="image" /></a></td>
	</tr>
</table>
<!--Invites Ends-->

  	<script type="text/javascript">

			window.fbAsyncInit = function() {
				FB.init({
					appId  : '02e3aebb07b4f37b41893ae7713c8fdc',
					status : true, 
					cookie : true, 
					xfbml  : true  
				});

				FB.getLoginStatus(function(response) {
					if (response && (response.status !== "unknown")) {
						jQuery.cookie("fbs", response.status);
					} else {
						jQuery.cookie("fbs", null);
					}
				});
				
				jQuery(document).trigger('fbInit');
			};

			(function() {
				var e = document.createElement('script');
				e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
				e.async = true;
				document.getElementById('fb-root').appendChild(e);
			}());


		jQuery(document).ready(function() {
    Translations.review = "review";
    Translations.reviews = "reviews";
    Translations.night = "night";

    var opts = {};

    CogzidelHomePage.init(opts);
    CogzidelHomePage.defaultSearchValue = "Where are you going?";
});

jQuery(window).load(function() {
	CogzidelHomePage.initSlideshow();
	jQuery('#selBanner').css({ display: 'block'});
});

if ((navigator.userAgent.indexOf('iPhone') == -1) && (navigator.userAgent.indexOf('iPod') == -1) && (navigator.userAgent.indexOf('iPad') == -1)) {
    jQuery(window).load(function() {
        LazyLoad.js([
			"<?php echo base_url(); ?>js/jquery.autocomplete_custom.pack.js",
			"<?php echo base_url(); ?>js/en_autocomplete_data.js"],
			function() {
            	jQuery("#location").autocomplete(autocomplete_terms, {
	                minChars: 1, width: 301, max:20, matchContains: false, autoFill: true,
	                formatItem: function(row, i, max) {
	                   
	                    return Cogzidel.Utils.decode(row.k);
	                },
	                formatMatch: function(row, i, max) {
	                    return Cogzidel.Utils.decode(row.k);
	                },
	                formatResult: function(row) {
	                    return Cogzidel.Utils.decode(row.k);
	                }
	            });
	        }
		);
    });
}


		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-2725447-1']);
		_gaq.push(['_setDomainName', '.cogzidel.com']);

		(function() {
			var m = /affiliate=([^;]*)/.exec(document.cookie);
			if (m) {_gaq.push(["_setCustomVar", 1, "affiliate", m[1]]);}
		})();

			_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

		jQuery(document).ready(function() {
			Cogzidel.init({userLoggedIn: false});
		});

		Cogzidel.FACEBOOK_PERMS = "email,user_birthday,user_likes,user_education_history,user_hometown,user_interests,user_activities,user_location";
	</script>

	<script type="text/javascript" charset="utf-8">NREUMQ.push(["nrf2","beacon-1.newrelic.com","fc09a36731",2237,"dlwMQktaWAgBEB1aXFhWTV9XUVEc",0,23])</script>