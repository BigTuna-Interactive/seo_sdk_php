<?php
namespace BazaarvoiceSeo;

class SellerRatings extends Base {
  function __construct($params = array()) {

    // call Base Class constructor
    parent::__construct($params);

    // since we are in the Seller Rating class
    // we need to set the content_type config
    // to reviews so we get reviews in our
    // SEO request
    $this->config['content_type'] = 'reviews';

    // for seller rating subject type will always
    // need to be seller
    $this->config['subject_type'] = 'seller';
  }

  public function getContent() {
    return $this->_renderSEO('getContent');
  }
}
