Warehouse Management System

Overview

This project implements a warehouse management system using PHP. It follows object-oriented programming (OOP) principles and adheres to best software design practices, including SOLID, DRY, KISS, and others.

Programming Principles Demonstrated

1. DRY (Don't Repeat Yourself)

The Money class encapsulates currency logic, avoiding redundant operations across multiple classes.

Example: Instead of recalculating the price format in different places, Money::getAmount() provides a single method for retrieving the price.

[Money](https://github.com/vt231sao/-software-design/blob/8636d632681c6f8dbe25e5d6cd40e663ecad5d4c/lab%201/src/Money.php#L15-L17)

2. KISS (Keep It Simple, Stupid)

Each class has a clear and concise purpose. The system avoids unnecessary complexity.

Example: The Warehouse class is responsible only for managing products, without additional functionality.

[WareHouse](https://github.com/vt231sao/-software-design/blob/8636d632681c6f8dbe25e5d6cd40e663ecad5d4c/lab%201/src/Warehouse.php#L4-L14)

3. SOLID Principles

S - Single Responsibility Principle (SRP)

Each class has a single reason to change:

Money handles monetary values.

Product defines product properties.

Warehouse manages product storage.

Reporting generates reports.

All Classes

O - Open/Closed Principle (OCP)

The Reporting class can be extended with new report types without modifying existing code.

[Reporting](https://github.com/vt231sao/-software-design/blob/8636d632681c6f8dbe25e5d6cd40e663ecad5d4c/lab%201/src/Reporting.php#L3-L10)

L - Liskov Substitution Principle (LSP)

The IInventory interface allows different implementations of warehouse storage without breaking the system.

[Warehouse](https://github.com/vt231sao/-software-design/blob/8636d632681c6f8dbe25e5d6cd40e663ecad5d4c/lab%201/src/Warehouse.php#L4)

I - Interface Segregation Principle (ISP)

Instead of one large interface, separate interfaces (IInventory, IReportable) ensure that classes only implement the methods they need.

`Interfaces`

D - Dependency Inversion Principle (DIP)

Reporting depends on the abstraction (IInventory), not a concrete Warehouse implementation.

[Reporting](https://github.com/vt231sao/-software-design/blob/8636d632681c6f8dbe25e5d6cd40e663ecad5d4c/lab%201/src/IInventory.php#L3)

4. YAGNI (You Ain’t Gonna Need It)

Only necessary functionality is implemented, avoiding premature optimization.

Example: No unnecessary methods or unused data structures exist in the system.

`/Product.php`

5. Composition Over Inheritance

Instead of using inheritance, the Product class contains a Money object to represent price.

[Product](https://github.com/vt231sao/-software-design/blob/8636d632681c6f8dbe25e5d6cd40e663ecad5d4c/lab%201/src/Product.php#L4-L11)

6. Program to Interfaces, not Implementations

The Reporting class interacts with IInventory, allowing flexibility in warehouse management.

`/Reporting.php`

7. Fail Fast

The Money class validates input immediately, preventing invalid monetary values.

[Money](https://github.com/vt231sao/-software-design/blob/8636d632681c6f8dbe25e5d6cd40e663ecad5d4c/lab%201/src/Money.php#L7-L13)

How to Run

Clone the repository.

Ensure PHP is installed.

Run:

`/test.php`

Author
Andrii Soroka
