<?php

namespace EventEspresso\core\domain\entities\route_match\specifications\admin;

use EventEspresso\core\domain\entities\route_match\RouteMatchSpecification;

/**
 * Class EspressoEventEditorAddNew
 * Returns true when the current request is for the Event Editor admin page while creating a new event
 *
 * @package EventEspresso\core\domain\entities\route_match\specifications
 * @author  Brent Christensen
 * @since   $VID:$
 */
class EspressoEventEditorAddNew extends RouteMatchSpecification
{
    /**
     * returns true if current request matches specification
     *
     * @since $VID:$
     * @return boolean
     */
    public function routeMatches()
    {
        return $this->request->getRequestParam('page') === 'espresso_events'
            && $this->request->getRequestParam('action') === 'create_new';
    }
}
