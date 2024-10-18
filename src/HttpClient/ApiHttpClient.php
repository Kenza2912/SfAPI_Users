<?php


namespace App\HttpClient; // je définit le namespace de la class dans laquelle se trouve ce fichier

use Symfony\Component\HttpFoundation\Response; // j'importe la classe Response pour gérer les réponses HTTP
use Symfony\Component\HttpFoundation\JsonResponse; // j'importe la classe JsonResponse pour crée des réponses JSON
use Symfony\Contracts\HttpClient\HttpClientInterface; // j'importe l'interface HttpClientInterface pour déclarere le type d'inkjection de dépendance dans le constructeur
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;// J'importe la class  AbstractController pour étendre cette classe de contrôleur abstraite


class ApiHttpClient extends AbstractController // Je définit la classe ApiHttpClient qui étend AbstractController
{

    private $httpClient; //Je déclare  un champ privé $httpClient pour stocker l'instance du service HttpClient

    












}