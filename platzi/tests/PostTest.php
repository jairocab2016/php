<?php

class PostTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_gives_us_the_author_name()
    {
        $author= new \PlatziPHP\Author('email','1234','AUTOR_DE_PLATZI');

        $author->setName('Jairo','Cardozo');

        $post= new \PlatziPHP\Post($author, 'A Title', 'A post body');

        $this->assertEquals('by Jairo', $post->getAuthor());

    }
}