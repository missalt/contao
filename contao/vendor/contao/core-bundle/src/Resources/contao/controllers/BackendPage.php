<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao;

use Contao\CoreBundle\Exception\AccessDeniedException;
use Contao\CoreBundle\Security\ContaoCorePermissions;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;

trigger_deprecation('contao/core-bundle', '4.13', 'Using the "Contao\BackendPage" class has been deprecated and will no longer work in Contao 5.0. Use the picker instead.');

/**
 * Back end page picker.
 *
 * @deprecated Deprecated since Contao 4.13, to be removed in Contao 5.0.
 *             Use the picker instead.
 */
class BackendPage extends Backend
{
	/**
	 * Current Ajax object
	 * @var Ajax
	 */
	protected $objAjax;

	/**
	 * Initialize the controller
	 *
	 * 1. Import the user
	 * 2. Call the parent constructor
	 * 3. Authenticate the user
	 * 4. Load the language files
	 * DO NOT CHANGE THIS ORDER!
	 */
	public function __construct()
	{
		$this->import(BackendUser::class, 'User');
		parent::__construct();

		if (!System::getContainer()->get('security.authorization_checker')->isGranted('ROLE_USER'))
		{
			throw new AccessDeniedException('Access denied');
		}

		System::loadLanguageFile('default');
	}

	/**
	 * Run the controller and parse the template
	 *
	 * @return Response
	 */
	public function run()
	{
		$container = System::getContainer();
		$objSession = $container->get('session');

		$objTemplate = new BackendTemplate('be_picker');
		$objTemplate->main = '';

		// Ajax request
		if ($_POST && Environment::get('isAjaxRequest'))
		{
			$this->objAjax = new Ajax(Input::post('action'));
			$this->objAjax->executePreActions();
		}

		$strTable = Input::get('table');
		$strField = Input::get('field');

		$id = $this->findCurrentId($strTable);
		$objSession->set('CURRENT_ID', $id);

		// Define the current ID
		\define('CURRENT_ID', (Input::get('table') ? $id : Input::get('id')));

		$this->loadDataContainer($strTable);
		$strDriver = DataContainer::getDriverForTable($strTable);
		$objDca = new $strDriver($strTable);
		$objDca->field = $strField;

		// Set the active record
		if ($this->Database->tableExists($strTable))
		{
			$strModel = Model::getClassFromTable($strTable);

			if (class_exists($strModel))
			{
				/** @var Model|null $objModel */
				$objModel = $strModel::findByPk(Input::get('id'));

				if ($objModel !== null)
				{
					$objDca->activeRecord = $objModel;
				}
			}
		}

		// AJAX request
		if ($_POST && Environment::get('isAjaxRequest'))
		{
			$this->objAjax->executePostActions($objDca);
		}

		$objSession->set('filePickerRef', Environment::get('request'));
		$arrValues = array_filter(explode(',', Input::get('value')));

		// Call the load_callback
		if (\is_array($GLOBALS['TL_DCA'][$strTable]['fields'][$strField]['load_callback'] ?? null))
		{
			foreach ($GLOBALS['TL_DCA'][$strTable]['fields'][$strField]['load_callback'] as $callback)
			{
				if (\is_array($callback))
				{
					$this->import($callback[0]);
					$arrValues = $this->{$callback[0]}->{$callback[1]}($arrValues, $objDca);
				}
				elseif (\is_callable($callback))
				{
					$arrValues = $callback($arrValues, $objDca);
				}
			}
		}

		/** @var PageSelector $strClass */
		$strClass = $GLOBALS['BE_FFL']['pageSelector'] ?? null;

		/** @var PageSelector $objPageTree */
		$objPageTree = new $strClass($strClass::getAttributesFromDca($GLOBALS['TL_DCA'][$strTable]['fields'][$strField], $strField, $arrValues, $strField, $strTable, $objDca));

		/** @var AttributeBagInterface $objSessionBag */
		$objSessionBag = $objSession->getBag('contao_backend');

		$objTemplate->main = $objPageTree->generate();
		$objTemplate->theme = Backend::getTheme();
		$objTemplate->base = Environment::get('base');
		$objTemplate->language = $GLOBALS['TL_LANGUAGE'];
		$objTemplate->title = StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['pagepicker']);
		$objTemplate->host = Backend::getDecodedHostname();
		$objTemplate->charset = $container->getParameter('kernel.charset');
		$objTemplate->addSearch = true;
		$objTemplate->search = $GLOBALS['TL_LANG']['MSC']['search'];
		$objTemplate->value = $objSessionBag->get('page_selector_search');
		$objTemplate->breadcrumb = $GLOBALS['TL_DCA']['tl_page']['list']['sorting']['breadcrumb'] ?? null;

		$security = $container->get('security.helper');

		if ($security->isGranted(ContaoCorePermissions::USER_CAN_ACCESS_MODULE, 'page'))
		{
			$objTemplate->manager = $GLOBALS['TL_LANG']['MSC']['pageManager'];
			$objTemplate->managerHref = $container->get('router')->generate('contao_backend', array('do'=>'page', 'popup'=>'1'));
		}

		if (Input::get('switch') && $security->isGranted(ContaoCorePermissions::USER_CAN_ACCESS_MODULE, 'files'))
		{
			$objTemplate->switch = $GLOBALS['TL_LANG']['MSC']['filePicker'];
			$objTemplate->switchHref = str_replace('contao/page?', 'contao/file?', StringUtil::ampersand(Environment::get('request')));
		}

		return $objTemplate->getResponse();
	}
}

class_alias(BackendPage::class, 'BackendPage');
