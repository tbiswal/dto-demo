<?php

namespace sampleFourWithDTO;

class PostDTO
{
    public string $title;
    public string $body;
    public string $authorId;

    public function __construct(
        string $title,
        string $body,
        string $authorId
    ) {
        $this->title    = $title;
        $this->body     = $body;
        $this->authorId = $authorId;
    }
}

// In Php 8
/*
class PostDTO
{
    public function __construct(
        public string $title,
        public string $body,
        public string $authorId
    ) {
    }
}
*/