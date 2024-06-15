<?

require_once 'lib.php';

print Post::renderAsHTML();
print "<p>".Post::renderAsXML()."</p>";
print "<p>".Post::renderAsJSON()."</p>";