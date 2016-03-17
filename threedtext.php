<?php
/*
* @3D Text Shadow
* Created By Juraj Vysvader
* https://www.unisoftdev.tech/
* @license http://www.gnu.org/licenses/lgpl-3.0.en.html GNU/LGPL V3
* @Copyright (C) 2016 Juraj Vysvader. All rights reserved.
*/

defined('_JEXEC') or die;

class plgContentThreedtext extends JPlugin
{		

	public function onContentPrepare($context, &$row, &$params, $page = 0)
		{
				$document = JFactory::getDocument();
				$document->addStyleSheet(JURI::base(). "plugins/content/threedtext/threedtext.css");
				$starting_text = str_replace;
				$row->text = $starting_text("{end}","</span>",$row->text);
				$row->text = $starting_text("{green}","<span class='dgreen'>",$row->text);
				$row->text = $starting_text("{blue}","<span class='dblue'>",$row->text);
				$row->text = $starting_text("{red}","<span class='dred'>",$row->text);
				$row->text = $starting_text("{white}","<span class='dwhite'>",$row->text);
				$row->text = $starting_text("{black}","<span class='dblack'>",$row->text);
				$row->text = $starting_text("{glasses}","<span class='dglasses'>",$row->text);
				$row->text = $starting_text("{navy}","<span class='dnavy'>",$row->text);
				$row->text = $starting_text("{neon}","<span class='dneon'>",$row->text);
		}
		
		
}

?>
