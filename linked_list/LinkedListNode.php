<?php

namespace app\linked_list;

class LinkedListNode
{
    private mixed $value;
    private ?LinkedListNode $next;

    public function __construct(mixed $value, ?LinkedListNode $next = null)
    {
        $this->value = $value;
        $this->next = $next;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }

    public function getNext(): ?LinkedListNode
    {
        return $this->next;
    }

    public function setValue(mixed $value): void
    {
        $this->value = $value;
    }

    public function setNext(?LinkedListNode $next): void
    {
        $this->next = $next;
    }

    public function __toString(): string
    {
        return strval($this->value);
    }
}