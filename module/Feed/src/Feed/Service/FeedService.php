<?php

namespace Feed\Service;

class FeedService
{
	public function getFeeds()
	{
		return $rss = simplexml_load_file("http://globoesporte.globo.com/Esportes/Rss/0,,AS0-9862,00.xml");
	}
}