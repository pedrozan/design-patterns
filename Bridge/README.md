# Factory Design Pattern

The Bridge desegin pattern is used when you want the abstraction and implementation to vary independently. The ideia is to create a bridge between the functionality from concrete classes and interface implementer classes.

## How it is done?

We start with an interface, `LaunchApi`, that will declare the `launch()` function. Then we will implement the RocketApi on the implementer classes (`RedEngine` and `BlueEngine`).

Now, we will use the `LaunchApi` on an abstract class `Rocket`. Finally we will have a concrete class that will implement the `Rocket` abstract class, we call it the `FullRocket`.

Everything works together when we run `launchingBridge` on a PHP terminal.

As a sidenote, I had to ask for help on Stack Overflow to make it work. Was a silly mistake promptly answered there. Here is the [link to my shame](https://stackoverflow.com/questions/50935747/in-php-how-to-pass-a-class-instance-to-another-classs-constructor).
