<?php
namespace AHT\Testimonial\Block;
use Magento\Framework\View\Element\Template;

class Landingspage extends Template {
	protected $_a;
	public function __construct(Template\Context $context, array $data = [],$a = 1) {
		parent::__construct($context, $data);
		$this->_a = $a;
	}
	public function getLandingsUrl() {
		return __('OWL Carousel!');
	}
	public function geta(){
		echo $this->_a;
	}
}