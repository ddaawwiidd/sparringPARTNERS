<?php

namespace SPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use SPBundle\Entity\Profile;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ProfileController
 * @package SPBundle\Controller
 *
 * @Route("/profile")
 */
class ProfileController extends Controller
{
    private function generateProfileForm($profile, $action)
    {
        $form = $this->createFormBuilder($profile);
        $form->add('firstName', 'text');
        $form->add('secondName', 'text');
        $form->add('description', 'text');
        $form->add('sex', 'text');
        $form->add('weight', 'number');
        $form->add('height', 'number');
        $form->add('belt', 'text');
        $form->add('location', 'text');
        $form->add('add profile', 'submit', ['label' => 'create new profile']);
        $form->setAction($action);

        $profileForm = $form->getForm();

        return $profileForm;
    }

    /**
     * @Route("/{id}/newProfile")
     * @Template("SPBundle:Profile:newProfile.html.twig")
     * @Method("GET")
     */
    public function newProfileAction($id)
    {
        $profile = new Profile();
        $profileForm = $this->generateProfileForm($profile, $this->generateUrl('newProfile', ['id' => $id]));

        $repo = $this->getDoctrine()->getRepository('SPBundle:User');
        $user = $repo->find($id);
        return ['form' => $profileForm->createView(), 'user' => $user];
    }

    /**
     * @Route("/{id}/newProfile", name="newProfile")
     * @Template("SPBundle:Profile:newProfile.html.twig")
     * @Method("POST")
     */
    public function createProfileAction(Request $req, $id)
    {
        $repo = $this->getDoctrine()->getRepository('SPBundle:User');
        $user = $repo->find($id);


        $profile = new Profile();

        $form = $this->generateProfileForm($profile, $this->generateUrl('newProfile', ['id' => $id]));
        $form->handleRequest($req);

        if ($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();

            $profile->setFighter($user);
            $user->setProfile($profile);

            $em->persist($profile);
            $em->flush();
        }

        $newId = $profile->getId();

        return $this->redirectToRoute('getProfile', ['id' =>$newId]);
    }
/*
    /**
     * @Route("/getProfile/{id}, name="getProfile")
     * @Template("SPBundle:Profile:profile.html.twig")

    public function getProfileAction($id)
    {
        $repo = $this->getDoctrine()->getRepository('SPBundle:Profile');
        $profile = $repo->find($id);

        return ['profile' => $profile];
    }
*/
}
