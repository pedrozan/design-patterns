# Composite Design Pattern

When you need a list of objects that may contain another list of the same objects, that is the Design Pattern to look for. For instance, you are building a menu and some items may be menus or directories that contains files that can be directories or rock bands that contain members that can be rock bands or ... you got it.

The idea is to have a base abstract class and any of its inheritors might be a list of inheritors. Notice that you should provide ways for this to be possible.
## How it is done?

First, we create the base class for our objects with function to add and remove objects to itself. The classes that implement this abstract will be able to work as a single entity or a list of entities.
## Our Example

Here our base class is `Unity.php` it defines function that will work on both squads and single soldiers. `Squad` is a class that is a list of soldiers and `Soldier` is a class representing a single entity (not a list). Note that `Soldier` simply returns false if you try to add another person to him.

Finally on the file `GatherSquads.php` you can see everything put together. We create three soldiers and add them to two platoons, than we add both platoons to the same army.