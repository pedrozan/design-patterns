# Factory Design Pattern

This pattern is to be used when you can only have one instance of the object. Things like database connection or logging are examples of use cases for singletons.

## How it is done?

We create a Singleton class with a method `getInstance()` that will return the instance of the class. The constructor must be protected in order to prevent instantiation.

You can check our singleton on the file RingSingleton.php, note that removing the `whichRing()` function leaves you with a blanck singleton class.