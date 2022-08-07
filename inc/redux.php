<?php
//Redux Framework fields
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    Redux::disable_demo();

    $opt_name = 'data';

    $theme = wp_get_theme();

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Theme options', 'gatsby-theme-redux' ),
        'customizer'           => true,
    );

    Redux::setArgs( $opt_name, $args );

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'General', 'gatsby-theme-redux' ),
        'id'     => 'general',
        'desc'   => esc_html__( 'General', 'gatsby-theme-redux' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'logo',
                'type'     => 'media',
                'title'    => esc_html__( 'Logo', 'gatsby-theme-redux' ),
                'desc'     => esc_html__( 'Upload the logo', 'gatsby-theme-redux' ),
            ),
            array(
                'id'       => 'company_name',
                'type'     => 'text',
                'title'    => esc_html__( 'Company name', 'gatsby-theme-redux' ),
                'desc'     => esc_html__( 'Write the company name', 'gatsby-theme-redux' ),
            )
        )
    ) );
