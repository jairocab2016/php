<?php

namespace PlatziPHP;

use Illuminate\Support\Collection;

class FakeDatabase
{
    public function posts()
    {
        $author= new Author(
            'jairo@gmail.com',
            '1234',
            'AUTOR_DE_PLATZI'
        );

        $author->setName('Jairo','Cardozo');

        return new Collection([
            1 => new Post($author, 'Post #1', 'This is a first post'),
            2 => new Post($author, 'Post #2', 'This is a second post'),
            3 => new Post($author, 'Post #3', 'This is a third post'),
            4 => new Post($author, 'Post #4', 'This is a fourth post'),
        ]);

    }
}