<?php

/**
 * tipoimpresion actions.
 *
 * @package    observatorio
 * @subpackage tipoimpresion
 * @author     Your name here
 */
class tipoimpresionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Tipoimpresions = TipoimpresionQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Tipoimpresion = TipoimpresionPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Tipoimpresion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipoimpresionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipoimpresionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Tipoimpresion = TipoimpresionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipoimpresion, sprintf('Object Tipoimpresion does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipoimpresionForm($Tipoimpresion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Tipoimpresion = TipoimpresionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipoimpresion, sprintf('Object Tipoimpresion does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipoimpresionForm($Tipoimpresion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Tipoimpresion = TipoimpresionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipoimpresion, sprintf('Object Tipoimpresion does not exist (%s).', $request->getParameter('id')));
    $Tipoimpresion->delete();

    $this->redirect('tipoimpresion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Tipoimpresion = $form->save();

      $this->redirect('tipoimpresion/edit?id='.$Tipoimpresion->getId());
    }
  }
}
