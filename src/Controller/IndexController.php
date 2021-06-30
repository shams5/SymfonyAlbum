<?php

namespace App\Controller;

use App\Entity\Album;
// use App\Entity\Bulletin;
use App\Form\BulletinType;

use App\Repository\AlbumRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use App\Form\BulletinType;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index($index=false): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
	    $albumeRepository = $entityManager->getRepository(Album::class);

        $albums = $albumeRepository->findAll();
        // $entityManager->flush();
        // $album = new Album();
        // $album = $albumeRepository
        // $photos = 
        // $bulletinForm = $this->createForm(BulletinType::class, $album);
        // $bulletinForm->handleRequest($request);
        // $bulletinForm = $this->createForm(BulletinType::class, $bulletin);
        return $this->render('index/index.html.twig', [
            // 'dataForm' => $bulletinForm->createView(),
            'albums' => $albums,
        ]);
    }

    /**
     * @Route("/description/{albumId}", name="description")
     */
    public function displaySigleAlbum(Request $request, $albumId){
        $entityManager = $this->getDoctrine()->getManager();
	    $albumeRepository = $entityManager->getRepository(Album::class);

        $album = $albumeRepository->find($albumId);

        return $this->render('index/displaySigleAlbum.html.twig', [
            // 'dataForm' => $bulletinForm->createView(),
            'albumId' => $album,
        ]);
    }

    /**
     * @Route("/edit/{albumId}", name="edit")
     */
    public function editAlbum(Request $request, $albumId = false){
        $entityManager = $this->getDoctrine()->getManager();
	    // $albumeRepository = $entityManager->getRepository(\App\Entity\Album::class);
	    $albumeRepository = $entityManager->getRepository(Album::class);

        $album = $albumeRepository->find($albumId);

        return $this->render('index/editAlbum.html.twig', [
            // 'dataForm' => $bulletinForm->createView(),
            'albumId' => $albumId,
        ]);
    }  
}
