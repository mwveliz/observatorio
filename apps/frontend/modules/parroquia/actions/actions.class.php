<?php

/**
 * parroquia actions.
 *
 * @package    observatorio
 * @subpackage parroquia
 * @author     Your name here
 */
class parroquiaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Parroquias = ParroquiaQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Parroquia = ParroquiaPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Parroquia);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ParroquiaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ParroquiaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Parroquia = ParroquiaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Parroquia, sprintf('Object Parroquia does not exist (%s).', $request->getParameter('id')));
    $this->form = new ParroquiaForm($Parroquia);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Parroquia = ParroquiaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Parroquia, sprintf('Object Parroquia does not exist (%s).', $request->getParameter('id')));
    $this->form = new ParroquiaForm($Parroquia);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Parroquia = ParroquiaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Parroquia, sprintf('Object Parroquia does not exist (%s).', $request->getParameter('id')));
    $Parroquia->delete();

    $this->redirect('parroquia/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Parroquia = $form->save();

      $this->redirect('parroquia/edit?id='.$Parroquia->getId());
    }
  }
}
