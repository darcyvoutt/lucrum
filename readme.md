# Introduction

Project Lucrum is a game-based teaching tool for colleges and universities. Professors will use it to teach business to students. In the game, students are grouped into teams. Each team is in charge of one business and makes decisions for that business. 

Version 1 tested the game mechanics and had no ability to manage users, games, payments, or clients in a scalable way.

## Project Lucrum Prototype v2

The goal of the second prototype is to make it more stable, scalable and better user experience. The first prototype was built using a MySQL database of which proved troublesome. This version will be built using MongoDB for flexibility. Additionally it is to use a coding framework and use either PHP or Node.js. The design is being completely overhauled based on feedback from our first round of participants.

## Expectations

The following are expectations for the freelancer project. They are not strict, more guidelines to a successful project.

1. Do not worry about styling, only front-end work should be for a better interaction with loading/saving data (eg. using AJAX calls)
2. Use a code framework to build the system on; to give stability but also to save time
3. Provide light level documentation to explaining the methods and where to make changes (front-end to back-end)
4. Not sure what to do, how to implement, email darcyvoutt@gmail.com for questions

## Proposed Database Structure

These again are guidelines, if you see a technical issue with this, then please do what you feel is best and inform.

## Collections

The following are the collections and the data inside their documents.

**Users**
- First Name
- Last Name
- Email
- Password
- Team
- Game
- School
- Type (Player, Professor, Admin)
- Status (Active, Inactive)

**Games**
- Name
- Status (Draft, Scheduled, Active, Finished)
- Teams
- School

**Schools**
- Name
- Location details

**Teams**
- Name
- School
- Players

## Story Board

We are using Trello to track tasks that need to be accomplished. We will add you to the board so that you can move the work into a completed bucket as you progress.

[Trello Board](https://trello.com/b/1qun7Kxg/outsource-tasks)
