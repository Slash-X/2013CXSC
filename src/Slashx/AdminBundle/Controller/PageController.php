<?php

namespace Slashx\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
	public function indexAction()
	{
		 return $this->render('SlashxAdminBundle:Page:index.html.twig');
	}
	
}
