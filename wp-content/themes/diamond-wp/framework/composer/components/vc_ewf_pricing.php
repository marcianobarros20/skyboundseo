<?php


	add_shortcode( 'ewf-pricing-item', 'ewf_vc_pricing_item' );
	
	
	function ewf_vc_pricing_item( $atts, $content ) {
	   extract( shortcode_atts( array(
		  'plan' => __('Starter edition',EWF_SETUP_THEME_DOMAIN),
		  'cost' => '30',
		  'currency' => '$',
		  'icon' => null,
		  'options' => null,
		  'period' => __('/mo',EWF_SETUP_THEME_DOMAIN),
		  'link' => '#'
	   ), $atts ) );
	 
		$link = vc_build_link($link); 
	 
		ob_start();
		
		
		
		echo '<div class="pricing-table">';
			
			echo '<div class="price-heading">';
			
				if ($icon){
					echo '<i class="'.$icon.'"></i>';
				}
				
				echo '<h1>' . $cost . '</h1>';
				echo '<h4>'.$plan.'</h4>';
				
			echo '</div><!-- end .price-heading -->';
			
			echo '<div class="pricing-features">';
			echo '<ul>';
				$all_options = explode (',', $options);
				
				foreach($all_options as $index => $option_item){
					echo '<li>'.$option_item.'</li>';
				}
				
			echo '</ul>';
			echo '</div>';
			
			if ($link['title'] != null){
				echo '<p class="text-center"><a class="btn" href="'.$link['url'].'">'.$link['title'].'</a></p>';
			}
			
		echo '</div>';

		
		return ob_get_clean();
	}

	
	vc_map( array(
	   "name" => __("Pricing Table", EWF_SETUP_THEME_DOMAIN),
	   "base" => "ewf-pricing-item",
	   "class" => "",
	   "icon" => "icon-wpb-ewf-pricing-item",
	   // "description" => __("Shows a pricing table row", EWF_SETUP_THEME_DOMAIN),  
	   "category" => __('Content', EWF_SETUP_THEME_DOMAIN),
	   "params" => array(
		  array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Plan name", EWF_SETUP_THEME_DOMAIN),
			 "param_name" => "plan",
			 "value" => __('Starter edition',EWF_SETUP_THEME_DOMAIN),
			 // "description" => __("The final value will animate to, from 0 to the number provided by you", EWF_SETUP_THEME_DOMAIN)
		  ),
		  array(
			 "type" => "ewf-icon",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Select Icon", EWF_SETUP_THEME_DOMAIN),
			 "param_name" => "icon",
			 "value" => null,
			 "description" => __("Select the icon you want to have asside plan name", EWF_SETUP_THEME_DOMAIN)
		  ),
		  array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Cost", EWF_SETUP_THEME_DOMAIN),
			 "param_name" => "cost",
			 "value" => '30',
			 // "description" => __("The final value will animate to, from 0 to the number provided by you", EWF_SETUP_THEME_DOMAIN)
		  ),		  
		  // array(
			 // "type" => "textfield",
			 // "holder" => "div",
			 // "class" => "",
			 // "heading" => __("Currency", EWF_SETUP_THEME_DOMAIN),
			 // "param_name" => "currency",
			 // "value" => '$',
			 // "description" => __("The final value will animate to, from 0 to the number provided by you", EWF_SETUP_THEME_DOMAIN)
		  // ),
		  // array(
			 // "type" => "textfield",
			 // "holder" => "div",
			 // "class" => "",
			 // "heading" => __("Period", EWF_SETUP_THEME_DOMAIN),
			 // "param_name" => "period",
			 // "value" => __('per year',EWF_SETUP_THEME_DOMAIN)
			 // "description" => __("The final value will animate to, from 0 to the number provided by you", EWF_SETUP_THEME_DOMAIN)
		  // ),		  
		  array(
			 "type" => "exploded_textarea",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Plan features (add one per line)", EWF_SETUP_THEME_DOMAIN),
			 "param_name" => "options",
			 "value" => null
			 // "description" => __("The final value will animate to, from 0 to the number provided by you", EWF_SETUP_THEME_DOMAIN)
		  ),
		  array(
			 "type" => "vc_link",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Read more button", EWF_SETUP_THEME_DOMAIN),
			 "param_name" => "link",
			 "value" => '#',
			 "description" => __("Specify an optional link pointing to a details page", EWF_SETUP_THEME_DOMAIN) 
		  )
	   )
	));



?>