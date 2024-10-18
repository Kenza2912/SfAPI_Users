<?php


namespace App\HttpClient; // je définit le namespace de la class dans laquelle se trouve ce fichier

use App\HttpClient\ApiHttpClient;
use Symfony\Component\HttpFoundation\Response; // j'importe la classe Response pour gérer les réponses HTTP
use Symfony\Component\HttpFoundation\JsonResponse; // j'importe la classe JsonResponse pour crée des réponses JSON
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;// J'importe la class  AbstractController pour étendre cette classe de contrôleur abstraite
use Symfony\Contracts\HttpClient\HttpClientInterface; // j'importe l'interface HttpClientInterface pour déclarere le type d'injection de dépendance dans le constructeur


class ApiHttpClient extends AbstractController // Je définis la classe ApiHttpClient qui étend AbstractController
{

    private $httpClient; //Je déclare  un champ privé $httpClient pour stocker l'instance du service HttpClient

    // Je définit le constructeur qui prend un service HttpClientInterface en paramètre et l'injecte dans le champ $httpClient
    public function __construct(HttpClientInterface $jph) 
    {
        // J' initialise le champ $httpClient avec l'instance du service HttpClient
        $this->httpClient = $jph; 

    }

    //Je définis une méthode getUsers pour récupérer des utilisateurs depuis l'API
    public function getUsers() 
    {
        // J'utilise le service HttpClient pour effectuer une requête GET à l'API avec un endpoint spécifié et des options
        $response = $this->httpClient->request('GET', "?results=15", ['verify_peer' => false]);

        // Je  retourne les données de la réponse converties en tableau associatif
        return $response->toArray();
    }















}