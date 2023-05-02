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

class EmpRecord
{
    /**
     * @var array
     */
    private $record;
    
    /**
     * Construct method
     * 
     * @param array $record
     * @return void
     */
    public function __construct(array $record = [])
    {
        $this->record = $record;    
    }

    /**
     * Get Record Data
     * 
     * @return array
     */
    public function getRecord()
    {
        return $this->record;
    }
}