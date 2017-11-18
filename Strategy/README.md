# Strategy Design Pattern

The Strategy design pattern is a way to separate algorithms from 
the objects that use them. You can have multiple algorithms and
decide which one to use at runtime.

## How it is done?

First we ceate an interface for our algorithms. We need this interface
to make sure the algorithms are interchangeable.

The second step is to create all algorithms we want to use. They all
will be implementing the algorithm interface, so we know they are
interchangeable.

A base class for the algorithm users is created, this way we only need
to write the function to choose algorithms once. Every user will inherit
this base class and will have the algorithm chosen when needed.