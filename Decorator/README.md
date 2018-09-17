# Decorator Design Pattern

Suppose you have a class that needs new functionality while running, like adding a rocket launcher to a chainsaw giving the chainsaw rocket launching abilities. Inheritance won't solve this problem because you need to update the chainsaw object on the fly, not on compile time. That is the case for the Decorator Parent!

## How it is done?

You can think on it like putting the base object inside a new object, inside another object, and so on until you have an object with a lot of new functionality, but still the same type as the base one.

First, we create an interface that will be implemented by the base object and its decorators. We need this because it doesn't matter if we are using zero, one or 20.000 decorators we still need to have the same object type. Second, we create the base object implementing the interface.

The next step is the creation of the decorators, they will implement the same interface as the base object, but  when you call a method on the decorator, it will do its thing and call the method from base class. In fact, every decorator receives another object of its type and calls its method when it runs, passing the calls along a chain of decorators (wrappers).

## Our Example

As interface we have `Influencer` it has a single method `sayHello()` and it will be implemented both on our base class and its decorators. The base class for this example is the `Blogger` (I know, not all influencers are bloggers). The decorators are `Instagrammer` and `Youtuber`, each one allows our blogger to post on a new network while still blogging.

The file `LetsInfluence.php` has the code to run the example. We create a new `Influencer` with two decorators and call the `sayHello()` method. You can see on the output that our influencer will post on his blog, Instagram and Youtube.