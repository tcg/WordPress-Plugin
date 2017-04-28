<?php
/**
 * Class for managing cache control headers.
 *
 * This class extends the Purgely_Header class to control Cache-Control header behavior. In particular, this is only
 * intended to work for the `stale-while-revalidate` and `stale-if-error` directives.
 */
class Purgely_Cache_Control_Header extends Purgely_Header {

    /**
     * Header name.
     *
     * @since 1.1.1.
     *
     * @var string
     */
    protected $_header_name = 'Cache-Control';

    /**
     * Sets original headers
     *
     * @since 1.1.1.
     */
    public function build_original_headers()
    {
        if ( false !== Purgely_Settings::get_setting( 'cache_control_ttl' ) ) {
            $this->_headers['max-age'] = absint( Purgely_Settings::get_setting( 'cache_control_ttl' ) );
        }
    }
}