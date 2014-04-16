<?php

/**
 * institucion actions.
 *
 * @package    observatorio
 * @subpackage institucion
 * @author     Your name here
 */
class institucionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Institucions = InstitucionQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Institucion = InstitucionPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Institucion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new InstitucionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new InstitucionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Institucion = InstitucionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Institucion, sprintf('Object Institucion does not exist (%s).', $request->getParameter('id')));
    $this->form = new InstitucionForm($Institucion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Institucion = InstitucionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Institucion, sprintf('Object Institucion does not exist (%s).', $request->getParameter('id')));
    $this->form = new InstitucionForm($Institucion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Institucion = InstitucionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Institucion, sprintf('Object Institucion does not exist (%s).', $request->getParameter('id')));
    $Institucion->delete();

    $this->redirect('institucion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Institucion = $form->save();

      $this->redirect('institucion/edit?id='.$Institucion->getId());
    }
  }
}
