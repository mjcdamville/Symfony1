<?php

namespace Mjcdamville\PremierBundle\Controller;

use Mjcdamville\PremierBundle\Model\Tache;
use Mjcdamville\PremierBundle\Model\TacheQuery;
use Mjcdamville\PremierBundle\Form\TacheType;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/taches", name="liste_taches")
     * @Template()
     */
    public function indexAction()
    {
        $taches = TacheQuery::create()->find();
        return array('taches' => $taches);
    }
    
    /**
     * @Route("/taches/new", name="nouvelle_tache")
     * @Template()
     */
    public function newAction()
    {
        $tache = new Tache();
            $tache->setDescription('Une exemple de tâche');
            $tache->setRealisee(false);
        $tache->save();
        
        return array('tache' => $tache);
    }
    
    /**
     * @Route("/supprimer_tache/{id}", name="supprimer_tache")
     * @Template()
     */    
    public function deleteAction($id)
    {
        $tache = TacheQuery::create()->findPk($id);
        
        if (!$tache) {
            throw new NotFoundHttpException('Tache non trouvée');
        }
        
        $tache->delete();
        
        return $this->redirect($this->generateUrl('liste_taches'));
    }
    
}
