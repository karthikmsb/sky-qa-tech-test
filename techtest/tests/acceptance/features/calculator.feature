Feature: Calculator  


Scenario : calculate two numbers together

    Given I have entered <number_1> into the calculator
	And I hit <button>
    And I have entered <number_2> into the calculator
    When I press "equals"
    Then the result should read the <result> on the screen

    Examples:
    | number_1 | number_2 | button      | result |
    | 20       | 30       | add         | 50     |
    | 7        | 5        | subtract    | 2      |
    | 2        | 40       | multiply    | 80     |
    | 4        | 2        | divide      | 2      |

Scenario : calculate three numbers together
    
    Given I have entered <number_1> into the calculator
    And I hit <button>
    And I enter <number_2> into the calculator
    And I hit <button>
    And I enter <number_3> into the calculator
    When I press "equals"
    Then the result should read the <result> on the screen

    Examples:
    | number_1 | number_2 | number_3    | button       | result |
    | 20       | 30       | 5           | add          | 55     |
    | 7        | 5        | 2           | subtract     | 1      |
    | 2        | 40       | 2           | multiply     | 80     |
    | 4        | 2        | 2           | divide       | 1      |
	
Scenario: compute two different operations in single expression

    Given I enter <number_1> into the calculator
    And I hit <button 1>
	and I enter <number 2> into the calculator
    And I enter <number 3> into the calculator
    And I hit <button 2>
    When I press "equals"
    Then the result should read the <result> on the screen
	
 Examples:
    | number_1 | number_2 | number_3    | button1  | button2  | result |
    | 2        | 3        | 5           | multiply | add      | 11     |
    | 2        | 3        | 5           | add      | multiply | 11     |
  
  
	
	
	
	
