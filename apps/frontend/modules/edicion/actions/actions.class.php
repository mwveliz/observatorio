<?php

/**
 * edicion actions.
 *
 * @package    observatorio
 * @subpackage edicion
 * @author     Your name here
 */
class edicionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Edicions = EdicionQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Edicion = EdicionPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Edicion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EdicionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EdicionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Edicion = EdicionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Edicion, sprintf('Object Edicion does not exist (%s).', $request->getParameter('id')));
    $this->form = new EdicionForm($Edicion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Edicion = EdicionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Edicion, sprintf('Object Edicion does not exist (%s).', $request->getParameter('id')));
    $this->form = new EdicionForm($Edicion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Edicion = EdicionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Edicion, sprintf('Object Edicion does not exist (%s).', $request->getParameter('id')));
    $Edicion->delete();

    $this->redirect('edicion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Edicion = $form->save();

      $this->redirect('edicion/edit?id='.$Edicion->getId());
    }
  }
}
