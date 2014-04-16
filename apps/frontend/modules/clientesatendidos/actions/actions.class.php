<?php

/**
 * clientesatendidos actions.
 *
 * @package    observatorio
 * @subpackage clientesatendidos
 * @author     Your name here
 */
class clientesatendidosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Clientesatendidoss = ClientesatendidosQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Clientesatendidos = ClientesatendidosPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Clientesatendidos);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ClientesatendidosForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ClientesatendidosForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Clientesatendidos = ClientesatendidosQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Clientesatendidos, sprintf('Object Clientesatendidos does not exist (%s).', $request->getParameter('id')));
    $this->form = new ClientesatendidosForm($Clientesatendidos);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Clientesatendidos = ClientesatendidosQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Clientesatendidos, sprintf('Object Clientesatendidos does not exist (%s).', $request->getParameter('id')));
    $this->form = new ClientesatendidosForm($Clientesatendidos);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Clientesatendidos = ClientesatendidosQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Clientesatendidos, sprintf('Object Clientesatendidos does not exist (%s).', $request->getParameter('id')));
    $Clientesatendidos->delete();

    $this->redirect('clientesatendidos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Clientesatendidos = $form->save();

      $this->redirect('clientesatendidos/edit?id='.$Clientesatendidos->getId());
    }
  }
}
