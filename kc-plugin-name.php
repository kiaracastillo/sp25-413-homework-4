<?php
/**
 *Plugin name: KC Metro Plugin
 * Description: Plugin for The Metro Report
 * Version: 1.0
 * Author: Kiara Castillo Magallanes
 */

if ( ! defined( 'ABSPATH' ) ) 
  {

    exit;

}

/* action hook option a */
function kc_plugin_footer() {

    echo '
 <div style="
     background:#111;
      color:#fff;
        
        padding:12px 20px;
            text-align:center;

        font-size:14px;
            border-top:3px solid #ff004c; ">
           
    
    Editor note: Follow The Metro Report for daily local updates:)
        </div>
    ';



}

add_action( 'wp_footer', 'kc_plugin_footer' );

/* filter hook option a */

function kc_pl_post_inf( $content ) {

 if ( ! is_single() || ! in_the_loop() || ! is_main_query() ) {
    
    return $content;
   
 }

    $word_count = str_word_count( wp_strip_all_tags( $content ) );
   
 $reading_time = ceil( $word_count / 200 );

    $info_bar = '
        
    <div style="
            background:#f8f8f8;
        border-left:4px solid #ff004c;
           
        padding:12px 16px;
            margin-bottom:20px;
    
    font-size:14px;
            color:#333; ">
            
            <strong>' . esc_html( $reading_time ) . ' minutes read</strong>
            ·
            ' . esc_html( $word_count ) . ' words :3
        </div>
    ';
 return $info_bar . $content;

 
}

add_filter( 'the_content', 'kc_pl_post_inf' );

/* shortcode */

function kc_quote_box( $atts ) {

    $atts = shortcode_atts(

    array(
            'quote'  => 'Important quote goes here.',
            'source' => 'Metro Report'
        ),

        $atts,
        'metro_quote'
    );

    $quote  = esc_html( $atts['quote'] );

$source = esc_html( $atts['source'] );

    $output = '
        <div style="
            margin:25px 0;
         padding:25px;
            background:#fafafa;
           
         border-top:3px solid #ff004c;
            border-bottom:3px solid #ff004c;
           
            text-align:center; ">

            <p style="
                font-size:28px;
                
                line-height:1.5;
            font-style:italic;
                margin:0 0 15px 0;
                color:#111; ">
               
                “' . $quote . '”
            </p>

            <p style="
               
            font-size:14px;
                text-transform:uppercase;
               
             letter-spacing:1px;
                color:#666;
                margin:0;"> — ' . $source . ' </p>

        </div>
    
    
        ';

    
    return $output;
}

add_shortcode( 'metro_quote', 'kc_quote_box' );