<?php

class Order
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var DateTimeImmutable
     */
    private $date;

    /**
     * Order constructor.
     * @param int $id
     * @param DateTimeImmutable $date
     */
    public function __construct(int $id, DateTimeImmutable $date)
    {
        $this->id = $id;
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }

    /**
     * @param DateTimeImmutable $date
     */
    public function setDate(DateTimeImmutable $date): void
    {
        $this->date = $date;
    }
}