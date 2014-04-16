<?php

/**
 * impresion actions.
 *
 * @package    observatorio
 * @subpackage impresion
 * @author     Your name here
 */
class impresionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Impresions = ImpresionQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Impresion = ImpresionPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Impresion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ImpresionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ImpresionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Impresion = ImpresionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Impresion, sprintf('Object Impresion does not exist (%s).', $request->getParameter('id')));
    $this->form = new ImpresionForm($Impresion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Impresion = ImpresionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Impresion, sprintf('Object Impresion does not exist (%s).', $request->getParameter('id')));
    $this->form = new ImpresionForm($Impresion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Impresion = ImpresionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Impresion, sprintf('Object Impresion does not exist (%s).', $request->getParameter('id')));
    $Impresion->delete();

    $this->redirect('impresion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Impresion = $form->save();

      $this->redirect('impresion/edit?id='.$Impresion->getId());
    }
  }
}
