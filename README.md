# The CLI Calculator
The CLI calculator performs the basic operations:
* addition (+)
* subtraction (-)
* multiplication (x)
* division (/)
* square root (sqrt)

# Usage
Addition: <br/>
php calc 5 + 2

Sqrt: <br/>
php calc 9 sqrt

Multiplication 3: <br/>
php calc 5 x 5

Division: <br/>
php calc 6 / 2

Subtraction: <br/>
php calc 6 - 2

# Install
* Run docker: make dc_build dc_up
* Go into php container: make app_bash
* Execute: composer install
* That's all

# Tests
* Go into php container make app_bash
* Run: composer test
* Run: composer test-coverage




