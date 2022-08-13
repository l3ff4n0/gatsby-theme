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
        'customizer'           => false,
        'page_priority'        => '85',
    );

    Redux::setArgs( $opt_name, $args );

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'General', 'gatsby-theme-redux' ),
        'id'     => 'general',
        'desc'   => esc_html__( 'General', 'gatsby-theme-redux' ),
        'icon'   => 'el el-home',
        'show_in_graphql' => true,
        'fields' => array(
            array(
                'id'       => 'logo',
                'type'     => 'media',
                'title'    => esc_html__( 'Logo', 'gatsby-theme-redux' ),
                'desc'     => esc_html__( 'Upload the logo', 'gatsby-theme-redux' ),
                'show_in_graphql' => true,
            ),
            array(
                'id'       => 'company_name',
                'type'     => 'text',
                'title'    => esc_html__( 'Company name', 'gatsby-theme-redux' ),
                'desc'     => esc_html__( 'Write the company name', 'gatsby-theme-redux' ),
                'show_in_graphql' => true,
            ),
            array(
                'id'       => 'phone_number',
                'type'     => 'text',
                'title'    => esc_html__( 'Phone number', 'gatsby-theme-redux' ),
                'desc'     => esc_html__( 'Write the phone number', 'gatsby-theme-redux' ),
                'show_in_graphql' => true,
            ),
            array(
                'id'       => 'mobile_number',
                'type'     => 'text',
                'title'    => esc_html__( 'Mobile number', 'gatsby-theme-redux' ),
                'desc'     => esc_html__( 'Write the mobile number', 'gatsby-theme-redux' ),
                'show_in_graphql' => true,
            ),
            array(
                'id'       => 'fax_number',
                'type'     => 'text',
                'title'    => esc_html__( 'Fax number', 'gatsby-theme-redux' ),
                'desc'     => esc_html__( 'Write the fax number', 'gatsby-theme-redux' ),
                'show_in_graphql' => true,
            ),
            array(
                'id'       => 'section-start',
                'type'     => 'section',
                'title'    => esc_html__( 'Location', 'gatsby-theme-redux' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'address',
                'type'     => 'text',
                'title'    => esc_html__( 'Address', 'gatsby-theme-redux' ),
                'desc'     => esc_html__( 'Write the address', 'gatsby-theme-redux' ),
                'show_in_graphql' => true,
            ),
            array(
                'id'       => 'postal_code',
                'type'     => 'text',
                'title'    => esc_html__( 'Postal code', 'gatsby-theme-redux' ),
                'desc'     => esc_html__( 'Write the postal code', 'gatsby-theme-redux' ),
                'show_in_graphql' => true,
            ),
            array(
                'id'       => 'city',
                'type'     => 'text',
                'title'    => esc_html__( 'City', 'gatsby-theme-redux' ),
                'desc'     => esc_html__( 'Write the city', 'gatsby-theme-redux' ),
                'show_in_graphql' => true,
            ),
            array(
                'id'       => 'country',
                'type'     => 'text',
                'title'    => esc_html__( 'Country', 'gatsby-theme-redux' ),
                'desc'     => esc_html__( 'Write the country', 'gatsby-theme-redux' ),
                'show_in_graphql' => true,
            ),
            array(
                'id'       => 'section-end',
                'type'     => 'section',
                'indent'    => false
            ),
            array(
                'id'       => 'social-network-section-start',
                'type'     => 'section',
                'title'    => esc_html__( 'Social network', 'gatsby-theme-redux' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'facebook',
                'type'     => 'text',
                'title'    => esc_html__( 'Facebook', 'gatsby-theme-redux' ),
                'desc'     => esc_html__( 'Facebook account', 'gatsby-theme-redux' ),
                'show_in_graphql' => true,
            ),
            array(
                'id'       => 'twitter',
                'type'     => 'text',
                'title'    => esc_html__( 'Twitter', 'gatsby-theme-redux' ),
                'desc'     => esc_html__( 'Twitter account', 'gatsby-theme-redux' ),
                'show_in_graphql' => true,
            ),
            array(
                'id'       => 'instagram',
                'type'     => 'text',
                'title'    => esc_html__( 'Instagram', 'gatsby-theme-redux' ),
                'desc'     => esc_html__( 'Instagram account', 'gatsby-theme-redux' ),
                'show_in_graphql' => true,
            ),
            array(
                'id'       => 'social-network-section-end',
                'type'     => 'section',
                'indent'    => false
            ),
        )
    ) );
