<?php

/**
 * status actions.
 *
 * @package    observatorio
 * @subpackage status
 * @author     Your name here
 */
class statusActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Statuss = StatusQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Status = StatusPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Status);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new StatusForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new StatusForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Status = StatusQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Status, sprintf('Object Status does not exist (%s).', $request->getParameter('id')));
    $this->form = new StatusForm($Status);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Status = StatusQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Status, sprintf('Object Status does not exist (%s).', $request->getParameter('id')));
    $this->form = new StatusForm($Status);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Status = StatusQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Status, sprintf('Object Status does not exist (%s).', $request->getParameter('id')));
    $Status->delete();

    $this->redirect('status/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Status = $form->save();

      $this->redirect('status/edit?id='.$Status->getId());
    }
  }
}
