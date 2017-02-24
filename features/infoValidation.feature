# features/infoValidation.feature
Feature: infoValidation
  In order to make sure the information I enter is valid
  As a member of the family
  I need to have security in place to assure the information is valid

Scenario: Validate empty information
  Given I have an empty field
  When I run validation I should get false
