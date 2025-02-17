<?php
namespace src\Controller;

use src\Model\Article;
use src\Model\Bdd;
use src\Model\Categorie;

class ApiController extends AbstractController
{

    public function ArticleGet()
    {
        $article = new Article();
        $listArticle = $article->SqlGetAll(Bdd::GetInstance());
        return json_encode($listArticle);
    }

    public function ArticlePost()
    {
        $article = new Article();
        $article->setTitre($_POST['Titre'])
            ->setDescription($_POST['Description'])
            ->setAuteur($_POST['Auteur'])
            ->setDateAjout($_POST['DateAjout']);
        $result = $article->SqlAdd(Bdd::getInstance());

        return json_encode($result);
    }

    public function ArticlePut($idArticle, $json)
    {
        $jsonData = json_decode($json);
        $articleSQL = new Article();
        $article = $articleSQL->SqlGet(BDD::getInstance(), $idArticle);
        if (isset($jsonData->Titre)) {
            $article->setTitre($jsonData->Titre);
        }
        if (isset($jsonData->Description)) {
            $article->setDescription($jsonData->Description);
        }
        if (isset($jsonData->Auteur)) {
            $article->setAuteur($jsonData->Auteur);
        }
        if (isset($jsonData->DateAjout)) {
            $article->setDateAjout($jsonData->DateAjout);
        }

        $result = $article->SqlUpdate(BDD::getInstance());

        return json_encode($result);
    }
//Fonction récupérant les derniers articles dans la BDD
    public function ArticleGetLast()
    {
        $article = new Article();
        $listArticle = $article->SqlGetLast(Bdd::GetInstance());
        //return json_encode($listArticle);

        //Lancer la vue TWIG
        $Categorie = new Categorie();
        $listCategorie = $Categorie->SqlGetCateg(Bdd::GetInstance());
        return $this->twig->render(
            'Article/profil.html.twig',[
                'articleList' => $listArticle
                ,'listCat' => $listCategorie
            ]
        );
    }

}
