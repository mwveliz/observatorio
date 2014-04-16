<?php

/**
 * autor actions.
 *
 * @package    observatorio
 * @subpackage autor
 * @author     Your name here
 */
class autorActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Autors = AutorQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Autor = AutorPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Autor);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AutorForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AutorForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Autor = AutorQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Autor, sprintf('Object Autor does not exist (%s).', $request->getParameter('id')));
    $this->form = new AutorForm($Autor);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Autor = AutorQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Autor, sprintf('Object Autor does not exist (%s).', $request->getParameter('id')));
    $this->form = new AutorForm($Autor);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Autor = AutorQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Autor, sprintf('Object Autor does not exist (%s).', $request->getParameter('id')));
    $Autor->delete();

    $this->redirect('autor/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Autor = $form->save();

      $this->redirect('autor/edit?id='.$Autor->getId());
    }
  }
}
