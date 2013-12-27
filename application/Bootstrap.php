<?php 
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
     * The Application Bootstrap will automatically run each 
     *  class prefixed with '_init' within the Bootstrap.
     * Something unique like '_initCss' will ensure it 
     *  doesn't conflict with the defaults.
     */
    protected function _initCss()
    {
        /**
         * If in production, the CSS should already be compiled
         *  so we don't want to waste our processing time.
         */
        if (APPLICATION_ENV == "production") {
             return;
        }

        /**
         * Include the LessPHP library from where we saved it.
         */
        require_once APPLICATION_PATH."/../library/lessphp/lessc.inc.php";

        /**
         * Identify the source LESS stylesheet, and the 
         *  destination CSS stylesheet.
         */
        $sLess = APPLICATION_PATH."/../public/less/style.less";
        $sCss  = APPLICATION_PATH."/../public/less/style.css";

        /**
         * Compile the source LESS through lessc() and save
         *  the output CSS into the destination.
         */
        $oLessc = new lessc($sLess);
        file_put_contents($sCss, $oLessc->parse());
    }
}