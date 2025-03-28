# Prototype is a creational design pattern that allows cloning objects, even complex ones, without coupling to their specific classes.

# In PHP, the clone keyword performs a shallow copy of an object, meaning:

    •	All properties are copied.
    •	If a property holds a reference to another object, only the reference is copied (not a deep clone of the referenced object).

# CASE 1: When we dont have a custom Clone() method:

If we change the engine of $car2, it will affect $car1 as well.

# CASE 2: When we have a custom Clone() method:

If we change the engine of $car2, it will not affect $car1.

# See the clone() method in Car.php
