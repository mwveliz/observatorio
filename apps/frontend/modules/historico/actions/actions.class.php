<?php

/**
 * historico actions.
 *
 * @package    observatorio
 * @subpackage historico
 * @author     Your name here
 */
class historicoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Historicos = HistoricoQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Historico = HistoricoPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Historico);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new HistoricoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new HistoricoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Historico = HistoricoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Historico, sprintf('Object Historico does not exist (%s).', $request->getParameter('id')));
    $this->form = new HistoricoForm($Historico);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Historico = HistoricoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Historico, sprintf('Object Historico does not exist (%s).', $request->getParameter('id')));
    $this->form = new HistoricoForm($Historico);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Historico = HistoricoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Historico, sprintf('Object Historico does not exist (%s).', $request->getParameter('id')));
    $Historico->delete();

    $this->redirect('historico/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Historico = $form->save();

      $this->redirect('historico/edit?id='.$Historico->getId());
    }
  }
}
