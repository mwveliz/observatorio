<?php

/**
 * tipoautor actions.
 *
 * @package    observatorio
 * @subpackage tipoautor
 * @author     Your name here
 */
class tipoautorActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Tipoautors = TipoautorQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Tipoautor = TipoautorPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Tipoautor);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipoautorForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipoautorForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Tipoautor = TipoautorQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipoautor, sprintf('Object Tipoautor does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipoautorForm($Tipoautor);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Tipoautor = TipoautorQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipoautor, sprintf('Object Tipoautor does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipoautorForm($Tipoautor);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Tipoautor = TipoautorQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipoautor, sprintf('Object Tipoautor does not exist (%s).', $request->getParameter('id')));
    $Tipoautor->delete();

    $this->redirect('tipoautor/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Tipoautor = $form->save();

      $this->redirect('tipoautor/edit?id='.$Tipoautor->getId());
    }
  }
}
