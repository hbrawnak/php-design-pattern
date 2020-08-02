# PHP Design Pattern

### What is Design Pattern?

To write reusable code is important. Design Pattern helps you to write reusable code. 

Christopher Alexander Says, "Each pattern describes a problem which occurs over and over again in our environment, and then describes the core of the solution to that problem, in such a way that you can use this solution a million times over, without ever doing it the same way twice"


#### 1.Decorator
Attach additional responsibilities to an object dynamically. Decorators provide a flexible alternative to subclass for extending functionality. [find here detail with example](https://github.com/hbrawnak/php-design-pattern/blob/master/Decorator/index.php#L4)

#### 2.Adapter
Covert the interface of a class into another interface clients expects. Adapter lets classes work together that couldn't otherwise because of incompatible interfaces. [example](https://github.com/hbrawnak/php-design-pattern/blob/master/Adapter/index.php#L4)
##### Applicability:
   * You want to use and existing class, and its interface does not match the one your need.
   * You want to create a reusable class the cooperates with unrelated or unforeseen classes, that is, classes that don't necessarily have compatible interfaces.
   * You need to use several existing subclasses, but it's impractical to adapt their interface by subclassing every one. An object adapter can adapt the interface of its parent class. (object adapter only)
    