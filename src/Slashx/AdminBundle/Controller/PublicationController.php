<?php

namespace Slashx\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Slashx\AdminBundle\Entity\Publication;
use Slashx\AdminBundle\Form\PublicationType;

/**
 * Publication controller.
 *
 * @Route("/publication")
 */
class PublicationController extends Controller
{
    /**
     * Lists all Publication entities.
     *
     * @Route("/", name="publication")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $id = $request->query->get('id');
        
        $papillon = $em->getRepository('SlashxAdminBundle:Papillon')->find($id);
        $entities = $papillon->getPublications();

        return array(
            'entities' => $entities,
        	'papillon'=> $papillon,
        );
    }

    /**
     * Creates a new Publication entity.
     *
     * @Route("/", name="publication_create")
     * @Method("POST")
     * @Template("SlashxAdminBundle:Publication:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Publication();
        $form = $this->createForm(new PublicationType(), $entity);
        $form->bind($request);

        
        if ($form->isValid()) {
        	
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('publication', array('id' => $entity->getPapillon()->getId())));
        }
        

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Publication entity.
     *
     * @Route("/new", name="publication_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Publication();
        $request = $this->getRequest();
        $id = $request->query->get('id');
     
        $em = $this->getDoctrine()->getManager();
        $papillon = $em->getRepository('SlashxAdminBundle:Papillon')->find($id);
        $entity->setPapillon($papillon);
        
        $form   = $this->createForm(new PublicationType(), $entity);
       
        $papillon_id = $request->query->get('id');
       
        return array(
        	'id' => $papillon_id,
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Publication entity.
     *
     * @Route("/{id}", name="publication_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SlashxAdminBundle:Publication')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publication entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Publication entity.
     *
     * @Route("/{id}/edit", name="publication_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SlashxAdminBundle:Publication')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publication entity.');
        }

        $editForm = $this->createForm(new PublicationType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Publication entity.
     *
     * @Route("/{id}", name="publication_update")
     * @Method("PUT")
     * @Template("SlashxAdminBundle:Publication:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SlashxAdminBundle:Publication')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publication entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PublicationType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('publication', array('id' => $entity->getPapillon()->getId())));
            
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Publication entity.
     *
     * @Route("/{id}", name="publication_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);
        $id_papillon  = 0;
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SlashxAdminBundle:Publication')->find($id);
            $id_papillon  = $entity->getPapillon()->getId();
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Publication entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('publication', array('id' => $entity->getPapillon()->getId())));
            
    }

    /**
     * Creates a form to delete a Publication entity by id.
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
