# The CLI Calculator
The CLI calculator performs the basic operations:
* addition (+)
* subtraction (-)
* multiplication (x)
* division (/)
* square root (sqrt)

# Examples
Example 1: <br/>
(input) <br/>
php calc 5 + 2 <br/>
(output) <br/>
7<br/>

Example 2: <br/>
(input) <br/>
php calc 9 sqrt <br/>
(output) <br/>
3 <br/>

Example 3: <br/>
(input) <br/>
php calc 5 x 5 <br/>
(output) <br/>
25 <br/>

# Install
* Run docker: make dc_build dc_up
* Go into php container: make app_bash
* Execute: composer install
* That's all

# Tests
* Go into php container make app_bash
* Run: composer test




