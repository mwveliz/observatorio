<?php

/**
 * libreria actions.
 *
 * @package    observatorio
 * @subpackage libreria
 * @author     Your name here
 */
class libreriaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Librerias = LibreriaQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Libreria = LibreriaPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Libreria);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new LibreriaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new LibreriaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Libreria = LibreriaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Libreria, sprintf('Object Libreria does not exist (%s).', $request->getParameter('id')));
    $this->form = new LibreriaForm($Libreria);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Libreria = LibreriaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Libreria, sprintf('Object Libreria does not exist (%s).', $request->getParameter('id')));
    $this->form = new LibreriaForm($Libreria);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Libreria = LibreriaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Libreria, sprintf('Object Libreria does not exist (%s).', $request->getParameter('id')));
    $Libreria->delete();

    $this->redirect('libreria/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Libreria = $form->save();

      $this->redirect('libreria/edit?id='.$Libreria->getId());
    }
  }
}
