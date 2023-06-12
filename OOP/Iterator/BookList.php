<?php

class BookList implements Countable, Iterator
{
    public int $offset = 0;

    public array $booklist;

    public function addBook(Book $book)
    {
        $this->booklist[] =$book;
    }

    public function current(): mixed
    {
        return $this->booklist[$this->offset];
    }

    public function next(): void
    {
        ++$this->offset;
    }

    public function key(): mixed
    {
        return $this->offset;
    }

    public function rewind(): void
    {
        $this->offset = 0;
    }

    public function count(): int
    {
        return count($this->booklist);
    }

    public function valid(): bool
    {
        return isset($this->booklist[$this->offset]);
    }

}