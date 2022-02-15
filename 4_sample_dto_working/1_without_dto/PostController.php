<?php

namespace sampleFourWithoutDTO;

include './PostModel.php';

class PostController
{
    public function show($post)
    {
        $postModel = new PostModel();
        $postModel->getPublishedDetails($post);
    }
}

$post = [
    'title'    => 'Hello World',
    'body'     => 'This is a test post.',
    'authorId' => 5,
];

$postControllerObj = new PostController();
$postControllerObj->show($post);