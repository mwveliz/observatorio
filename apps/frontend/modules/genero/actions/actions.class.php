<?php

/**
 * genero actions.
 *
 * @package    observatorio
 * @subpackage genero
 * @author     Your name here
 */
class generoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Generos = GeneroQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Genero = GeneroPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Genero);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new GeneroForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new GeneroForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Genero = GeneroQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Genero, sprintf('Object Genero does not exist (%s).', $request->getParameter('id')));
    $this->form = new GeneroForm($Genero);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Genero = GeneroQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Genero, sprintf('Object Genero does not exist (%s).', $request->getParameter('id')));
    $this->form = new GeneroForm($Genero);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Genero = GeneroQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Genero, sprintf('Object Genero does not exist (%s).', $request->getParameter('id')));
    $Genero->delete();

    $this->redirect('genero/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Genero = $form->save();

      $this->redirect('genero/edit?id='.$Genero->getId());
    }
  }
}
