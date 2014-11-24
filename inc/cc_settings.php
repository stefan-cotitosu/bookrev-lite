<?php
// Setup theme customizer
if(!function_exists('book_rev_lite_theme_customizer')) {
	function book_rev_lite_theme_customizer($wpc) {
		// Load the custom Customizer Controls
		require_once( get_template_directory() . '/inc/cc_controls.php' );
		$wpc->add_section( 'cwp_theme_notes' , array(
		'title'      => __('Theme Support','book-rev-lite'),
		'description' => sprintf( __( "Thank you for being part of this! We've spent almost 6 months building ThemeIsle without really knowing if anyone will ever use a theme or not, so we're very grateful that you've decided to work with us. Wanna <a href='http://themeisle.com/contact/' target='_blank'>say hi</a>?
		<br/><br/> <a href='https://themeisle.com/forums/forum/bookrev-lite' target='_blank'>Support Forum</a> | <a href='https://themeisle.com/documentation-bookrev-lite' target='_blank'>Documentation</a>")),
		'priority'   => 1,
		));

		$wpc->add_setting('cwp_theme_notes', array('sanitize_callback' => 'bookrev_lite_sanitize_notes'));

		$wpc->add_control( new book_rev_lite_Theme_Support( $wpc, 'cwp_theme_notes',
	    array(
	        'section' => 'cwp_theme_notes',
	    )));

		/* Add the social section */
		$wpc->add_section(
			'general_settings_section',
			array(
					'title'			=> __("General Settings", "book-rev-lite"),
					'priority'		=> 1
				)
		);

			// Default Article Image Upload Setting
			$wpc->add_setting('default-article-image-upload',array('sanitize_callback' => 'esc_url_raw'));

			// Default Article Image Upload Control
			$wpc->add_control(
				new WP_Customize_Image_Control(
					$wpc,
					'default-article-image-upload',
					array(
						'label'		=> __("Default Post Featured Image","book-rev-lite"),
						'section'	=> "general_settings_section",
						'settings'	=> 'default-article-image-upload'
					)
				)
			);

			// Default Article Product Image Upload Setting
			$wpc->add_setting('default-product-image-upload',array('sanitize_callback' => 'esc_url_raw'));

			// Default Article Image Upload Control
			$wpc->add_control(
				new WP_Customize_Image_Control(
					$wpc,
					'default-product-image-upload',
					array(
						'label'		=> __("Default Product Image","book-rev-lite"),
						'section'	=> "general_settings_section",
						'settings'	=> 'default-product-image-upload'
					)
				)
			);
			
			// Website Favicon Image Upload Setting
			$wpc->add_setting('favicon-image',array('sanitize_callback' => 'esc_url_raw'));

			// Website Favicon Image Upload Control
			$wpc->add_control(
				new WP_Customize_Image_Control(
					$wpc,
					'favicon-image',
					array(
						'label'		=> __("Website Favicon","book-rev-lite"),
						'section'	=> "general_settings_section",
						'settings'	=> 'favicon-image'
					)
				)
			);

		/* Add the social section */
		$wpc->add_section(
			'wpc_social_section',
			array(
					'title'			=> __("Social Links", "book-rev-lite"),
					'description'	=> __("Set up the social links that you would like to display in the header. We recommend to display maximum 5 icons so the design doesn't break.", "book-rev-lite"),
					'priority'		=> 35
				)
		);

			/**
			 *  Google Plus Link
			 */
			// Google Plus Setting
			$wpc->add_setting('gplus_href',array('sanitize_callback' => 'esc_url_raw'));

			// Google Plus Control
			$wpc->add_control(
			    'gplus_href',
			    array(
			        'label' 	=> 'Google Plus',
			        'section' 	=> 'wpc_social_section',
			        'type' 		=> 'text',
			    )
			);


			/**
			 *  Facebook Link
			 */
			// Facebook Setting
			$wpc->add_setting('facebook_href',array('sanitize_callback' => 'esc_url_raw'));

			// Facebook Control
			$wpc->add_control(
			    'facebook_href',
			    array(
			        'label' 	=> 'Facebook',
			        'section' 	=> 'wpc_social_section',
			        'type' 		=> 'text',
			    )
			);

			/**
			 *  Twitter Link
			 */
			// Twitter Setting
			$wpc->add_setting( 'twitter_href',array('sanitize_callback' => 'esc_url_raw'));

			// Twitter Control
			$wpc->add_control(
			    'twitter_href',
			    array(
			        'label' 	=> 'Twitter',
			        'section' 	=> 'wpc_social_section',
			        'type' 		=> 'text',
			    )
			);

			/**
			 *  Instagram Link
			 */
			// Instagram Setting
			$wpc->add_setting('instagram_href',array('sanitize_callback' => 'esc_url_raw'));

			// Instagram Control
			$wpc->add_control(
			    'instagram_href',
			    array(
			        'label' 	=> 'Instagram',
			        'section' 	=> 'wpc_social_section',
			        'type' 		=> 'text',
			    )
			);

			/**
			 *  Pinterest Link
			 */
			// Pinterest Setting
			$wpc->add_setting('pinterest_href',array('sanitize_callback' => 'esc_url_raw'));

			// Pinterest Control
			$wpc->add_control(
			    'pinterest_href',
			    array(
			        'label' 	=> 'Pinterest',
			        'section' 	=> 'wpc_social_section',
			        'type' 		=> 'text',
			    )
			);

			/**
			 *  YouTube Link
			 */
			// YouTube Setting
			$wpc->add_setting('youtube_href',array('sanitize_callback' => 'esc_url_raw'));

			// YouTube Control
			$wpc->add_control(
			    'youtube_href',
			    array(
			        'label' 	=> 'YouTube',
			        'section' 	=> 'wpc_social_section',
			        'type' 		=> 'text',
			    )
			);

			/**
			 *  Vimeo Link
			 */
			// Vimeo Setting
			$wpc->add_setting('vimeo_href',array('sanitize_callback' => 'esc_url_raw'));

			// Vimeo Control
			$wpc->add_control(
			    'vimeo_href',
			    array(
			        'label' 	=> 'Vimeo',
			        'section' 	=> 'wpc_social_section',
			        'type' 		=> 'text',
			    )
			);

			/**
			 *  Tumblr Link
			 */
			// Tumblr Setting
			$wpc->add_setting('tumblr_href',array('sanitize_callback' => 'esc_url_raw'));

			// Tumblr Control
			$wpc->add_control(
			    'tumblr_href',
			    array(
			        'label' 	=> 'Tumblr',
			        'section' 	=> 'wpc_social_section',
			        'type' 		=> 'text',
			    )
			);

			/**
			 *  LinkedIn Link
			 */
			// LinkedIn Setting
			$wpc->add_setting('linkedin_href',array('sanitize_callback' => 'esc_url_raw'));

			// LinkedIn Control
			$wpc->add_control(
			    'linkedin_href',
			    array(
			        'label' 	=> 'LinkedIn',
			        'section' 	=> 'wpc_social_section',
			        'type' 		=> 'text',
			    )
			);

			/**
			 *  Flickr Link
			 */
			// Flickr Setting
			$wpc->add_setting('flickr_href',array('sanitize_callback' => 'esc_url_raw'));

			// Flickr Control
			$wpc->add_control(
			    'flickr_href',
			    array(
			        'label' 	=> 'Flickr',
			        'section' 	=> 'wpc_social_section',
			        'type' 		=> 'text',
			    )
			);


		/* Add the footer section */
		$wpc->add_section(
			'wpc_footer_section',
			array(
					'title'			=> __("Footer Settings", "book-rev-lite"),
					'description'	=> __("Customize the footer by changing the background color, logo or the copyright text.", "book-rev-lite"),
					'priority'		=> 35
				)
		);

			/**
			 *  Copyright text Setting & Control
			 */
			// Copyright Text Setting
			$wpc->add_setting(
			    'copyright_textbox',
			    array(
			        'default' => __("WordPress Theme developed by ThemeIsle", "book-rev-lite"), 'sanitize_callback' => 'book_rev_lite_sanitize_text'
			    )
			);
			// Copyright Text Control
			$wpc->add_control(
			    'copyright_textbox',
			    array(
			        'label' 	=> __('Copyright Text', "book-rev-lite"),
			        'section' 	=> 'wpc_footer_section',
			        'type' 		=> 'text',
			    )
			);

		/**
		 *  Lower Footer Background Color Setting & Control
		 */
			// Lower Footer Background Color Setting
			$wpc->add_setting(
				'lower-footer-background-color',
				array(
					'default' 			=> '#3c3c3c',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Lower Footer Background Color Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'lower-footer-background-color',
					array(
						'label'		=> __('Lower Footer Background Color', "book-rev-lite"),
						'section'	=> 'wpc_footer_section',
						'settings'	=> 'lower-footer-background-color'
					)
				)
			);

		/**
		 * Footer Background Color
		 */
			// Footer Background Color
			$wpc->add_setting(
				'footer-background-color',
				array(
					'default' 			=> '#fffff',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Lower Footer Background Color Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'footer-background-color',
					array(
						'label'		=> __('Background Color', "book-rev-lite"),
						'section'	=> 'wpc_footer_section',
						'settings'	=> 'footer-background-color'
					)
				)
			);

		/**
		 *  Footer Logo Image Upload
		 */
		
			// Footer Logo Upload Setting
			$wpc->add_setting('footer-logo-upload', array('sanitize_callback' => 'esc_url_raw'));

			// Footer Logo Upload Control
			$wpc->add_control(
				new WP_Customize_Image_Control(
					$wpc,
					'footer-logo-upload',
					array(
						'label'		=> __("Footer Logo Image","book-rev-lite"),
						'section'	=> "wpc_footer_section",
						'settings'	=> 'footer-logo-upload'
					)
				)
			);

			// Display Footer Logo Image Setting & Control 
			$wpc->add_setting('mp_display_footer_logo_image',
				array(
						"default"	=> true, 'sanitize_callback' => 'esc_url_raw'
					)
				);
			$wpc->add_control(
				'mp_display_footer_logo_image',
				array(
					'type'		=> 'checkbox',
					'label'		=> __("Display Footer Logo Image", "book-rev-lite"),
					'section'	=> 'wpc_footer_section'
				)

			);

		/* Add the header section */
		$wpc->add_section(
			'wpc_header_section',
			array(
					'title'			=> __("Header Settings", "book-rev-lite"),
					'description'	=> __("Customize the header of your website by changing the background color of the header or menu. Also set up your logo and choose whether to display the header advertisment banner (468x61) or not. , ", "book-rev-lite"),
					'priority'		=> 35
				)
		);


			// Display Slider Setting & Control 
			$wpc->add_setting('head_display_ad', array(
				"default" => false , 'sanitize_callback' => 'book_rev_lite_sanitize_checkbox'
				));
			$wpc->add_control(
				'head_display_ad',
				array(
					'type'		=> 'checkbox',
					'label'		=> __("Display Advertisment", "book-rev-lite"),
					'section'	=> 'wpc_header_section',
					'priority'	=> 1
				)

			);

		/**
		 * Header Background Color
		 */
			// Header Background Color setting
			$wpc->add_setting(
				'header-background-color',
				array(
					'default' 			=> '#f9f9f9',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Lower Header Background Color Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'header-background-color',
					array(
						'label'		=> __('Header Background Color', "book-rev-lite"),
						'section'	=> 'wpc_header_section',
						'settings'	=> 'header-background-color'
					)
				)
			);

		/**
		 * Menu Header Background Color
		 */
			// Menu Header Background Color Setting
			$wpc->add_setting(
				'header-menu-background-color',
				array(
					'default' 			=> '#fffff',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Menu Header Background Color Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'header-menu-background-color',
					array(
						'label'		=> __('Header Menu Background Color', "book-rev-lite"),
						'section'	=> 'wpc_header_section',
						'settings'	=> 'header-menu-background-color'
					)
				)
			);

		/**
		 *  Header Advertisment Banner Image Upload
		 */
		
			// Header Advertisment Banner Image Setting
			$wpc->add_setting('header-ad-img', array('sanitize_callback' => 'esc_url_raw'));

			// Header Advertisment Banner Image Control
			$wpc->add_control(
				new WP_Customize_Image_Control(
					$wpc,
					'header-ad-img',
					array(
						'label'		=> __("Advertisment Banner Image", "book-rev-lite"),
						'section'	=> "wpc_header_section",
						'settings'	=> 'header-ad-img',
						'priority'	=> 2
					)
				)
			);

		/**
		 *  Header Advertisment URL Setting & Control
		 */
			// Header Advertisment URL Setting
			$wpc->add_setting(
			    'header-ad-url', array('sanitize_callback' => 'esc_url_raw')
			);

			// Header Advertisment URL Control
			$wpc->add_control(
			    'header-ad-url',
			    array(
			        'label' 	=> __('Advertisment Banner URL', 'book-rev-lite'),
			        'section' 	=> 'wpc_header_section',
			        'type' 		=> 'text',
					'priority'	=> 4
			    )
			);

		/**
		 *  Header Advertisment Alt Setting & Control
		 */
			// Header Advertisment Alt Setting
			$wpc->add_setting(
			    'header-ad-alt',
			    array(
			        'default' => __("This is the default advertisment banner that comes with the theme. You can change it using the WordPress Customizer.", "book-rev-lite"),'sanitize_callback' => 'book_rev_lite_sanitize_text'
			    )
			);

			// Header Advertisment Alt Control
			$wpc->add_control(
			    'header-ad-alt',
			    array(
			        'label' 	=> __('Advertisment Banner Description', 'book-rev-lite'),
			        'section' 	=> 'wpc_header_section',
			        'type' 		=> 'text',
					'priority'	=> 3
			    )
			);

		/**
		 *  Header Logo Upload
		 */
		
			// Header Logo Setting
			$wpc->add_setting('header-logo',array('sanitize_callback' => 'esc_url_raw'));

			// Header Logo Control
			$wpc->add_control(
				new WP_Customize_Image_Control(
					$wpc,
					'header-logo',
					array(
						'label'		=> __("Logo", "book-rev-lite"),
						'section'	=> "wpc_header_section",
						'settings'	=> 'header-logo'
					)
				)
			);

		/**
		 *  Logo Width Setting & Control
		 */
			// Logo Width Setting
			$wpc->add_setting('logo-width',
				array(
					'default'	=> '176', 'sanitize_callback' => 'book_rev_lite_sanitize_number'
				)
			);

			// Logo Width Control
			$wpc->add_control(
			    'logo-width',
			    array(
			        'label' 	=> __('Logo Width', 'book-rev-lite'),
			        'section' 	=> 'wpc_header_section',
			        'type' 		=> 'text',
			        'priority'		=> 35
			    )
			);

		/**
		 *  Logo Height Setting & Control
		 */
			// Logo Height Setting
			$wpc->add_setting('logo-height',
				array(
					'default'	=> '56','sanitize_callback' => 'book_rev_lite_sanitize_number'
				)
			);

			// Logo Height Control
			$wpc->add_control(
			    'logo-height',
			    array(
			        'label' 	=> __('Logo Height', 'book-rev-lite'),
			        'section' 	=> 'wpc_header_section',
			        'type' 		=> 'text',
			        'priority'	=> 35
			    )
			);

		/* Add the main-page section */
		$wpc->add_section(
			'wpc_main_page_section',
			array(
					'title'			=> __("Main Page", "book-rev-lite"),
					'description'	=> __("Here you can customize the way you want your main page to look and choose a predefined template for it.", "book-rev-lite"),
					'priority'		=> 35
				)
		);

			// Display Slider Setting & Control 
			$wpc->add_setting('mp_display_slider', array('sanitize_callback' => 'book_rev_lite_sanitize_checkbox'));
			$wpc->add_control(
				'mp_display_slider',
				array(
					'type'		=> 'checkbox',
					'label'		=> __("Display Slider", "book-rev-lite"),
					'section'	=> 'wpc_main_page_section'
				)

			);

			// Display Featured From Category Setting & Control 
			$wpc->add_setting('mp_display_ffc', array('sanitize_callback' => 'book_rev_lite_sanitize_checkbox'));
			$wpc->add_control(
				'mp_display_ffc',
				array(
					'type'		=> 'checkbox',
					'label'		=> __("Display Featured Category Block", "book-rev-lite"),
					'section'	=> 'wpc_main_page_section'
				)

			);

			// Display Latest Articles Carousel Setting & Control 
			$wpc->add_setting('mp_display_lac', array('sanitize_callback' => 'book_rev_lite_sanitize_checkbox'));
			$wpc->add_control(
				'mp_display_lac',
				array(
					'type'		=> 'checkbox',
					'label'		=> __("Display Latest Articles Carousel Block", "book-rev-lite"),
					'section'	=> 'wpc_main_page_section'
				)

			);

			// Display Highlight of the Day Setting & Control 
			$wpc->add_setting('mp_display_hotd', array('sanitize_callback' => 'book_rev_lite_sanitize_checkbox'));
			$wpc->add_control(
				'mp_display_hotd',
				array(
					'type'		=> 'checkbox',
					'label'		=> __("Display Highlight of the Day Block", "book-rev-lite"),
					'section'	=> 'wpc_main_page_section'
				)

			);

			// Slider Category Setting & Control 
			$wpc->add_setting('mp_slider_cat',
				array('default' => '','sanitize_callback' => 'book_rev_lite_sanitize_dropdown')
			);

			$wpc->add_control(
				new book_rev_lite_Category_Dropdown_Custom_Control(
					$wpc,
					'mp_slider_cat',
					array(
						'label'		=> __("Slider Reviews Category", "book-rev-lite"),
						'section'	=> "wpc_main_page_section",
						'settings'	=> 'mp_slider_cat'
					)
				)
			);

			// Featured from Category Category Setting & Control 
			$wpc->add_setting('mp_ffc_cat',
				array('default' => '','sanitize_callback' => 'book_rev_lite_sanitize_dropdown')
			);

			$wpc->add_control(
				new book_rev_lite_Category_Dropdown_Custom_Control(
					$wpc,
					'mp_ffc_cat',
					array(
						'label'		=> __("Featured Category Block Category", "book-rev-lite"),
						'section'	=> "wpc_main_page_section",
						'settings'	=> 'mp_ffc_cat'
					)
				)
			);

			// Highlight of the Day Categoru Setting & Control 
			$wpc->add_setting('mp_hotd_cat',
				array('default' => '','sanitize_callback' => 'book_rev_lite_sanitize_dropdown')
			);

			$wpc->add_control(
				new book_rev_lite_Category_Dropdown_Custom_Control(
					$wpc,
					'mp_hotd_cat',
					array(
						'label'		=> __("Highlight of the Day Category", "book-rev-lite"),
						'section'	=> "wpc_main_page_section",
						'settings'	=> 'mp_hotd_cat'
					)
				)
			);

			// Featured Category Block Title - Setting
			$wpc->add_setting(
			    'mp_hotd_title',
			    array(
			        'default' => __("Highlight of the Day", "book-rev-lite") ,'sanitize_callback' => 'book_rev_lite_sanitize_text'
			    )
			);
			// Featured Category Block Title Control
			$wpc->add_control(
			    'mp_hotd_title',
			    array(
			        'label' 	=> __('Highlight of the Day Title', "book-rev-lite"),
			        'section' 	=> 'wpc_main_page_section',
			        'type' 		=> 'text',
			    )
			);

			// Featured Category Block Title - Setting
			$wpc->add_setting(
			    'mp_fcb_title',
			    array(
			        'default' => __("Featured from {{category_selected}}", "book-rev-lite"),'sanitize_callback' => 'book_rev_lite_sanitize_text'
			    )
			);
			// Featured Category Block Title Control
			$wpc->add_control(
			    'mp_fcb_title',
			    array(
			        'label' 	=> __('Featured Category Block Title', "book-rev-lite"),
			        'section' 	=> 'wpc_main_page_section',
			        'type' 		=> 'text',
			    )
			);


			// Latest Articles Block Title - Setting
			$wpc->add_setting(
			    'mp_lab_title',
			    array(
			        'default' => __("Latest Reviews", "book-rev-lite"),'sanitize_callback' => 'book_rev_lite_sanitize_text'
			    )
			);

			// Latest Articles Block Title - Control
			$wpc->add_control(
			    'mp_lab_title',
			    array(
			        'label' 	=> __('Latest Articles Block Title', "book-rev-lite"),
			        'section' 	=> 'wpc_main_page_section',
			        'type' 		=> 'text',
			    )
			);


			// Latest Articles Block Category Category Setting & Control 
			$wpc->add_setting('mp_lab_cat',
				array('default' => '','sanitize_callback' => 'book_rev_lite_sanitize_dropdown')
			);

			$wpc->add_control(
				new book_rev_lite_Category_Dropdown_Custom_Control(
					$wpc,
					'mp_lab_cat',
					array(
						'label'		=> __("Latest Articles Block Category", "book-rev-lite"),
						'section'	=> "wpc_main_page_section",
						'settings'	=> 'mp_lab_cat'
					)
				)
			);

			// Latest Articles Block Count - Setting
			$wpc->add_setting(
			    'mp_lab_count',
			    array(
			        'default' => __("5", "book-rev-lite"),'sanitize_callback' => 'book_rev_lite_sanitize_number'
			    )
			);
			// Latest Articles Block Count - Control
			$wpc->add_control(
			    'mp_lab_count',
			    array(
			        'label' 	=> __('Latest Articles Block - Article Count', "book-rev-lite"),
			        'section' 	=> 'wpc_main_page_section',
			        'type' 		=> 'text',
			    )
			);


			// Layout Type Setting & Control
			$wpc->add_setting(
			    'mp_layout_type',
			    array(
			        'default' => 'sidebarright','sanitize_callback' => 'book_rev_lite_sanitize_radio'
			    )
			);
			 
			$wpc->add_control(
			    'mp_layout_type',
			    array(
			        'type' => 'radio',
			        'label' => __("Layout Type", "book-rev-lite"),
			        'section' => 'wpc_main_page_section',
			        'choices' => array(
			            'fullwidth' 	=> 'Full Width',
			            'sidebarright' 	=> 'Sidebar Right',
			            'sidebarleft' 	=> 'Sidebar Left',
			        ),
			    )
			);

			// Highlight of the Day Category - Setting
			$wpc->add_setting(
			    'mp_lab_count',
			    array(
			        'default' => __("5", "book-rev-lite"),'sanitize_callback' => 'book_rev_lite_sanitize_number'
			    )
			);
			// Highlight of the Day Category - Control
			$wpc->add_control(
			    'mp_lab_count',
			    array(
			        'label' 	=> __('Latest Articles Block - Article Count', "book-rev-lite"),
			        'section' 	=> 'wpc_main_page_section',
			        'type' 		=> 'text',
			    )
			);



		/* Add the main-page section */
		$wpc->add_section(
			'wpc_colors_section',
			array(
					'title'			=> __("Main Page Background Colors", "book-rev-lite"),
					'description'	=> __("Here you can customize most of the colors of your theme. More color customization options will be added in future updates..", "book-rev-lite"),
					'priority'		=> 100
				)
		);

		/**
		 * Featured Category Background Color
		 */
			// Featured Category Background Color Setting
			$wpc->add_setting(
				'featured-category-block-bgcolor',
				array(
					'default' 			=> '#fffff',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Featured Category Background Color Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'featured-category-block-bgcolor',
					array(
						'label'		=> __('Featured Category Block Background Color ', "book-rev-lite"),
						'section'	=> 'wpc_colors_section',
						'settings'	=> 'featured-category-block-bgcolor'
					)
				)
			);

		/**
		 * Latest Articles Background Color
		 */
			// Latest Articles Background Color Setting
			$wpc->add_setting(
				'latest-articles-block-bgcolor',
				array(
					'default' 			=> '#fffff',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Featured Category Background Color Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'latest-articles-block-bgcolor',
					array(
						'label'		=> __('Latest Articles Block Background Color ', "book-rev-lite"),
						'section'	=> 'wpc_colors_section',
						'settings'	=> 'latest-articles-block-bgcolor'
					)
				)
			);

		/**
		 * Latest Articles Background Color
		 */
			// Latest Articles Background Color Setting
			$wpc->add_setting(
				'lab-article-hover-bgcolor',
				array(
					'default' 			=> '#484848',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Featured Category Background Color Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'lab-article-hover-bgcolor',
					array(
						'label'		=> __('Latest Articles Block Item Hover Background Color ', "book-rev-lite"),
						'section'	=> 'wpc_colors_section',
						'settings'	=> 'lab-article-hover-bgcolor'
					)
				)
			);

		/**
		 * Highlight of the Day Background Color
		 */
			// Highlight of the Day Background Color Setting
			$wpc->add_setting(
				'hotd-bg-color',
				array(
					'default' 			=> '#fff',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Highlight of the Day Background Color Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'hotd-bg-color',
					array(
						'label'		=> __('Highlight of the Day Block Background Color ', "book-rev-lite"),
						'section'	=> 'wpc_colors_section',
						'settings'	=> 'hotd-bg-color'
					)
				)
			);
			
		/**
		 * Article Background Color
		 */
			// Article Background Color Setting
			$wpc->add_setting(
				'article-bgcolor',
				array(
					'default' 			=> '#fff',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Highlight of the Day Background Color Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'article-bgcolor',
					array(
						'label'		=> __('Articles Background Color ', "book-rev-lite"),
						'section'	=> 'wpc_colors_section',
						'settings'	=> 'article-bgcolor'
					)
				)
			);

		/**
		 * Pagination Background Color
		 */
			// Pagination Background Color Setting
			$wpc->add_setting(
				'pagination-bgcolor',
				array(
					'default' 			=> '#fff',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Pagination Background Color Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'pagination-bgcolor',
					array(
						'label'		=> __('Pagination Background Color ', "book-rev-lite"),
						'section'	=> 'wpc_colors_section',
						'settings'	=> 'pagination-bgcolor'
					)
				)
			);

		/**
		 * Pagination Button Color
		 */
			// Pagination Button Color Setting
			$wpc->add_setting(
				'pagination-button-color',
				array(
					'default' 			=> '#e6e6e6',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Pagination Button Color Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'pagination-button-color',
					array(
						'label'		=> __('Pagination Button Color ', "book-rev-lite"),
						'section'	=> 'wpc_colors_section',
						'settings'	=> 'pagination-button-color'
					)
				)
			);

		/**
		 * Pagination Button Color Hover
		 */
			// Pagination Button Color Hover Setting
			$wpc->add_setting(
				'pagination-button-color-hover',
				array(
					'default' 			=> '#cacaca',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Pagination Button Color Hover Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'pagination-button-color-hover',
					array(
						'label'		=> __('Pagination Button Color Hover ', "book-rev-lite"),
						'section'	=> 'wpc_colors_section',
						'settings'	=> 'pagination-button-color-hover'
					)
				)
			);

		/**
		 * Pagination Button Color Active
		 */
			// Pagination Button Color Active Setting
			$wpc->add_setting(
				'pagination-button-color-active',
				array(
					'default' 			=> '#a6dd61',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Pagination Button Color Active Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'pagination-button-color-active',
					array(
						'label'		=> __('Pagination Button Color Active ', "book-rev-lite"),
						'section'	=> 'wpc_colors_section',
						'settings'	=> 'pagination-button-color-active'
					)
				)
			);

		/**
		 * Block Header Background Color
		 */
			// Block Header Background Color Setting
			$wpc->add_setting(
				'block-header-bgcolor',
				array(
					'default' 			=> '#fcfcfc',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Block Header Background Color Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'block-header-bgcolor',
					array(
						'label'		=> __('Block Header Background Color ', "book-rev-lite"),
						'section'	=> 'wpc_colors_section',
						'settings'	=> 'block-header-bgcolor'
					)
				)
			);

		/**
		 * Widget Header Background Color
		 */
			// Widget Header Background Color Setting
			$wpc->add_setting(
				'widget-header-bgcolor',
				array(
					'default' 			=> '#ffffff',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Widget Header Background Color Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'widget-header-bgcolor',
					array(
						'label'		=> __('Widget Header Background Color ', "book-rev-lite"),
						'section'	=> 'wpc_colors_section',
						'settings'	=> 'widget-header-bgcolor'
					)
				)
			);

		/**
		 * Widget Header Background Color
		 */
			// Widget Header Background Color Setting
			$wpc->add_setting(
				'widget-header-border-color',
				array(
					'default' 			=> '#dddddd',
					'sanitize_callback'	=> 'sanitize_hex_color'
				)
			);

			// Widget Header Background Color Control
			$wpc->add_control(
				new WP_Customize_Color_Control(
					$wpc,
					'widget-header-border-color',
					array(
						'label'		=> __('Widget Header Top Border Color ', "book-rev-lite"),
						'section'	=> 'wpc_colors_section',
						'settings'	=> 'widget-header-border-color'
					)
				)
			);

		/* Add the typography section */
		$wpc->add_section(
			'wpc_tc_section',
			array(
					'title'			=> __("Typography", "book-rev-lite"),
					'description'	=> __("Change the typography of your there and the color of your content the way you want.", "book-rev-lite"),
					'priority'		=> 35
				)
		);

		// Articles Title Font
		$wpc->add_setting( 'article-title-font', array(
			'default'	=> '20', 'sanitize_callback' => 'book_rev_lite_sanitize_dropdown'
			));

		$wpc->add_control( new book_rev_lite_Google_Font_Dropdown_Custom_Control( $wpc, 'article-title-font', array(
			'label'		=> 'Primary Font (Titles)',
			'section'  	=> 'wpc_tc_section',
			'settings' 	=> 'article-title-font',
			'priority' 	=> 12
		)));


		// Articles Content Font
		$wpc->add_setting( 'article-content-font', array(
			'default'	=> '26', 'sanitize_callback' => 'book_rev_lite_sanitize_dropdown'
			));

		$wpc->add_control( new book_rev_lite_Google_Font_Dropdown_Custom_Control( $wpc, 'article-content-font', array(
			'label'		=> 'Secondary Font (Content)',
			'section'  	=> 'wpc_tc_section',
			'settings' 	=> 'article-content-font',
			'priority' 	=> 13
		)));

		// Category Font
		$wpc->add_setting( 'meta-info-font', array(
			'default'	=> '26', 'sanitize_callback' => 'book_rev_lite_sanitize_dropdown'
			));

		$wpc->add_control( new book_rev_lite_Google_Font_Dropdown_Custom_Control( $wpc, 'meta-info-font', array(
			'label'		=> 'Meta Font',
			'section'  	=> 'wpc_tc_section',
			'settings' 	=> 'meta-info-font',
			'priority' 	=> 14
		)));
	}
}function bookrev_lite_sanitize_notes( $input ) {    return $input;}function book_rev_lite_sanitize_checkbox( $input ) {	return $input;	}function book_rev_lite_sanitize_text( $input ) {	return wp_kses_post( force_balance_tags( $input ) );	}function book_rev_lite_sanitize_number( $input ) {	return force_balance_tags( $input );	}function book_rev_lite_sanitize_dropdown( $input ) {	return $input;	}function book_rev_lite_sanitize_radio( $input ) {	return $input;}