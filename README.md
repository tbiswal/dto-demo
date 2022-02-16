# What is Data Transfer Object?
As the name suggests, a DTO is an object made to transfer data. It's a really simple class that holds data.

Whenever two parts of a software system want to communicate they need to exchange data. Data Transfer Objects (DTOs) are all about how this data is represented.

A data transfer object (DTO) is an object that carries data between processes. You can use this technique to facilitate communication between two systems (like an API and your server) without potentially exposing sensitive information.

# Advantages OF DTO
Instead of an associative array, we have an object that holds type-hinted properties.

In the case of an array, you can only tell what keys it has if you dig into the source code.

We saw an example with a few lines of code, but imagine a 10 years old legacy application where a function contains 300 (or 3000) lines of code. What would you have in that situation? Random associative arrays or DTOs? I would go with DTOs.

# Code samples
I have illustrated few examples using associative array and DTO step by step. So, please go through samples serially.

# Common Mistakes
The first mistake is to create different DTOs for every occasion. That will increase the number of classes and mappers we need to maintain. Try to keep them concise and evaluate the trade-offs of adding one or reusing an existing one.

We also want to avoid trying to use a single class for many scenarios. This practice may lead to big contracts where many attributes are frequently not used.

Another common mistake is to add business logic to those classes, which should not happen. The purpose of the pattern is to optimize the data transfer and the structure of the contracts.

# Reference
* https://www.baeldung.com/java-dto-pattern
* https://laravel-news.com/data-transfer-object-v3-php-8
* https://github.com/spatie/data-transfer-object
* https://enroute.osgi.org/FAQ/420-dtos.html
* “Front Line Php” & "Test Driven API & Laravel & Pest" Book
