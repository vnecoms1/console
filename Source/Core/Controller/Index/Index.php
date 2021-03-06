<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Vnecoms\Membership\Controller\Index;

use Magento\Framework\Exception\NotFoundException;
use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * Display customer wishlist.
     *
     * @return \Magento\Framework\View\Result\Page
     *
     * @throws NotFoundException
     */
    public function execute()
    {
        /* @var \Magento\Framework\View\Result\Page resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        return $resultPage;
    }
}
