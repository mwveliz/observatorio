<?php

/**
 * tipoinstitucion actions.
 *
 * @package    observatorio
 * @subpackage tipoinstitucion
 * @author     Your name here
 */
class tipoinstitucionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Tipoinstitucions = TipoinstitucionQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Tipoinstitucion = TipoinstitucionPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Tipoinstitucion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipoinstitucionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipoinstitucionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Tipoinstitucion = TipoinstitucionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipoinstitucion, sprintf('Object Tipoinstitucion does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipoinstitucionForm($Tipoinstitucion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Tipoinstitucion = TipoinstitucionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipoinstitucion, sprintf('Object Tipoinstitucion does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipoinstitucionForm($Tipoinstitucion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Tipoinstitucion = TipoinstitucionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipoinstitucion, sprintf('Object Tipoinstitucion does not exist (%s).', $request->getParameter('id')));
    $Tipoinstitucion->delete();

    $this->redirect('tipoinstitucion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Tipoinstitucion = $form->save();

      $this->redirect('tipoinstitucion/edit?id='.$Tipoinstitucion->getId());
    }
  }
}
