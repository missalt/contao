<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_MIME'] = array
(
	// Application files
	'xl'    => array('application/excel', 'iconXL.svg'),
	'xls'   => array('application/excel', 'iconXLS.svg'),
	'xlsx'  => array('application/excel', 'iconXLSX.svg'),
	'hqx'   => array('application/mac-binhex40', 'iconHQX.svg'),
	'cpt'   => array('application/mac-compactpro', 'iconCPT.svg'),
	'bin'   => array('application/macbinary', 'iconBIN.svg'),
	'doc'   => array('application/msword', 'iconDOC.svg'),
	'docx'  => array('application/msword', 'iconDOCX.svg'),
	'word'  => array('application/msword', 'iconWORD.svg'),
	'cto'   => array('application/octet-stream', 'iconCTO.svg'),
	'dms'   => array('application/octet-stream', 'iconDMS.svg'),
	'lha'   => array('application/octet-stream', 'iconLHA.svg'),
	'lzh'   => array('application/octet-stream', 'iconLZH.svg'),
	'exe'   => array('application/octet-stream', 'iconEXE.svg'),
	'class' => array('application/octet-stream', 'iconCLASS.svg'),
	'so'    => array('application/octet-stream', 'iconSO.svg'),
	'sea'   => array('application/octet-stream', 'iconSEA.svg'),
	'dll'   => array('application/octet-stream', 'iconDLL.svg'),
	'oda'   => array('application/oda', 'iconODA.svg'),
	'pdf'   => array('application/pdf', 'iconPDF.svg'),
	'ai'    => array('application/postscript', 'iconAI.svg'),
	'eps'   => array('application/postscript', 'iconEPS.svg'),
	'ps'    => array('application/postscript', 'iconPS.svg'),
	'pps'   => array('application/powerpoint', 'iconPPS.svg'),
	'ppt'   => array('application/powerpoint', 'iconPPT.svg'),
	'pptx'  => array('application/powerpoint', 'iconPPTX.svg'),
	'smi'   => array('application/smil', 'iconSMI.svg'),
	'smil'  => array('application/smil', 'iconSMIL.svg'),
	'mif'   => array('application/vnd.mif', 'iconMIF.svg'),
	'odc'   => array('application/vnd.oasis.opendocument.chart', 'iconODC.svg'),
	'odf'   => array('application/vnd.oasis.opendocument.formula', 'iconODF.svg'),
	'odg'   => array('application/vnd.oasis.opendocument.graphics', 'iconODG.svg'),
	'odi'   => array('application/vnd.oasis.opendocument.image', 'iconODI.svg'),
	'odp'   => array('application/vnd.oasis.opendocument.presentation', 'iconODP.svg'),
	'ods'   => array('application/vnd.oasis.opendocument.spreadsheet', 'iconODS.svg'),
	'odt'   => array('application/vnd.oasis.opendocument.text', 'iconODT.svg'),
	'wbxml' => array('application/wbxml', 'iconWBXML.svg'),
	'wmlc'  => array('application/wmlc', 'iconWMLC.svg'),
	'dmg'   => array('application/x-apple-diskimage', 'iconDMG.svg'),
	'dcr'   => array('application/x-director', 'iconDCR.svg'),
	'dir'   => array('application/x-director', 'iconDIR.svg'),
	'dxr'   => array('application/x-director', 'iconDXR.svg'),
	'dvi'   => array('application/x-dvi', 'iconDVI.svg'),
	'gtar'  => array('application/x-gtar', 'iconGTAR.svg'),
	'inc'   => array('application/x-httpd-php', 'iconINC.svg'),
	'php'   => array('application/x-httpd-php', 'iconPHP.svg'),
	'php3'  => array('application/x-httpd-php', 'iconPHP3.svg'),
	'php4'  => array('application/x-httpd-php', 'iconPHP4.svg'),
	'php5'  => array('application/x-httpd-php', 'iconPHP5.svg'),
	'phtml' => array('application/x-httpd-php', 'iconPHTML.svg'),
	'phps'  => array('application/x-httpd-php-source', 'iconPHPS.svg'),
	'js'    => array('application/x-javascript', 'iconJS.svg'),
	'psd'   => array('application/x-photoshop', 'iconPSD.svg'),
	'rar'   => array('application/x-rar', 'iconRAR.svg'),
	'fla'   => array('application/x-shockwave-flash', 'iconFLA.svg'),
	'swf'   => array('application/x-shockwave-flash', 'iconSWF.svg'),
	'sit'   => array('application/x-stuffit', 'iconSIT.svg'),
	'tar'   => array('application/x-tar', 'iconTAR.svg'),
	'tgz'   => array('application/x-tar', 'iconTGZ.svg'),
	'xhtml' => array('application/xhtml+xml', 'iconXHTML.svg'),
	'xht'   => array('application/xhtml+xml', 'iconXHT.svg'),
	'zip'   => array('application/zip', 'iconZIP.svg'),

	// Audio files
	'm4a'   => array('audio/x-m4a', 'iconM4A.svg'),
	'mp3'   => array('audio/mpeg', 'iconMP3.svg'),
	'wma'   => array('audio/wma', 'iconWMA.svg'),
	'mpeg'  => array('audio/mpeg', 'iconMPEG.svg'),
	'wav'   => array('audio/wav', 'iconWAV.svg'),
	'ogg'   => array('audio/ogg', 'iconOGG.svg'),
	'mid'   => array('audio/midi', 'iconMID.svg'),
	'midi'  => array('audio/midi', 'iconMIDI.svg'),
	'aif'   => array('audio/x-aiff', 'iconAIF.svg'),
	'aiff'  => array('audio/x-aiff', 'iconAIFF.svg'),
	'aifc'  => array('audio/x-aiff', 'iconAIFC.svg'),
	'ram'   => array('audio/x-pn-realaudio', 'iconRAM.svg'),
	'rm'    => array('audio/x-pn-realaudio', 'iconRM.svg'),
	'rpm'   => array('audio/x-pn-realaudio-plugin', 'iconRPM.svg'),
	'ra'    => array('audio/x-realaudio', 'iconRA.svg'),

	// Images
	'bmp'   => array('image/bmp', 'iconBMP.svg'),
	'gif'   => array('image/gif', 'iconGIF.svg'),
	'jpeg'  => array('image/jpeg', 'iconJPEG.svg'),
	'jpg'   => array('image/jpeg', 'iconJPG.svg'),
	'jpe'   => array('image/jpeg', 'iconJPE.svg'),
	'png'   => array('image/png', 'iconPNG.svg'),
	'tiff'  => array('image/tiff', 'iconTIFF.svg'),
	'tif'   => array('image/tiff', 'iconTIF.svg'),
	'svg'   => array('image/svg+xml', 'iconSVG.svg'),
	'svgz'  => array('image/svg+xml', 'iconSVGZ.svg'),
	'webp'  => array('image/webp', 'iconWEBP.svg'),
	'avif'  => array('image/avif', 'iconAVIF.svg'),
	'heic'  => array('image/heic', 'iconHEIC.svg'),
	'jxl'  => array('image/jxl', 'iconJXL.svg'),

	// Mailbox files
	'eml'   => array('message/rfc822', 'iconEML.svg'),

	// Text files
	'asp'   => array('text/asp', 'iconASP.svg'),
	'css'   => array('text/css', 'iconCSS.svg'),
	'scss'  => array('text/x-scss', 'iconSCSS.svg'),
	'less'  => array('text/x-less', 'iconLESS.svg'),
	'html'  => array('text/html', 'iconHTML.svg'),
	'htm'   => array('text/html', 'iconHTM.svg'),
	'md'    => array('text/markdown', 'iconMD.svg'),
	'shtml' => array('text/html', 'iconSHTML.svg'),
	'txt'   => array('text/plain', 'iconTXT.svg'),
	'text'  => array('text/plain', 'iconTEXT.svg'),
	'log'   => array('text/plain', 'iconLOG.svg'),
	'rtx'   => array('text/richtext', 'iconRTX.svg'),
	'rtf'   => array('text/rtf', 'iconRTF.svg'),
	'xml'   => array('text/xml', 'iconXML.svg'),
	'xsl'   => array('text/xml', 'iconXSL.svg'),
	'csv'   => array('text/csv', 'iconCSV.svg'),

	// Videos
	'mp4'   => array('video/mp4', 'iconMP4.svg'),
	'm4v'   => array('video/x-m4v', 'iconM4V.svg'),
	'mov'   => array('video/quicktime', 'iconMOV.svg'),
	'wmv'   => array('video/wmv', 'iconWMV.svg'),
	'webm'  => array('video/webm', 'iconWEBM.svg'),
	'qt'    => array('video/quicktime', 'iconQT.svg'),
	'rv'    => array('video/vnd.rn-realvideo', 'iconRV.svg'),
	'avi'   => array('video/x-msvideo', 'iconAVI.svg'),
	'ogv'   => array('video/ogg', 'iconOGV.svg'),
	'movie' => array('video/x-sgi-movie', 'iconMOVIE.svg')
);