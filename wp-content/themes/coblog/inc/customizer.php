<?php

// Call in Theme Function
function coblog_customizer_callback($prams) {
	$new_prams = array(
        array(
            'key'     => 'coblog_options',
            'type'    => 'panel',
            'priority'=> 10,
            'title'   => __( 'Coblog Options', 'coblog' ),
            'options' => array(

                array(
                    'key'    => 'topbar_options',
                    'type'   => 'section',
                    'title'  => __( 'Topbar Options', 'coblog' ),
					'options'=> array(
                        array(
                            'key'     => 'contact_number',
							'type'    => 'text',
                            'title'   => __( 'Logo Text', 'coblog' ),
                            'default' => '(123)456 7890',
                        ),
                        array(
                            'key'     => 'email',
							'type'    => 'text',
                            'title'   => __( 'Logo Text', 'coblog' ),
                            'default' => 'demo@coblog.com',
                        ),
                        array(
                            'key'     => 'tb_bg_color',
                            'title'   => __( 'Background Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '#000',
                        ),
                        array(
                            'key'     => 'tb_color',
                            'title'   => __( 'Text Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '#fff',
                        ),
  
                        array(
                            'key'     => 'tb_link_hover_color',
                            'title'   => __( 'Link Hover Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tb_padding_top',
                            'title'   => __( 'Padding Top', 'coblog' ),
                            'type'    => 'number',
                            'default' => 8,
                        ),
                        array(
                            'key'     => 'tb_padding_bottom',
                            'title'   => __( 'Padding Bottom', 'coblog' ),
                            'type'    => 'number',
                            'default' => 8,
                        ),
					)
                ),

                array(
                    'key'    => 'header_options',
                    'type'   => 'section',
                    'title'  => __( 'Header', 'coblog' ),
					'options'=> array(
                        array(
                            'key'     => 'logo_type',
                            'type'    => 'select',
                            'title'   => __( 'Select Logo Type', 'coblog' ),
                            'default' => 'logo_img',
                            'options'   => array(
                                'logo_img'   => __('Image Logo', 'coblog'),
                                'logo_text'  => __('Text Logo', 'coblog'),
                            )
                        ),
                        array(
                            'key'     => 'logo_img',
                            'type'    => 'media',
                            'title'   => __( 'Logo', 'coblog' ),
                            'default' => get_parent_theme_file_uri( '/assets/images/logo.png' ),
                        ),
                        array(
                            'key'     => 'logo_text',
							'type'    => 'text',
                            'title'   => __( 'Logo Text', 'coblog' ),
                            'default' => 'Coblog',
                        ),
                        array(
                            'key'     => 'logo_width',
                            'type'    => 'number',
                            'title'   => __( 'Logo Width', 'coblog' ),
                            'default' => 180,
                        ),
                        array(
                            'key'     => 'logo_height',
                            'type'    => 'number',
                            'title'   => __( 'Logo Height', 'coblog' ),
                            'default' => '',
                        ),
                        array(
                            'key'     => 'enable_offcanavs',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Offcanvas', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_search',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Search', 'coblog' ),
                            'default' => 0,
                        ),
                        array(
                            'key'     => 'enable_header_share',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Social Share', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_subscribe',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Subscribe', 'coblog' ),
                            'default' => 1,
                        ),
						array(
                            'key'     => 'subscribe_url',
							'type'    => 'text',
                            'title'   => __( 'Subscribe URL', 'coblog' ),
                            'default' => '#',
						),
						array(
                            'key'     => 'subscribe_text',
							'type'    => 'text',
                            'title'   => __( 'Subscribe Text', 'coblog' ),
                            'default' => 'Subscribe',
                        ),
					)
                ),
                
                array(
                    'key'    => 'typography',
                    'type'   => 'section',
                    'title'  => __( 'Typography', 'coblog' ),
					'options'=> array(
                        array(
                            'key'     => 'body',
                            'type'    => 'typography',
                            'title'   => __( 'Body Font', 'coblog' ),
                            'default' => 'Source Sans Pro#sans-serif#400',
                        ),
                        array(
                            'key'     => 'menu',
                            'type'    => 'typography',
                            'title'   => __( 'Menu Font', 'coblog' ),
                            'default' => 'Libre Baskerville#serif#400',
                        ),
                        array(
                            'key'     => 'submenu',
                            'type'    => 'typography',
                            'title'   => __( 'Sub Menu Font', 'coblog' ),
                            'default' => 'Libre Baskerville#serif#400',
                        ),
                        array(
                            'key'     => 'heading',
                            'type'    => 'typography',
                            'title'   => __( 'Heading Font', 'coblog' ),
                            'default' => 'Libre Baskerville#serif#700',
                        ),
					)
				),

                array(
                    'key'    => 'latest_post_options',
                    'type'   => 'section',
                    'title'  => __( 'Latest Post Grid', 'coblog' ),
					'options'=> array(
                        array(
                            'key'     => 'enable_post_grid',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Post Grid', 'coblog' ),
                            'default' => 1,
                        ),
					)
                ),

                array(
                    'key'    => 'style_options',
                    'type'   => 'section',
                    'title'  => __( 'Theme Color', 'coblog' ),
					'options'=> array(
                        array(
                            'key'     => 'tc_body_color',
                            'type'    => 'color',
                            'title'   => __( 'Body Text Color', 'coblog' ),
                            'default' => '#596172',
                        ),
                        array(
                            'key'     => 'tc_body_bg',
                            'type'    => 'color',
                            'title'   => __( 'Body Background Color', 'coblog' ),
                            'default' => '#ffffff',
                        ),
                        array(
                            'key'     => 'tc_menu_color',
                            'type'    => 'color',
                            'title'   => __( 'Menu Color', 'coblog' ),
                            'default' => '#000',
                        ),
                        array(
                            'key'     => 'tc_menu_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Menu Hover Color', 'coblog' ),
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tc_submenu_color',
                            'type'    => 'color',
                            'title'   => __( 'Sub Menu Text Color', 'coblog' ),
                            'default' => '#000',
                        ),
                        array(
                            'key'     => 'tc_submenu_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Sub Menu Hover Color', 'coblog' ),
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tc_primary_color',
                            'type'    => 'color',
                            'title'   => __( 'Primary Color', 'coblog' ),
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tc_secendary_color',
                            'type'    => 'color',
                            'title'   => __( 'Secendary Color', 'coblog' ),
                            'default' => '#E62B2F',
                        ),
                        array(
                            'key'     => 'tc_btn_color',
                            'type'    => 'color',
                            'title'   => __( 'Button Color', 'coblog' ),
                            'default' => '#ffffff',
                        ),
                        array(
                            'key'     => 'tc_btn_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Button Hover Color', 'coblog' ),
                            'default' => '#ffffff',
                        ),
                        array(
                            'key'     => 'tc_btn_bgcolor',
                            'type'    => 'color',
                            'title'   => __( 'Button background Color', 'coblog' ),
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tc_btn_bg_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Button Background Hover Color', 'coblog' ),
                            'default' => '#000000',
                        ),
					)
                ),

                array(    
                    'key'    => 'archive_options',
                    'type'   => 'section',
                    'title'  => __( 'Archive Options', 'coblog' ),
                    'options'=> array(
                        array(
                            'key'     => 'archive_layout',
                            'type'    => 'select',
                            'title'   => __( 'Archive Layout', 'coblog' ),
                            'default' => 'right',
                            'options'   => array(
                                'full'   => __('Full Width', 'coblog'),
                                'right'  => __('Right Sidebar', 'coblog'),
                                'left'  => __('left Sidebar', 'coblog'),
                            )
                        ),
                        array(
                            'key'     => 'blog_post_column',
                            'type'    => 'select',
                            'title'   => __( 'Archive Column', 'coblog' ),
                            'default' => '1',
                            'options'   => array(
                                '1'   => __('1', 'coblog'),
                                '2'  => __('2', 'coblog'),
                                '3'  => __('3', 'coblog'),
                            )
                        ),
                        array(
                            'key'     => 'enable_author',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Author', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_date',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Date', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_excerpt',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Excerpt', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'character_limit',
                            'type'    => 'text',
                            'title'   => __( 'Characher Limit', 'coblog' ),
                            'default' => 100,
                        ),
                        array(
                            'key'     => 'enable_readmore',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Read More', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'readmore_text',
                            'type'    => 'text',
                            'title'   => __( 'Read More Text', 'coblog' ),
                            'default' => 'Read More',
                        ),
                    )
                ),
            
                array(    
                    'key'    => 'single_options',
                    'type'   => 'section',
                    'title'  => __( 'Single Options', 'coblog' ),
                    'options'=> array(
                        array(
                            'key'     => 'single_layout',
                            'type'    => 'select',
                            'title'   => __( 'Single Layout', 'coblog' ),
                            'default' => 'right',
                            'options'   => array(
                                'full'   => __('Full Width', 'coblog'),
                                'right'  => __('Right Sidebar', 'coblog'),
                                'left'  => __('left Sidebar', 'coblog'),
                            )
                        ),
                        array(
                            'key'     => 'enable_single_author',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Author', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_date',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Date', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_view',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single View', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_comment_count',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Comment Count', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_tag',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Tags', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_nav',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Navigation', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_comment',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Comment', 'coblog' ),
                            'default' => 1,
                        ),
                    )
                ),

                array(
                    'key'    => 'footer_top',
                    'type'   => 'section',
                    'title'  => __( 'Footer Top', 'coblog' ),
					'options'=> array(
                        array(
                            'key'     => 'ft_column',
                            'title'   => __( 'Footer Column', 'coblog' ),
                            'type'    => 'select',
                            'title'   => __( 'Select Column', 'coblog' ),
                            'default' => '4',
                            'options'   => array(
                                '12'   => __('1', 'coblog'),
                                '6'  => __('2', 'coblog'),
                                '4'  => __('3', 'coblog'),
                                '3'  => __('4', 'coblog'),
                            )
                        ),
                        array(
                            'key'     => 'ft_color',
                            'title'   => __( 'Text Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '#000',
                        ),
                        array(
                            'key'     => 'ft_bg_color',
                            'title'   => __( 'Background Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '#ffffff',
                        ),
                        array(
                            'key'     => 'ft_link_hover_color',
                            'title'   => __( 'Link Hover Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'ft_padding_top',
                            'title'   => __( 'Padding Top', 'coblog' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
                        array(
                            'key'     => 'ft_padding_bottom',
                            'title'   => __( 'Padding Bottom', 'coblog' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
					)
				),

                array(
                    'key'    => 'footer_bottom',
                    'type'   => 'section',
                    'title'  => __( 'Footer Bottom', 'coblog' ),
					'options'=> array(
                        array(
                            'key'     => 'fb_color',
                            'type'    => 'color',
                            'title'   => __( 'Text Color', 'coblog' ),
                            'default' => '#596172',
                        ),
                        array(
                            'key'     => 'fb_bg_color',
                            'title'   => __( 'Background Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '#ffffff',
                        ),
                        array(
                            'key'     => 'fb_link_hover_color',
                            'title'   => __( 'Link Hover Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'fb_padding_top',
                            'title'   => __( 'Padding Top', 'coblog' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
                        array(
                            'key'     => 'fb_padding_bottom',
                            'title'   => __( 'Padding Bottom', 'coblog' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
                        array(
                            'key'     => 'footer_logo',
                            'type'    => 'media',
                            'title'   => __( 'Footer Logo', 'coblog' ),
                            'default' => get_parent_theme_file_uri( '/assets/images/footer-logo.png' ),
                        ),
                        array(
                            'key'     => 'copyright',
							'type'    => 'textarea',
                            'title'   => __( 'Facebook URL', 'coblog' ),
                            'default' => 'Created by <strong>WPesta</strong>. Powered by <strong>WordPress</strong><br> All rights reserved',
                        ),
                        array(
                            'key'     => 'enable_footer_share',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Footer Share', 'coblog' ),
                            'default' => 0,
                        ),
					)
				),

                array(
                    'key'    => 'social_share_options',
                    'type'   => 'section',
                    'title'  => __( 'Social Share', 'coblog' ),
					'options'=> array(
						array(
                            'key'     => 'share_facebook',
							'type'    => 'text',
                            'title'   => __( 'Facebook URL', 'coblog' ),
                            'default' => '#',
						),
						array(
                            'key'     => 'share_twitter',
							'type'    => 'text',
                            'title'   => __( 'Twitter URL', 'coblog' ),
                            'default' => '#',
                        ),
						array(
                            'key'     => 'share_linkdin',
							'type'    => 'text',
                            'title'   => __( 'Linkdin URL', 'coblog' ),
                            'default' => '#',
                        ),
					)
				),
                
				array(
                    'key'    => 'coblog_export_import',
                    'type'   => 'section',
                    'title'  => __( 'Export/Import', 'coblog' ),
					'options'=> array(
						array(
                            'key'     => 'coblog_export',
							'type'    => 'export',
                            'title'   => __( 'Export', 'coblog' ),
                            'default' => 'Export Data',
						),
						array(
                            'key'     => 'coblog_Import',
							'type'    => 'import',
                            'title'   => __( 'Import', 'coblog' ),
                            'default' => 'Import Data',
                        ),
					)
				),
				
            )
        ),
    );
	return array_merge($new_prams, $prams);
}
add_filter('esta_customizer', 'coblog_customizer_callback'); 