<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Quickjump4ward
 * A Contao-Extension to quickly access cartain backend-modules
 * through typing
 *
 * @copyright  4ward.media 2012 <http://www.4wardmedia.de>
 * @author     Christoph Wiechert <christoph.wiechert@4wardmedia.de>
 * @package    quickjump4ward
 * @license    LGPL
 * @filesource
 */


$GLOBALS['TL_DCA']['quickjump4ward']['fields']['Quickjump']['explanation'] = 'quickjump4ward';
$GLOBALS['TL_DCA']['quickjump4ward']['fields']['Quickjump']['label'][0] = 'Quickjump4ward - searchmodifier';

$GLOBALS['TL_LANG']['XPL']['quickjump4ward'] = array
(
	array('Hotkey', '<p>Use the shortcut <i>Ctrl-j</i> or <i>Ctrl-q</i> to focus the quickjump field.</p>
	<p>With <i>Tab</i> you can run the autocompletion again to select subobjects. If you have problem with the tab-key, you could also use the <i>right-arrow</i> key.</p>
	<p>The <i>return</i>-key switches to the choosen object.</p>'),
	array('<u>p:</u> Pages', 'The modifier <u>p:</u> searches onyl pages from the pagetree.'),
	array('<u>m:</u> Module', 'The modifier <u>m:</u> searches only in all modules.'),
	array('<u>a:</u> Article', 'The modifier <u>a:</u> searches only articles.'),
	array('<u>pl:</u> Pagelayout', 'The modifier <u>pl:</u> searches pagelayouts in the themes.'),
	array('<u>css:</u> Stylesheets', 'The modifier <u>css:</u> searches only stylesheets. You can also select catogries with 
	e.g. <i>css:layout:Navi</i> to select the layout-stylesheet with category-filter Navi.'),
    array('<u>f:</u> Function', 'The modifier <u>f:</u> lists functions like the database update.'),
    array('<u>new:</u> New element', 'The modifier <u>new:</u> lists themes. Choose one of the second completion (Module, Stylesheet or Pagelayout) to create a new element of this type.'),

);

