# Factory Design Pattern

On this pattern we create new objects without exposing the object creation logic. Also, we will use a common interface to interact with the objects created.

## How it is done?

We can break the process of implementing this pattern in four steps:

### Step 1

Create an interface, on this example the Car.php file.

### Step 2

Now we will create the concrete classes implementing the interface. You can look up on raceCar.php and cityCar.php for this.

### Step 3

The actual factory needs to be created. It will receive information on the type of object to be used and return an instance of the proper type. On our example we will receive the type of car and return a raceCar os cityCar accordingly, check CarFactory.php.

### Step 4

Finally, use the factory to get the correct object. See the example on the CarFactoryDemo.php file.