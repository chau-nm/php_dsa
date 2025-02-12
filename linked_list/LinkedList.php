<?php

namespace app\linked_list;

require "./LinkedListNode.php";

class LinkedList
{
    private LinkedListNode|null $head;
    private int $size;

    public function __construct()
    {
        $this->head = null;
        $this->size = 0;
    }

    public function toString(): string
    {
        $result = "[";
        $current = $this->head;
        while ($current != null) {
            $result .= $current->getValue() . (is_null($current->getNext()) ? "" : ", ");
            $current = $current->getNext();
        }
        $result .= "]";
        return $result;
    }

    public function add(mixed $value): void
    {
        $this->size++;
        if (!isset($this->head)) {
            $this->head = new LinkedListNode($value);
            return;
        }
        $current = $this->head;
        while ($current->getNext() != null) {
            $current = $current->getNext();
        }
        $current->setNext(new LinkedListNode($value));
    }

    public function peek(): mixed
    {
        if ($this->head == null) {
            return null;
        }
        return $this->head->getValue();
    }

    public function poll(): mixed
    {
        if ($this->size > 0) $this->size--;
        $value = $this->peek();
        if ($value != null) {
            $this->head = $this->head->getNext();
        }
        return $value;
    }

    public function isEmpty(): bool
    {
        return $this->size === 0;
    }

    public function size()
    {
        return $this->size;
    }
}

$linkedList = new LinkedList();
$linkedList->add(new LinkedListNode(2, null));
$linkedList->add(new LinkedListNode(1, null));
$linkedList->add(new LinkedListNode(3, null));
$linkedList->add(new LinkedListNode(4, null));
echo $linkedList->poll();
echo $linkedList->peek();
echo $linkedList->toString();
echo $linkedList->size();
echo $linkedList->isEmpty() ? null : $linkedList->peek();
