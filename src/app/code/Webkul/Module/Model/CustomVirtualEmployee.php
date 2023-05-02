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

class CustomVirtualEmployee extends \Webkul\Module\Model\Employee
{
    /**
     * @var array
     */
    private $empattribute;
    
    /**
     * Construct method
     * 
     * @param array $empattribute
     * @return void
     */
    public function __construct(array $empattribute = [])
    {
        parent::__construct($empattribute);
        $this->empattribute = $this->getEmployeeData();
        $this->empattribute["addedNewOne"] = $this->getNewAttribute();
    }

    /**
     * Get New Attribute Label
     * 
     * @return string
     */
    public function getNewAttribute()
    {
        return "Salary";
    }

    /**
     * Get All Data
     * 
     * @return array
     */
    public function getAllData()
    {
        return $this->empattribute;
    }
}