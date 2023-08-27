<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController { 

    #[Route('/getCharacters', name: 'getCharacters', methods:["GET"])]
    public function getCharacters()
	  {
          $characters = [
            
            [
                "name"=> "IronMan",
                "planet" => "Tierra"
            ],

            [
                "name"=> "Thor",
                "planet" => "Asgard"
            ],


            ];

            // return new JsonResponse($characters);
            return $this->render("characters/characters.html.twig", ["characters" => $characters]);

	  }

      #[Route('/getCharacter/{id}', name: 'getCharacter', methods:["GET"])]
      public function getCharacter($id)
        {

             $character = [
                "name"=> "IronMan",
                "planet" => "Tierra"
             ];

             return $this->render("character/character.html.twig", ["id"=> $id, "character" => $character]);
        }

//--> Edit    

        #[Route('/character/edit/{id}', name: 'edit', methods:["PUT"])]
        public function editCharacter($id)
        {
            $response = [
                "message"=> "Se ha editado correctamente el id",
                "success"=> true
            ];

             return new JsonResponse($response);
        }
    

  
// -> Delete 
    #[Route('/character/{id}', name: 'delete', methods:["DELETE"])]
    public function deleteCharacter($id) {

        $response = [
            "message"=> "Se ha borrado correctamente el personaje con id: $id",
            "success"=> true
        ];

         return new JsonResponse($response);

    }
    
}