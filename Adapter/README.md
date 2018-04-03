# Adapter Design Pattern

The idea behind the adapter pattern is to allow you to use an existing class with a new interface. If you have a class that is already doing what you need, but the method signatures are not what you are expecting, use the adapter pattern and save the day.

## How it is done?

You will need the interface with the right method signatures, the old class with the wrong signatures and them mix both together in a third class with everything fixed. The example here is a shop machine that uses the clerk class to receive money and deliver the goodies. You can check it by running the `MachineUser.php` script.