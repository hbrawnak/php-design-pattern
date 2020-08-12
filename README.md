# PHP Design Pattern

### What is Design Pattern?

To write reusable code is important. Design Pattern helps you to write reusable code. 

Christopher Alexander Says, "Each pattern describes a problem which occurs over and over again in our environment, and then describes the core of the solution to that problem, in such a way that you can use this solution a million times over, without ever doing it the same way twice"


#### 1.Decorator
Attach additional responsibilities to an object dynamically. Decorators provide a flexible alternative to subclass for extending functionality. [example](https://github.com/hbrawnak/php-design-pattern/blob/master/Decorator/index.php#L4)

##### Applicability:
   * To add responsibilities to individual objects dynamically and transparently, that is, without affecting other objects.
   * For responsibilities that can be withdrawn.
   * When extension by subclassing is impractical. Sometimes many independent extensions are possible and would produce an explosion of subclasses to support every combination. Or a class definition may be hidden or otherwise unavailable for subclassing.

#### 2.Adapter
Covert the interface of a class into another interface clients expects. Adapter lets classes work together that couldn't otherwise because of incompatible interfaces. [example](https://github.com/hbrawnak/php-design-pattern/blob/master/Adapter/index.php#L4)
##### Applicability:
   * You want to use and existing class, and its interface does not match the one your need.
   * You want to create a reusable class the cooperates with unrelated or unforeseen classes, that is, classes that don't necessarily have compatible interfaces.
   * You need to use several existing subclasses, but it's impractical to adapt their interface by subclassing every one. An object adapter can adapt the interface of its parent class. (object adapter only)
  
#### 3.Template Method
Define the skeleton of an algorithm in an operation, deferring some steps to subclasses. Template Method lets subclasses redefine certain steps of an algorithm without changing the algorithm's structure. [example](https://github.com/hbrawnak/php-design-pattern/blob/master/TemplateMethod/index.php#L4)

##### Applicability:
  * To implement the invariant parts of an algorithm once and leave it up to subclasses to implement the behavior that can vary.
  * When the commin behavior among subclasses should be factored and localized in a common class to avoid code duplication. This is a good example of "refactoring to generalize" as described by Opdyke and Johnson. You first identify the differences in the existing code and then separate the differences into new operations. Finally, you replace the differing code with a template method that calls one these new operations.
  * To control subclasses extensions. You can define a template method that calls "hook" operations at specific points, thereby permitting extensions only at those points.

 #### 4.Strategy
 Define a family of algorithm, encapsulate each one, and make them interchangeable. Strategy lets the algorithm vary independently from clients that use it. [example](https://github.com/hbrawnak/php-design-pattern/blob/master/Strategy/index.php#L4)
 
 ##### Applicability:
 Use the Strategy pattern when
 
  * Many related classes differ only in their behavior. Strategies provide a way to configure a class with one of many behaviors.
  
  * You need different variant of an algorithm. For example, you might need define algorithms reflecting different space/time trade-offs. Strategies can be used when these variants are implemented as a class hierarchy of algorithm.
  
  * An algorithm uses data that clients shouldn't know about. Use the strategy pattern to avoid exposing complex, algorithm-specific data structures.
  
  * A class defines many behaviors, and these appear as multiple conditional statements in its operations. Instead of many conditionals, move related conditional branches into their own Strategy class.
  
 
  #### 5.Chain of Responsibility
  Avoid coupling the sender of a request to its receiver by giving more than one object a chance to handle the request. Chain the receiving objects and pass request along the chain until an object handles it. [example](https://github.com/hbrawnak/php-design-pattern/blob/master/ChainOfResponsibility/index.php#L3)
 
##### Applicability:
Use the Chain of Responsibility pattern when
 
  * More than one object may handle a request, and the handler isn't known a priori. The handler should be ascertained automatically.
  
  * You want to issue a request to one of several objects without specifying the receiver explicitly.
  
  * The set of objects that can handle a request should be specified dynamically. 
  
  --------
 Sources:
 - [Book:](https://www.amazon.com/Design-Patterns-Elements-Reusable-Object-Oriented/dp/0201633612) Design Patterns
 Element of Reusable Object-Oriented Software
 - [Laracasts](https://laracasts.com)
 
 