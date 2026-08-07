<?php
/**
 * Retirement Planning Manager — WordPress UI for Ksfraser\Retirement.
 * @package Ksfraser\WP\Retirement
 * Plugin Name: Retirement Planning Manager
 * Description: WordPress UI for KSF Retirement Planning calculations.
 * Version: 1.0.0
 * Author: Kevin Fraser
 */
namespace Ksfraser\WP\Retirement;
function render_plan( int $debtor_no ): string {
    return sprintf( '<div class="ksf-retirement-plan" data-debtor="%d">Retirement Planning plan loading…</div>', $debtor_no );
}
add_shortcode( 'ksf_retirement_plan', static function ( $atts ) {
    $atts = shortcode_atts( [ 'debtor' => 0 ], $atts, 'ksf_retirement_plan' );
    return render_plan( (int) $atts['debtor'] );
} );
