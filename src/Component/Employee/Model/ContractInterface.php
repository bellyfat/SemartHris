<?php

namespace KejawenLab\Application\SemartHris\Component\Employee\Model;

use KejawenLab\Application\SemartHris\Component\Employee\ContractType;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@kejawenlab.com>
 */
interface ContractInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return null|EmployeeInterface
     */
    public function getEmployee(): ? EmployeeInterface;

    /**
     * @param EmployeeInterface $employee
     */
    public function setEmployee(EmployeeInterface $employee = null): void;

    /**
     * @return \DateTime
     */
    public function getStartDate(): \DateTime;

    /**
     * @return \DateTime|null
     */
    public function getEndDate(): ? \DateTime;

    /**
     * @return string
     */
    public function getLetterNumber(): string;

    /**
     * @return string
     *
     * @see ContractType
     */
    public function getType(): string;

    /**
     * @return null|string
     */
    public function getDescription(): ? string;

    /**
     * @param string $description
     */
    public function setDescription(string $description): void;

    /**
     * @return bool
     */
    public function isActive(): bool;
}
