# Prototype Design Pattern

On the Prototype Design Pattern we create new instances of a class by cloning an already existing instance. It is usefull when we don't want to use the `new` operator, because we turn one instance of a class into the breeder of new instances.

We avoid hard wiring the class of object to create on each `new` expression.

## How it is done?

You first create an abstract class to be the Prototype, it must have a clone method. The clone method will create a copy of the classes implementing the prototype.

With the implementations having a `clone()` we can create new objects from the ones implementing the prorotype without calling `new` and with the same properties already set on the original object.

## Our Example

For this example we will build ourselves a `brewery.php`. We have a BeerPrototype with everything a beer needs (name and type) and a `clone()` function. Next we create two classes to implement our prototype, `IPABeer.php` and `LagerBeer.php`.

Now we instantiate our beers on the `brewery.php` file and use `clone()` everytime we need a new beer.
