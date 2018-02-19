<?php

namespace HTL\ImmobilierBundle\Repository;

/**
 * LocaliteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LocaliteRepository extends \Doctrine\ORM\EntityRepository
{
        
     public function FindAllLocalite($libellelocalite)
    {

             return $this->getEntityManager()
                ->createQuery(
                    'SELECT b.id,b.nombien,l.libellelocalite,b.prixlocation,b.description,t.libelletype,i.image FROM HTLImmobilierBundle:Bien b,HTLImmobilierBundle:Localite l,HTLImmobilierBundle:Typebien t,HTLImmobilierBundle:Image i WHERE b.libellelocalite=l.id AND b.typebien=t.id and b.id=i.bien and l.libellelocalite=:libellelocalite'
                )
                 ->setParameter('libellelocalite',$libellelocalite)->execute();
              
        } 
   
}