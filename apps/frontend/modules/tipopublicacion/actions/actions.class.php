<?php

/**
 * tipopublicacion actions.
 *
 * @package    observatorio
 * @subpackage tipopublicacion
 * @author     Your name here
 */
class tipopublicacionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Tipopublicacions = TipopublicacionQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Tipopublicacion = TipopublicacionPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Tipopublicacion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipopublicacionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipopublicacionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Tipopublicacion = TipopublicacionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipopublicacion, sprintf('Object Tipopublicacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipopublicacionForm($Tipopublicacion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Tipopublicacion = TipopublicacionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipopublicacion, sprintf('Object Tipopublicacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipopublicacionForm($Tipopublicacion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Tipopublicacion = TipopublicacionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipopublicacion, sprintf('Object Tipopublicacion does not exist (%s).', $request->getParameter('id')));
    $Tipopublicacion->delete();

    $this->redirect('tipopublicacion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Tipopublicacion = $form->save();

      $this->redirect('tipopublicacion/edit?id='.$Tipopublicacion->getId());
    }
  }
}
