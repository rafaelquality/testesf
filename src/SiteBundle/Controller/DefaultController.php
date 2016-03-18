<?php
	
	namespace SiteBundle\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
	
	/**
	 * @Route("/")
	 * @Template
	 */
	class DefaultController extends Controller {
		
		/**
		 * @Route("/")
		 */
		public function indexAction() {
			return null;
		}
	}
