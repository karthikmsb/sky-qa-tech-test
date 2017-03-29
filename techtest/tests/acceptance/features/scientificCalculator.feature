Feature: Scientic Calculator  


Scenario : compute operations in scientific calculator

    Given I have entered the <number> into the calculator
    And   I hit <button>
    Then  I read the result on the screen <result>

Examples:
    | number | button    | result |
    | 3      | factorial |   6    |
    | 100    | decToHex  |   64   |
    | 2      | cubeRoot  |   1.259|
    

