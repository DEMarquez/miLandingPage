<?php

namespace LandingPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LandingPageBundle:Default:index.html.twig');
    }

    public function producto1Action($id)
    {
      if($id==1){
        return $this->render('LandingPageBundle:Default:producto1.html.twig',array('id'=>$id));
      }else{
        return $this->render('LandingPageBundle:Default:producto2.html.twig',array('id'=>$id));
      }
    }




}
