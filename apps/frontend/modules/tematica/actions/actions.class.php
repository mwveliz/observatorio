<?php

/**
 * tematica actions.
 *
 * @package    observatorio
 * @subpackage tematica
 * @author     Your name here
 */
class tematicaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Tematicas = TematicaQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Tematica = TematicaPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Tematica);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TematicaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TematicaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Tematica = TematicaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tematica, sprintf('Object Tematica does not exist (%s).', $request->getParameter('id')));
    $this->form = new TematicaForm($Tematica);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Tematica = TematicaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tematica, sprintf('Object Tematica does not exist (%s).', $request->getParameter('id')));
    $this->form = new TematicaForm($Tematica);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Tematica = TematicaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tematica, sprintf('Object Tematica does not exist (%s).', $request->getParameter('id')));
    $Tematica->delete();

    $this->redirect('tematica/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Tematica = $form->save();

      $this->redirect('tematica/edit?id='.$Tematica->getId());
    }
  }
}
