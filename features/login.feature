Feature: As a guest I want to login into system

  Scenario: Successfull login
    Given I has account with "leszek.prabucki@gmail.com" email
    When I log in into system
    Then I should see dashboard