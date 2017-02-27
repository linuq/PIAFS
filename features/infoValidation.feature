# features/infoValidation.feature
Feature: infoValidation
  In order to make sure the information I enter is valid
  As a member of the family
  I need to have security in place to assure the information is valid

Scenario: Validate empty information
  Given I have an empty field
  When I run validation I should get false

Scenario: Validate null field
  Given I have a field that is not set
  When I run validation I should get false

Scenario: Validate valid field
  Given I have a field that is correct
  When I run validation I should get true

Scenario: Validate multiple valid fields
  Given I have multiple valid fields 
  When I validate all I should get true

Scenario: Validate multiple field one empty
  Given I have multiple valid fields
  And one invalid
  When I validate all I should get false

Scenario: Validate multiple field one empty
  Given I have multiple valid fields
  And one null
  When I validate all I should get false

Scenario: Validate valid date
  Given I have a valid date
  When I validate date I should get true

Scenario: Validate too early date
  Given I have a really early date
  When I validate date I should get false

Scenario: Validate impossible date
  Given I have an impossible date
  When I validate date I should get false

Scenario: Validate wrong format date
  Given I have a date with an invalid format
  When I validate date I should get false

Scenario: Validate multiple valid dates
  Given I have multiple valid dates
  When I validate all dates I should get true

Scenario: Validate multiple dates one invalid
  Given I have multiple valid dates
  And one invalid date
  When I validate all dates I should get false

Scenario: Validate multiple dates one null
  Given I have multiple valid dates
  And one null date
  When I validate all dates I should get false