
<?php

	function getPage() {
		$pageSlug = 'home';

		if(isset ($_GET['page' ]) ){

		$pageSlug = $_GET['page'];

		}

	return $pageSlug;

	}


	function jsonDecode($path) {
		$jsonFile = file_get_contents("data/pages/$path.json");
		$jsonData = json_decode($jsonFile, true);
		return $jsonData;

	}


	function getProjectsData() {
		$jsonFile = file_get_contents("data/projectsData.json");
		$jsonData = json_decode($jsonFile, true);
		return $jsonData;
	}

    function getProject() {
        $projects = getProjectsData();

        $projectId = "";

        if(isset ($_GET['id']) ){
            $projectId = $_GET['id'];
        }

        foreach ($projects as $project) {
            if ($projectId == $project['id'] ) {
                return $project;
            }
        }



    }

    function gete4psData() {
        $jsonFile = file_get_contents("data/e4pData.json");
        $jsonData = json_decode($jsonFile, true);
        return $jsonData;
    }

    function getExercise() {
        // get the converted data into a variable

        $exercises = gete4psData(); 

        // get the id from the browser query

        $exerciseId = ""; 

        if(isset ($_GET['id']) ){
        // store the id in a variable
            $exerciseId = $_GET['id'];
        }



        // loop through the data for an id

        foreach($exercises as $exercise) {
            if ($exerciseId == $exercise['number'] ) {
                 // if id matches, return the data as e4p
                return $exercise;
        }
    }

       
    }

	function get_substack_articles($substack_url, $limit = 6, $tag = null)
{
    // Construct the RSS feed URL (Substack provides RSS feeds at /feed)
    $rss_url = rtrim($substack_url, '/') . '/feed';

    // Fetch the RSS feed
    $rss_content = file_get_contents($rss_url);
    if (!$rss_content) {
        return [];
    }

    // Parse the XML
    $xml = simplexml_load_string($rss_content);
    if (!$xml) {
        return [];
    }

    $articles = [];
    $count = 0;

    foreach ($xml->channel->item as $item) {
        if ($count >= $limit) break;

        // Get categories/tags for the item
        $item_tags = [];
        if ($item->category) {
            foreach ($item->category as $category) {
                $item_tags[] = strtolower((string)$category);
            }
        }

        // Skip if tag is specified and article doesn't have that tag
        if ($tag && !in_array(strtolower($tag), $item_tags)) {
            continue;
        }

        // Extract the first image from the content if available
        $content = (string)$item->children('content', true);
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content, $image);

        $articles[] = [
            'title' => htmlspecialchars((string)$item->title),
            'link' => htmlspecialchars((string)$item->link),
            'date' => htmlspecialchars(date('M j, Y', strtotime((string)$item->pubDate))),
            'image' => isset($image['src']) ? htmlspecialchars($image['src']) : '',
            'description' => htmlspecialchars(html_entity_decode(substr(strip_tags((string)$item->description), 0, 150) . '...')),
            'tags' => array_map('htmlspecialchars', $item_tags)
        ];

        $count++;
    }

    return $articles;
}

?>