<?php

/**
 * roles actions.
 *
 * @package    GuizMed
 * @subpackage roles
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class rolesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->ad_roles = Doctrine_Core::getTable('adRole')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->ad_role = Doctrine_Core::getTable('adRole')->find(array($request->getParameter('role_id')));
    $this->forward404Unless($this->ad_role);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new adRoleForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new adRoleForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ad_role = Doctrine_Core::getTable('adRole')->find(array($request->getParameter('role_id'))), sprintf('Object ad_role does not exist (%s).', $request->getParameter('role_id')));
    $this->form = new adRoleForm($ad_role);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ad_role = Doctrine_Core::getTable('adRole')->find(array($request->getParameter('role_id'))), sprintf('Object ad_role does not exist (%s).', $request->getParameter('role_id')));
    $this->form = new adRoleForm($ad_role);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ad_role = Doctrine_Core::getTable('adRole')->find(array($request->getParameter('role_id'))), sprintf('Object ad_role does not exist (%s).', $request->getParameter('role_id')));
    $ad_role->delete();

    $this->redirect('roles/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ad_role = $form->save();

      $this->redirect('roles/edit?role_id='.$ad_role->getRoleId());
    }
  }
}
