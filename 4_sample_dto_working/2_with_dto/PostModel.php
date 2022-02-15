<?php

namespace sampleFourWithDTO;

class PostModel
{
    public function getPublishedDetails(PostDTO $post)
    {
        $title  = ucwords($post->title);
        $author = $this->findAuthorById($post->authorId);

        echo $title, "\n";
        echo htmlspecialchars($post->body), "\n";
        echo 'Published by - ' . $author['name'], "\n";
    }

    private function findAuthorById(int $authorId): array
    {
        $characters
                    = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomName = '';

        for ($i = 0; $i < $authorId; $i++) {
            $index      = rand(0, strlen($characters) - 1);
            $randomName .= $characters[$index];
        }

        return array(
            'name' => $randomName,
            'age'  => rand(18, 90)
        );
    }
}