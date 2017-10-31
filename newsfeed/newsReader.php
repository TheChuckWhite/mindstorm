<?php


$supportedLanguages = ['en', 'it'];

if(!defined('IN_PAGE')){

    if(!isset($_GET['lang']) || !in_array($_GET['lang'], $supportedLanguages)) die('Uh oh. Something went wrong! :(');

    // Enforce the reader to interpret the data as XML, rather than HTML content
    header('Content-type: application/xml');

    // Reference to the folder that stores the news items
    $newsPath = getcwd() . "/" . $_GET['lang'];

    // Grab the news items for the given language, sorted by the modified date
    $newsItems = array_diff(scandir($newsPath), ['.', '..']);

    // Display the header of the file
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
          <rss version=\"2.0\">";

    foreach($newsItems as $newsItem){
        $file = $newsPath . "/". $newsItem;

        $newsContent = file_get_contents($file);
        // only grab the text between the newcontent tags
        $startsAt = strpos($newsContent, "<newsitem>") + strlen("<newsitem>");
        $endsAt = strpos($newsContent, "</newsitem>", $startsAt);
        $result = substr($newsContent, $startsAt, $endsAt - $startsAt);

        echo "<newsitem>$result</newsitem>";
    }

    // Display the footer of the file
    echo "</rss>";

    // Exit the script, since this is all the user wanted to do :)
    exit;

}
// Reference to the folder that stores the news items
$newsPath = getcwd() . "/newsfeed/" . $lang;

// Grab the news items for the given language
$newsItems = scandir($newsPath);

// Create an array where we will store the news-objects in
$newsItemArray = [];

// Loop over the news items
foreach($newsItems as $newsItem) {
    // Skip the . and the .. directory elements
    if ($newsItem == "." || $newsItem == "..") continue;

    // Create the full path to the file
    $file = $newsPath . "/" . $newsItem;

    // Extract the information from this current news file
    $contents = simplexml_load_file($file);

    // Extract just the required bits of the XML file, which is the <newscontent> part
    $newsContents = $contents->newsitem;

    // Add the news content to the newsItemArray
    $newsItemArray[] = $newsContents;
}

return $newsItemArray;
