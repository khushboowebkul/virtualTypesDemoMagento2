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

namespace Webkul\Module\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action
{
    /**
     * @var \Magento\Framework\Controller\Result\Raw
     */
    protected $rawResultFactory;

    /**
     * @var \Webkul\Module\Model\AllRecords
     */
    protected $empAllRecords;

    /**
     * @var \Webkul\Module\Model\CustomVirtualEmployee
     */
    protected $virEmp;

    /**
     * Initialize dependencies
     * 
     * @param Context $context
     * @param \Webkul\Module\Model\AllRecords $empAllRecords
     * @param \Webkul\Module\Model\CustomVirtualEmployee $virEmp
     * @param \Magento\Framework\Controller\Result\Raw $rawResultFactory
     * @return void
     */
    public function __construct(
        Context $context,
        \Webkul\Module\Model\AllRecords $empAllRecords,
        \Webkul\Module\Model\CustomVirtualEmployee $virEmp,
        \Magento\Framework\Controller\Result\Raw $rawResultFactory
    ) {
        $this->virEmp   = $virEmp;
        $this->rawResultFactory = $rawResultFactory;
        $this->empAllRecords = $empAllRecords;
        parent::__construct($context);
    }

    /**
     * Execute method to print data
     *
     * @return \Magento\Framework\Controller\Result\Raw
     */
    public function execute()
    {
        $result = $this->rawResultFactory;
        $result->setHeader('Content-Type', 'text/html');

        $empRecords = $this->empAllRecords->getRecords();

        $dataStr = "";

        $dataStr .= "<h3>Result for Case 1: Used &lt;virtualType&gt; within di.xml file</h3>";

        foreach ($empRecords as $index=>$each) {
            $dataStr .= $index."::".json_encode($each->getRecord())."<br>";
        }

        $employeeAttrs = $this->virEmp->getAllData();
    
        $dataStr .= "<h3>Result for Case 2: Created &lt;virtualType&gt; for class Webkul\Module\Model\Employee and created CustomVirtualEmployee class</h3>";

        foreach ($employeeAttrs as $key=>$value) {
            $dataStr .= $key."::".$value."<br>";
        }

        $result->setContents( $dataStr);

        return $result;
    }
}
