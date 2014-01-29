<?php

namespace Component\Users\Administrator\View;

use Joomla\Application\AbstractWebApplication;
use Joomla\Model\AbstractModel;
use Joomla\View\AbstractHtmlView;

class DefaultHtmlView extends AbstractHtmlView
{
    public function __construct(AbstractWebApplication $app, AbstractModel $model, array $paths)
    {
        $this->application = $app;

        $q = new \SplPriorityQueue();
        if (!empty($paths)) {
            foreach ($paths as $path) {
                $q->insert($path);
            }
        }

        $q->insert(JPATH_WEB.'/template/html/', 1);

        parent::__construct($model, $q);
    }
}
