<?php

class TextDocument {
    private string $content = "";

    public function write(string $text): void {
        $this->content .= $text;
    }

    public function getContent(): string {
        return $this->content;
    }

    public function setContent(string $content): void {
        $this->content = $content;
    }
}
