<?
class Post {
    static $title = "Harry Potter and the Philosopher's Stone";
   static $image = "https://upload.wikimedia.org/wikipedia/en/6/6b/Harry_Potter_and_the_Philosopher%27s_Stone_Book_Cover.jpg?20191031103457";
    static $author = 'J. K. Rowling';
    static $publishedAt = '1997';
    static $Approximate_sales = '120 million';


    static function renderAsHTML() {
        return "<div>
                    <h1>".static::$title."</h1>
                   <img src=".static::$image.">
                    <h2>Author".static::$author."</p>
                    <h2>Published at".static::$publishedAt."</h2>
                    <h2>Approximate_sales".static::$Approximate_sales."</h2>
                </div>";
    }


    static function renderAsXML() {
        return "<post>
                    <title>".static::$title."</title>
                    <image>".static::$image."</image>
                    <author>".static::$author."</author>
                    <publishedAt>".static::$publishedAt."</publishedAt>
                    <status>".static::$Approximate_sales."</status>
                </post>";
    }


    static function renderAsJSON() {
        return json_encode([
            'title' => static::$title,
            'image' => static::$image,
            'author' => static::$author,
            'publishedAt' => static::$publishedAt,
            'Approximate_sales' => static::$Approximate_sales,
        ]);
    }
}