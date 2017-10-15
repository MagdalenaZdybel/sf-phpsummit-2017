<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\FormType\RegisterType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/register", name="register", methods={"GET", "POST"})
     */
    public function registerAction(Request $request)
    {
        $form = $this->createForm(RegisterType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $objectManager = $this->getDoctrine()->getManager();
            $user = new User(
                    $form->get('email')->getData(),
                    password_hash($form->get('password')->getData(), PASSWORD_BCRYPT)
                );
            $user->setSurname($form->get("surname")-> getData());
            $objectManager->persist($user);
            $objectManager->flush();

            return $this->redirect('/login.php?successRegister=1');
        }

        return $this->render(
            'default/register.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }
}
