<?php
namespace BazaarvoiceSeo;

class Spotlights extends Base {
  function __construct($params = array()) {
    // call Base Class constructor
    parent::__construct($params);

    // since we are in the spotlights class
    // we need to set the content_type config
    // to spotlights so we get reviews in our
    // SEO request
    $this->config['content_type'] = 'spotlights';

    // for spotlights subject type will always
    // need to be category
    $this->config['subject_type'] = 'category';
  }

  public function getContent() {
    return $this->_renderSEO('getContent');
  }
}
