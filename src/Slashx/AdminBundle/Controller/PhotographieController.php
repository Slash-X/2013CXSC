<?php

namespace Slashx\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Slashx\AdminBundle\Entity\Photographie;
use Slashx\AdminBundle\Form\PhotographieType;

/**
 * Photographie controller.
 *
 * @Route("/photographie")
 */
class PhotographieController extends Controller
{
    /**
     * Lists all Photographie entities.
     *
     * @Route("/", name="photographie")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $id = $request->query->get('id');
        
        $album = $em->getRepository('SlashxAdminBundle:Album')->find($id);
        $entities=$album->getPhotographies();
        return array(
            'entities' => $entities,
            'album' => $album,
        );
    }

    /**
     * Creates a new Photographie entity.
     *
     * @Route("/", name="photographie_create")
     * @Method("POST")
     * @Template("SlashxAdminBundle:Photographie:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Photographie();
        $form = $this->createForm(new PhotographieType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
        	if (trim($entity->file)!="")
        		$entity->uploadProfilePicture();
        	else 
        		$entity->setPhoto('---');
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('photographie', array('id' => $entity->getAlbum()->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Photographie entity.
     *
     * @Route("/new", name="photographie_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Photographie();
        $request = $this->getRequest();
        $id = $request->query->get('id');

       
        $em = $this->getDoctrine()->getManager();
        $album = $em->getRepository('SlashxAdminBundle:Album')->find($id);
        $entity->setAlbum($album);
       
        $form   = $this->createForm(new PhotographieType(), $entity);

        
        return array(
            'entity' => $entity,
        		'id_album' => $id,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Photographie entity.
     *
     * @Route("/{id}", name="photographie_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SlashxAdminBundle:Photographie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Photographie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Photographie entity.
     *
     * @Route("/{id}/edit", name="photographie_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SlashxAdminBundle:Photographie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Photographie entity.');
        }

        $editForm = $this->createForm(new PhotographieType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
        		'id_album' => $id,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Photographie entity.
     *
     * @Route("/{id}", name="photographie_update")
     * @Method("PUT")
     * @Template("SlashxAdminBundle:Photographie:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SlashxAdminBundle:Photographie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Photographie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PhotographieType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
        	if (trim($entity->file)!="")
        	$entity->uploadProfilePicture();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('photographie', array('id' => $entity->getAlbum()->getId())));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Photographie entity.
     *
     * @Route("/{id}", name="photographie_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SlashxAdminBundle:Photographie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Photographie entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('photographie', array('id' => $entity->getAlbum()->getId())));
    }

    /**
     * Creates a form to delete a Photographie entity by id.
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
