<?php

require_once 'LightElementNode.php';
require_once 'LightTextNode.php';

class LightNodeIterator implements Iterator {
    private array $nodes = [];
    private int $position = 0;

    public function __construct(LightNode $root, string $mode = 'DFS') {
        if (!in_array($mode, ['DFS', 'BFS'])) {
            throw new InvalidArgumentException("Невідомий режим обходу: $mode");
        }
        $this->traverse($root, $mode);
    }

    private function traverse(LightNode $node, string $mode) {
        if ($mode === 'DFS') {
            $this->depthFirst($node);
        } else {
            $this->breadthFirst($node);
        }
    }

    private function depthFirst(LightNode $node): void {
        $this->nodes[] = $node;
        if ($node instanceof LightElementNode) {
            foreach ($node->getChildren() as $child) {
                $this->depthFirst($child);
            }
        }
    }

    private function breadthFirst(LightNode $node): void {
        $queue = [$node];
        while (!empty($queue)) {
            $current = array_shift($queue);
            $this->nodes[] = $current;
            if ($current instanceof LightElementNode) {
                foreach ($current->getChildren() as $child) {
                    $queue[] = $child;
                }
            }
        }
    }

    public function current(): mixed {
        return $this->nodes[$this->position];
    }

    public function key(): int {
        return $this->position;
    }

    public function next(): void {
        $this->position++;
    }

    public function rewind(): void {
        $this->position = 0;
    }

    public function valid(): bool {
        return isset($this->nodes[$this->position]);
    }
}
