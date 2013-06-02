<?php

namespace Slashx\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
	public function indexAction()
	{
		 return $this->render('SlashxAdminBundle:Page:index.html.twig');
	}
	
	public function aboutAction()
	{
		return $this->render('SlashxAdminBundle:Page:about.html.twig');
	}
}
