# 🌐 Exercice Symfony API REST

Bienvenue dans ce projet Symfony où j'ai mis en œuvre une **API REST** pour la gestion d'utilisateurs fictifs, générés par une API externe. 
Ce projet fait partie de mon parcours de formation, et il reflète mes apprentissages sur la création et la consommation d'API avec Symfony.

## 🎯 Objectifs du projet

- **Comprendre les bases des API REST**  et savoir comment les consommer avec Symfony.
- **Utiliser le composant HttpClient** pour interagir avec une API externe.
- **Créer une API REST personnalisée** à l'aide d'API Platform.
- **Gérer les données** dans une base de données avec Doctrine.


## 🛠️ Pré-requis techniques

- Connaissances de base en **PHP** et **Symfony**.
- Symfony installé localement (j'utilise la version 6.4).
- Une base de données configurée pour le projet.

## 📦 Fonctionnalités
### 🔗 Consommation d'une API REST externe
Dans ce projet, j'ai utilisé l'API randomuser.me pour générer des utilisateurs fictifs.
L'idée est de comprendre comment consommer une API REST en utilisant HttpClient, un composant fourni par Symfony.
Voici un exemple de code que j'ai mis en place pour récupérer 15 utilisateurs à partir de cette API :

```php
<?php

namespace App\HttpClient;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiHttpClient
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getUsers(): array
    {
        $response = $this->httpClient->request('GET', 'https://randomuser.me/api/?results=15', [
            'verify_peer' => false
        ]);
        return $response->toArray();
    }
} 
```
### 🛠️ Explication de la méthode

La méthode getUsers() envoie une requête GET à l'API randomuser.me pour récupérer 15 utilisateurs :
Voici comment ça fonctionne :

- **HttpClientInterface** :  Ce composant permet d'envoyer des requêtes HTTP. Il est injecté dans la classe via le constructeur.
- **Requête GET** : L'URL contient le paramètre ?results=15, qui demande à l'API de renvoyer 15 utilisateurs.
- **SSL désactivé** : Le paramètre 'verify_peer' => false désactive la vérification SSL pour éviter des erreurs en environnement local.
- **Données prêtes à l'emploi** : Les données sont récupérées et prêtes à être manipulées en PHP avec $response->toArray().

### 🛠️ Création d'une API interne avec API Platform

J'ai utilisé API Platform pour exposer l'entité Membre via une API REST.
Cela permet de gérer les utilisateurs récupérés avec des opérations comme GET et POST,  et de les stocker dans une base de données via Doctrine. 
Les routes (GET, POST, etc.) sont générées automatiquement, ce qui facilite grandement l'accès et la gestion des données.




