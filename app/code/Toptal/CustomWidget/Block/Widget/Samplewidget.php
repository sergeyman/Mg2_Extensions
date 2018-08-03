<?php

namespace Toptal\CustomWidget\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Samplewidget extends Template implements BlockInterface
{

    //we assign a custom template file inside the $_template variable.
    protected $_template = "widget/samplewidget.phtml";

}