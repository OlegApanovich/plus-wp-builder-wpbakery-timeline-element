<?php
/**
 * The template for displaying [wpbakery-plus-vertical-segment-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var \WpbPlusTimeline\Shortcodes\VerticalTimelineItem $_this
 */

defined( 'ABSPATH' ) || exit;

use WpbPlusTimeline\CustomHeadingIntegration;
$custom_heading_integration = new CustomHeadingIntegration();
?>

<li <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'plus-wpb-horizontal-section-timeline-event' ] ); ?> data-date="<?php echo esc_attr( $atts['date'] ); ?>">
	<h3 class="plus-wpb-horizontal-section-timeline-title">
		<?php $custom_heading_integration->output_custom_font_attribute( 'title', $atts, $_this->element_slug, 'span' ); ?>
	</h3>
	<?php echo do_shortcode( $content ); ?>
</li>

<style>
	<?php $_this->output_style_shortcode_id(); ?>.plus-wpb-horizontal-section-timeline-event:after {
		background: <?php echo esc_attr( $atts['marker_inner_color'] ); ?>;
		box-shadow: 0 0 0 4px <?php echo esc_attr( $atts['marker_color'] ); ?>;
	}
	<?php $_this->output_style_shortcode_id(); ?>.plus-wpb-horizontal-section-timeline-event:before {
		color: <?php echo esc_attr( $atts['date_color'] ); ?>;
		font-size: <?php echo esc_attr( $atts['date_font_size'] ); ?>;
	}
	<?php $_this->output_style_shortcode_id(); ?>.plus-wpb-horizontal-section-timeline-event {
		border-bottom: <?php echo esc_attr( $atts['delimiter_size'] ); ?> <?php echo esc_attr( $atts['delimiter_type'] ); ?> <?php echo esc_attr( $atts['delimiter_color'] ); ?>;
	}
</style>