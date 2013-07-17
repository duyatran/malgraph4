<?php
class IndexControllerIndexModule extends AbstractControllerModule
{
	public static function getUrlParts()
	{
		return ['', 'index'];
	}

	public static function work(&$viewContext)
	{
		$viewContext->viewName = 'index';
		$viewContext->meta->styles []= '/media/css/index/index.css';
		$viewContext->meta->scripts []= '/media/js/index/index.js';
	}
}