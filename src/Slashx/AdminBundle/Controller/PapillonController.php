<?php

namespace Slashx\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Slashx\AdminBundle\Entity\Papillon;
use Slashx\AdminBundle\Form\PapillonType;
use Slashx\AdminBundle\Entity\Album;

/**
 * Papillon controller.
 *
 * @Route("/papillon")
 */
class PapillonController extends Controller
{
    /**
     * Lists all Papillon entities.
     *
     * @Route("/", name="papillon")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SlashxAdminBundle:Papillon')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Papillon entity.
     *
     * @Route("/", name="papillon_create")
     * @Method("POST")
     * @Template("SlashxAdminBundle:Papillon:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Papillon();
        $form = $this->createForm(new PapillonType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
        	
        	// On crée automatiquement son album quand on crée un papillon
        	$album = new Album();
        	$album->setTitre($entity->getNom());
        	$entity->setAlbum($album);
        	
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('papillon', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Papillon entity.
     *
     * @Route("/new", name="papillon_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Papillon();
        $form   = $this->createForm(new PapillonType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Papillon entity.
     *
     * @Route("/{id}", name="papillon_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SlashxAdminBundle:Papillon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Papillon entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Papillon entity.
     *
     * @Route("/{id}/edit", name="papillon_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SlashxAdminBundle:Papillon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Papillon entity.');
        }

        $editForm = $this->createForm(new PapillonType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Papillon entity.
     *
     * @Route("/{id}", name="papillon_update")
     * @Method("PUT")
     * @Template("SlashxAdminBundle:Papillon:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SlashxAdminBundle:Papillon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Papillon entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PapillonType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
        	
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('papillon', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Papillon entity.
     *
     * @Route("/{id}", name="papillon_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SlashxAdminBundle:Papillon')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Papillon entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('papillon'));
    }

    /**
     * Creates a form to delete a Papillon entity by id.
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
