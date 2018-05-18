<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * LiveSearch helper
 */
class LiveSearchHelper extends Helper
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /**
     * Search Form Helper
     */
    public function searchForm($size = 3)
    {
        // $size = ($this->_config['size']);
        return '
        <div class="col-lg-' . $size . '">
        <div class="input-group">
            <input type="text"  id="liveSearch" class="form-control" placeholder="Buscar ...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
            </span>
        </div>
        <!-- /input-group -->
    </div>';

    }

}
