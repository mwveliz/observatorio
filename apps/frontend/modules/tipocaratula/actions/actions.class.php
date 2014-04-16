<?php

/**
 * tipocaratula actions.
 *
 * @package    observatorio
 * @subpackage tipocaratula
 * @author     Your name here
 */
class tipocaratulaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Tipocaratulas = TipocaratulaQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Tipocaratula = TipocaratulaPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Tipocaratula);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipocaratulaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipocaratulaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Tipocaratula = TipocaratulaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipocaratula, sprintf('Object Tipocaratula does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipocaratulaForm($Tipocaratula);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Tipocaratula = TipocaratulaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipocaratula, sprintf('Object Tipocaratula does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipocaratulaForm($Tipocaratula);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Tipocaratula = TipocaratulaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipocaratula, sprintf('Object Tipocaratula does not exist (%s).', $request->getParameter('id')));
    $Tipocaratula->delete();

    $this->redirect('tipocaratula/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Tipocaratula = $form->save();

      $this->redirect('tipocaratula/edit?id='.$Tipocaratula->getId());
    }
  }
}
