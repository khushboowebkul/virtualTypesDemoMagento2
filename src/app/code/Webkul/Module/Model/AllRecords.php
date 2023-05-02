<?php
/**
 * Webkul Software.
 *
 * @category  Webkul
 * @package   Webkul_Module
 * @author    Webkul Software Private Limited
 * @copyright Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */
namespace Webkul\Module\Model;

class AllRecords
{
    /**
     * @var array
     */
    private $allRecords;

    /**
     * Construct method
     * 
     * @param array $allRecords
     * @return void
     */
    public function __construct(array $allRecords = [])
    {
        $this->allRecords = $allRecords;
    }

    /**
     * Get All Records
     * 
     * @return array
     */
    public function getRecords()
    {
        return $this->allRecords;
    }
}