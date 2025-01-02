<?php
/**
 * Configuration file for [wpb-plus-zigzag-timeline-item] shortcode of 'Zigzag Timeline' element.
 *
 * @since 1.0
 */

use WpbPlusTimeline\CustomHeadingIntegration;

defined( 'ABSPATH' ) || exit;

$custom_heading_integration = new CustomHeadingIntegration();

$params = array_merge(
	[
		[
			'type'        => 'dropdown',
			'value'       => [
				esc_html__( 'Left', 'wpbakery-plus-timeline-element' ) => 'left',
				esc_html__( 'Right', 'wpbakery-plus-timeline-element' ) => 'right',
			],
			'heading'     => esc_html__( 'Position', 'wpbakery-plus-timeline-element' ),
			'param_name'  => 'position',
			'description' => esc_html__( 'Choose right or left item position for timeline item.', 'wpbakery-plus-timeline-element' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#F6A4EC',
			'heading'     => esc_html__( 'Decorative circle color', 'wpbakery-plus-timeline-element' ),
			'param_name'  => 'decorative_circle_color',
			'description' => esc_html__( 'Select custom color for decorative circle.', 'wpbakery-plus-timeline-element' ),
		],
		[
			'type'             => 'textfield',
			'value'            => 'Lorem ipsum.',
			'heading'          => esc_html__( 'Title', 'wpbakery-plus-timeline-element' ),
			'admin_label'      => true,
			'param_name'       => 'title',
			'description'      => esc_html__( 'Enter text for title line.', 'wpbakery-plus-timeline-element' ),
			'edit_field_class' => 'vc_col-sm-9',
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'wpbakery-plus-timeline-element' ),
			'param_name'       => 'use_custom_fonts_title',
			'description'      => esc_html__( 'Enable custom font option.', 'wpbakery-plus-timeline-element' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
	],
	$custom_heading_integration->add_custom_font_to_field( 'title', 'Title', [ 'exclude' => [ 'source', 'text', 'css' ] ], [ 'tag', 'text_align' ] ),
	[
		[
			'type'             => 'textfield',
			'value'            => 'Feb 2015',
			'heading'          => esc_html__( 'Date', 'wpbakery-plus-timeline-element' ),
			'admin_label'      => true,
			'param_name'       => 'date',
			'description'      => esc_html__( 'Initially, it was designed as a date field, but you can use it as a regular text as well. ', 'wpbakery-plus-timeline-element' ),
			'edit_field_class' => 'vc_col-sm-9',
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'wpbakery-plus-timeline-element' ),
			'param_name'       => 'use_custom_fonts_date',
			'description'      => esc_html__( 'Enable custom font option.', 'wpbakery-plus-timeline-element' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
	],
	$custom_heading_integration->add_custom_font_to_field( 'date', 'Date', [ 'exclude' => [ 'source', 'text', 'css' ] ], [ 'tag', 'text_align' ] ),
	[
		[
			'type'        => 'colorpicker',
			'value'       => '#9251AC',
			'heading'     => esc_html__( 'Date background', 'wpbakery-plus-timeline-element' ),
			'param_name'  => 'date_background',
			'description' => esc_html__( 'Select custom color for your date field.', 'wpbakery-plus-timeline-element' ),
		],
		[
			'type'       => 'textarea_html',
			'heading'    => esc_html__( 'Text', 'wpbakery-plus-timeline-element' ),
			'param_name' => 'content',
			'value'      => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum quidem dolorem in!',
		],
	]
);

return [
	'name'                    => __( 'Zigzag Timeline Item', 'wpbakery-plus-timeline-element' ),
	'base'                    => 'wpbakery-plus-zigzag-timeline-item',
	'class'                   => 'wpbakery-plus-zigzag-timeline-item',
	'description'             => __( 'Timeline item for zigzag timeline element.', 'wpbakery-plus-timeline-element' ),
	'as_child'                => [ 'only' => 'wpbakery-plus-zigzag-timeline' ],
	'content_element'         => true,
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		wpbplustimeline_config( 'shortcode-container-config' )
	),
];