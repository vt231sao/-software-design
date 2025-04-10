<?php

interface TextReader {
    public function read(string $filename): array;
}
