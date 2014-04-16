<?php

/**
 * tipolibreria actions.
 *
 * @package    observatorio
 * @subpackage tipolibreria
 * @author     Your name here
 */
class tipolibreriaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Tipolibrerias = TipolibreriaQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Tipolibreria = TipolibreriaPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Tipolibreria);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipolibreriaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipolibreriaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Tipolibreria = TipolibreriaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipolibreria, sprintf('Object Tipolibreria does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipolibreriaForm($Tipolibreria);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Tipolibreria = TipolibreriaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipolibreria, sprintf('Object Tipolibreria does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipolibreriaForm($Tipolibreria);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Tipolibreria = TipolibreriaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Tipolibreria, sprintf('Object Tipolibreria does not exist (%s).', $request->getParameter('id')));
    $Tipolibreria->delete();

    $this->redirect('tipolibreria/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Tipolibreria = $form->save();

      $this->redirect('tipolibreria/edit?id='.$Tipolibreria->getId());
    }
  }
}
