<?php

namespace Slashx\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Slashx\AdminBundle\Entity\Typage;
use Slashx\AdminBundle\Form\TypageType;

/**
 * Typage controller.
 *
 * @Route("/typage")
 */
class TypageController extends Controller
{
    /**
     * Lists all Typage entities.
     *
     * @Route("/", name="typage")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
    	
        $em = $this->getDoctrine()->getManager();
        // On récupère la requête
        $request = $this->getRequest();
        $id = $request->query->get('id');
      
        
        $papillon = $em->getRepository('SlashxAdminBundle:Papillon')->find($id);
        $entities = $papillon->getTypages();

        return array(
            'entities' => $entities,
        		'papillon'=> $papillon,
        );
    }

    /**
     * Creates a new Typage entity.
     *
     * @Route("/", name="typage_create")
     * @Method("POST")
     * @Template("SlashxAdminBundle:Typage:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Typage();
        $form = $this->createForm(new TypageType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
        	$entity->uploadProfilePicture();
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('typage', array('id' => $entity->getPapillon()->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Typage entity.
     *
     * @Route("/new", name="typage_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Typage();
       

        $request = $this->getRequest();
        $papillon_id = $request->query->get('id');
        
        
        $em = $this->getDoctrine()->getManager();
        $papillon = $em->getRepository('SlashxAdminBundle:Papillon')->find($papillon_id);
        $entity->setPapillon($papillon);
        
        $form   = $this->createForm(new TypageType(), $entity);
        
        return array(
        	'id' => $papillon_id,
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Typage entity.
     *
     * @Route("/{id}", name="typage_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SlashxAdminBundle:Typage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Typage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Typage entity.
     *
     * @Route("/{id}/edit", name="typage_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SlashxAdminBundle:Typage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Typage entity.');
        }

        $editForm = $this->createForm(new TypageType(), $entity);
        $deleteForm = $this->createDeleteForm($id);
        $papillon_id = $entity->getPapillon()->getId();
        
        

        return array(
        		'papillon_id'=>  $papillon_id,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Typage entity.
     *
     * @Route("/{id}", name="typage_update")
     * @Method("PUT")
     * @Template("SlashxAdminBundle:Typage:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SlashxAdminBundle:Typage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Typage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TypageType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
        	if (trim($entity->file)!="")
        	$entity->uploadProfilePicture();
            $em->persist($entity);
            $em->flush();

            
            return $this->redirect($this->generateUrl('typage', array('id' => $entity->getPapillon()->getId())));
            
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Typage entity.
     *
     * @Route("/{id}", name="typage_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);
        
        $id_papillon  = 0;

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SlashxAdminBundle:Typage')->find($id);
            $id_papillon  = $entity->getPapillon()->getId();
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Typage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('typage', array('id' =>  $id_papillon)));
            
    }

    /**
     * Creates a form to delete a Typage entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
