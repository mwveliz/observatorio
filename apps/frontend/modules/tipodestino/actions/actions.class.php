<?php

/**
 * tipodestino actions.
 *
 * @package    observatorio
 * @subpackage tipodestino
 * @author     Your name here
 */
class tipodestinoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Tipodestinos = TipodestinoQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Tipodestino = TipodestinoPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Tipodestino);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipodestinoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipodestinoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Tipodestino = TipodestinoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipodestino, sprintf('Object Tipodestino does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipodestinoForm($Tipodestino);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Tipodestino = TipodestinoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipodestino, sprintf('Object Tipodestino does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipodestinoForm($Tipodestino);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Tipodestino = TipodestinoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipodestino, sprintf('Object Tipodestino does not exist (%s).', $request->getParameter('id')));
    $Tipodestino->delete();

    $this->redirect('tipodestino/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Tipodestino = $form->save();

      $this->redirect('tipodestino/edit?id='.$Tipodestino->getId());
    }
  }
}
