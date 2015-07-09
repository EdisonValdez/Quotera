<?php

namespace Quotera\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Quotera\UserBundle\Entity\userInfo;
use Quotera\UserBundle\Form\userInfoType;

/**
 * userInfo controller.
 *
 */
class userInfoController extends Controller
{

    /**
     * Lists all userInfo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UserBundle:userInfo')->findAll();

        return $this->render('UserBundle:userInfo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new userInfo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new userInfo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $user = $this->getUser();

            $entity->setOwner($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('userinfo_show', array('id' => $entity->getId())));
        }

        return $this->render('UserBundle:userInfo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a userInfo entity.
     *
     * @param userInfo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(userInfo $entity)
    {
        $form = $this->createForm(new userInfoType(), $entity, array(
            'action' => $this->generateUrl('userinfo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new userInfo entity.
     *
     */
    public function newAction()
    {
        $entity = new userInfo();
        $form   = $this->createCreateForm($entity);


        return $this->render('UserBundle:userInfo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a userInfo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserBundle:userInfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find userInfo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UserBundle:userInfo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing userInfo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserBundle:userInfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find userInfo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UserBundle:userInfo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a userInfo entity.
    *
    * @param userInfo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(userInfo $entity)
    {
        $form = $this->createForm(new userInfoType(), $entity, array(
            'action' => $this->generateUrl('userinfo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing userInfo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserBundle:userInfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find userInfo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('userinfo_edit', array('id' => $id)));
        }

        return $this->render('UserBundle:userInfo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a userInfo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UserBundle:userInfo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find userInfo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('userinfo'));
    }

    /**
     * Creates a form to delete a userInfo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('userinfo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
