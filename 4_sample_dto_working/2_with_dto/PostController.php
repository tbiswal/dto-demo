<?php

namespace sampleFourWithDTO;

include './PostModel.php';
include './PostDTO.php';

class PostController
{
    public function show($post)
    {
        $postDTO = new PostDTO(...$post);
        $postModel = new PostModel();
        $postModel->getPublishedDetails($postDTO);
    }
}

$post = [
    'title'    => 'Hello World',
    'body'     => 'This is a test post.',
    'authorId' => 5,
];

$postControllerObj = new PostController();
$postControllerObj->show($post);