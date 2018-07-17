<?php
/**
 * Controller file for candy extra
 *
 * Copyright 2014 by Bob Ray <http://bobsguides.com>
 * Created on 04-04-2016
 *
 * candy is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * candy is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * candy; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package candy
 * @subpackage controllers
 */
/* @var $modx modX */

class candyHomeManagerController extends candyManagerController {
    /**
     * The pagetitle to put in the <title> attribute.
     *
     * @return null|string
     */
    public function getPageTitle() {
        return $this->modx->lexicon('candy');
    }

    /**
     * Register all the needed javascript files.
     */


    public function loadCustomCssJs() {
        $this->addJavascript($this->candy->config['jsUrl'] . 'widgets/chunk.grid.js');
        $this->addJavascript($this->candy->config['jsUrl'] . 'widgets/snippet.grid.js');
        $this->addJavascript($this->candy->config['jsUrl'] . 'widgets/home.panel.js');
        $this->addLastJavascript($this->candy->config['jsUrl'] . 'sections/home.js');

        $this->addCss($this->candy->config['cssUrl'] . 'mgr.css');


    }
}