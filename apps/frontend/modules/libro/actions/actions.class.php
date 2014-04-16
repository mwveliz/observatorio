<?php

/**
 * libro actions.
 *
 * @package    observatorio
 * @subpackage libro
 * @author     Your name here
 */
class libroActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Libros = LibroQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Libro = LibroPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Libro);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new LibroForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new LibroForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Libro = LibroQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Libro, sprintf('Object Libro does not exist (%s).', $request->getParameter('id')));
    $this->form = new LibroForm($Libro);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Libro = LibroQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Libro, sprintf('Object Libro does not exist (%s).', $request->getParameter('id')));
    $this->form = new LibroForm($Libro);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Libro = LibroQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Libro, sprintf('Object Libro does not exist (%s).', $request->getParameter('id')));
    $Libro->delete();

    $this->redirect('libro/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Libro = $form->save();

      $this->redirect('libro/edit?id='.$Libro->getId());
    }
  }
}
