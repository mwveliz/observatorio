<?php

/**
 * tipotripa actions.
 *
 * @package    observatorio
 * @subpackage tipotripa
 * @author     Your name here
 */
class tipotripaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Tipotripas = TipotripaQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Tipotripa = TipotripaPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Tipotripa);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipotripaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipotripaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Tipotripa = TipotripaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipotripa, sprintf('Object Tipotripa does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipotripaForm($Tipotripa);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Tipotripa = TipotripaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipotripa, sprintf('Object Tipotripa does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipotripaForm($Tipotripa);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Tipotripa = TipotripaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipotripa, sprintf('Object Tipotripa does not exist (%s).', $request->getParameter('id')));
    $Tipotripa->delete();

    $this->redirect('tipotripa/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Tipotripa = $form->save();

      $this->redirect('tipotripa/edit?id='.$Tipotripa->getId());
    }
  }
}
