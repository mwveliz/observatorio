<?php

/**
 * estado actions.
 *
 * @package    observatorio
 * @subpackage estado
 * @author     Your name here
 */
class estadoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Estados = EstadoQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Estado = EstadoPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Estado);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EstadoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EstadoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Estado = EstadoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Estado, sprintf('Object Estado does not exist (%s).', $request->getParameter('id')));
    $this->form = new EstadoForm($Estado);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Estado = EstadoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Estado, sprintf('Object Estado does not exist (%s).', $request->getParameter('id')));
    $this->form = new EstadoForm($Estado);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Estado = EstadoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Estado, sprintf('Object Estado does not exist (%s).', $request->getParameter('id')));
    $Estado->delete();

    $this->redirect('estado/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Estado = $form->save();

      $this->redirect('estado/edit?id='.$Estado->getId());
    }
  }
}
