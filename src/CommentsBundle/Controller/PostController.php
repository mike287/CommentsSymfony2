<?php

namespace CommentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CommentsBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    /**
     * @Route("createComment", name="createComment")
     * @Route("/", name ="homepage")
     * @Template();
     */
    public function createCommentAction()
    {
        return array();
    }

    /**
     * @Route("/create", name = "create")
     */
    public function createAction(Request $request)
    {
        $nick = $request->request->get('nick');
        $comment = $request->request->get('comment');
        $post = new Post();
        $post->setNick($nick);
        $post->setComment($comment);

        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();

        $id = $post->getId($post);

        return $this->redirect("show/$id");

    }

    /**
     * @Route("/show/{id}", name="show")
     * @Template()
     */
    public function showAction($id)
    {
        return  array('id' => $id);
    }

    /**
     * @Route("/showAll", name="showAll")
     * @Template()
     */
    public function showAll()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('CommentsBundle:Post')->findAll();
        $rows = $repo;
        return array('rows' => $rows);
    }

    //szuka po nicku podanym w URL
    /**
     * @Route("/find/{nick}")
     */
    public function findAction($nick)
    {
        $repo = $this->getDoctrine()->getRepository('CommentsBundle:Post');
        $rows = $repo->findBy(array(
            'nick' => $nick
        ));

        return $this->render('/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/showAll.html.twig', array(
            'rows' => $rows));
    }

    /**
     * @Route("/deleter/{id}", name="deleter")
     */
    public function deleterAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('CommentsBundle:Post')->find($id);

        $em->remove($repo);
        $em->flush();

        return $this->redirectToRoute("showAll");

    }

    // odpowiedzialny za wyrenderowanie
    /**
     * @Route("/edytor/{id}", name="edytor")
     * @Template("/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/edytorAction.html.twig")
     */
    public function edytorAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $rows = $em->getRepository('CommentsBundle:Post')->find($id);

        return array('rows' => $rows);

    }

    // logika edycji i przeslania do bazy
    /**
     * @Route("/editorPusher/{id}", name="editorPusher")
     */
    public function editorPusherAction(Request $request, $id)
    {
        $nick = $request->request->get('editNick');
        $kom = $request->request->get('editComment');

        var_dump($id);

        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('CommentsBundle:Post')->find($id);

        $post->setComment($kom);
        $post->setNick($nick);
        $em->flush();

        return $this->redirectToRoute("showAll");

    }

    // wskazuje na formularz
    /**
     * @Route("/findNick/", name="findNick_")
     * @Template("/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/findNick.html.twig")
     */
    public function loadNickAction()
    {
        return array();
    }

    // szuka podanego nicka z formularza w bazie
    /**
     * @Route("/sender/", name="sender")
     */
    public function senderNickAction(Request $request)
    {
        $nick = $request->request->get('findNick');
//        var_dump($nick);
        $repo = $this->getDoctrine()->getRepository('CommentsBundle:Post');
        $rows = $repo->findBy(array(
            'nick' => $nick
        ));
//        var_dump($rows);

        return $this->render('/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/showAll.html.twig', array(
            'rows' => $rows));
    }


}
