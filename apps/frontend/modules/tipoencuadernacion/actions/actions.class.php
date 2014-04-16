<?php

/**
 * tipoencuadernacion actions.
 *
 * @package    observatorio
 * @subpackage tipoencuadernacion
 * @author     Your name here
 */
class tipoencuadernacionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Tipoencuadernacions = TipoencuadernacionQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Tipoencuadernacion = TipoencuadernacionPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Tipoencuadernacion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipoencuadernacionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipoencuadernacionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Tipoencuadernacion = TipoencuadernacionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipoencuadernacion, sprintf('Object Tipoencuadernacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipoencuadernacionForm($Tipoencuadernacion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Tipoencuadernacion = TipoencuadernacionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipoencuadernacion, sprintf('Object Tipoencuadernacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipoencuadernacionForm($Tipoencuadernacion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Tipoencuadernacion = TipoencuadernacionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipoencuadernacion, sprintf('Object Tipoencuadernacion does not exist (%s).', $request->getParameter('id')));
    $Tipoencuadernacion->delete();

    $this->redirect('tipoencuadernacion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Tipoencuadernacion = $form->save();

      $this->redirect('tipoencuadernacion/edit?id='.$Tipoencuadernacion->getId());
    }
  }
}
