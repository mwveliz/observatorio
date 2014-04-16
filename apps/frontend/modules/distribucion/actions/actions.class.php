<?php

/**
 * distribucion actions.
 *
 * @package    observatorio
 * @subpackage distribucion
 * @author     Your name here
 */
class distribucionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Distribucions = DistribucionQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Distribucion = DistribucionPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Distribucion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new DistribucionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new DistribucionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Distribucion = DistribucionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Distribucion, sprintf('Object Distribucion does not exist (%s).', $request->getParameter('id')));
    $this->form = new DistribucionForm($Distribucion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Distribucion = DistribucionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Distribucion, sprintf('Object Distribucion does not exist (%s).', $request->getParameter('id')));
    $this->form = new DistribucionForm($Distribucion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Distribucion = DistribucionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Distribucion, sprintf('Object Distribucion does not exist (%s).', $request->getParameter('id')));
    $Distribucion->delete();

    $this->redirect('distribucion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Distribucion = $form->save();

      $this->redirect('distribucion/edit?id='.$Distribucion->getId());
    }
  }
}
