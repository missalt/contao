<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

use Contao\Backend;
use Contao\BackendUser;
use Contao\DataContainer;
use Contao\DC_Table;
use Contao\Image;

$GLOBALS['TL_DCA']['tl_member_group'] = array
(
	// Config
	'config' => array
	(
		'dataContainer'               => DC_Table::class,
		'enableVersioning'            => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary',
				'disable,start,stop' => 'index'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => DataContainer::MODE_SORTED,
			'fields'                  => array('name'),
			'flag'                    => DataContainer::SORT_INITIAL_LETTER_ASC,
			'panelLayout'             => 'filter;search,limit',
		),
		'label' => array
		(
			'fields'                  => array('name'),
			'format'                  => '%s',
			'label_callback'          => array('tl_member_group', 'addIcon')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'href'                => 'act=edit',
				'icon'                => 'edit.svg'
			),
			'copy' => array
			(
				'href'                => 'act=copy',
				'icon'                => 'copy.svg'
			),
			'delete' => array
			(
				'href'                => 'act=delete',
				'icon'                => 'delete.svg',
				'attributes'          => 'onclick="if(!confirm(\'' . ($GLOBALS['TL_LANG']['MSC']['deleteConfirm'] ?? null) . '\'))return false;Backend.getScrollOffset()"'
			),
			'toggle' => array
			(
				'href'                => 'act=toggle&amp;field=disable',
				'icon'                => 'visible.svg',
				'reverse'             => true
			),
			'show' => array
			(
				'href'                => 'act=show',
				'icon'                => 'show.svg'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('redirect'),
		'default'                     => '{title_legend},name;{redirect_legend:hide},redirect;{account_legend},disable,start,stop',
	),

	// Subpalettes
	'subpalettes' => array
	(
		'redirect'                    => 'jumpTo',
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default 0"
		),
		'name' => array
		(
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'unique'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'redirect' => array
		(
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'jumpTo' => array
		(
			'exclude'                 => true,
			'inputType'               => 'pageTree',
			'foreignKey'              => 'tl_page.title',
			'eval'                    => array('mandatory'=>true, 'fieldType'=>'radio', 'tl_class'=>'clr'),
			'sql'                     => "int(10) unsigned NOT NULL default 0",
			'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
		),
		'disable' => array
		(
			'exclude'                 => true,
			'toggle'                  => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'start' => array
		(
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(10) NOT NULL default ''"
		),
		'stop' => array
		(
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(10) NOT NULL default ''"
		)
	)
);

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_member_group extends Backend
{
	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import(BackendUser::class, 'User');
	}

	/**
	 * Add an image to each record
	 *
	 * @param array  $row
	 * @param string $label
	 *
	 * @return string
	 */
	public function addIcon($row, $label)
	{
		$image = 'mgroup';
		$disabled = ($row['start'] !== '' && $row['start'] > time()) || ($row['stop'] !== '' && $row['stop'] <= time());

		if ($disabled || $row['disable'])
		{
			$image .= '_';
		}

		return sprintf(
			'<div class="list_icon" style="background-image:url(\'%s\')" data-icon="%s" data-icon-disabled="%s">%s</div>',
			Image::getPath($image),
			Image::getPath($disabled ? $image : rtrim($image, '_')),
			Image::getPath(rtrim($image, '_') . '_'),
			$label
		);
	}
}
