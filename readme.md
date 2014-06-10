# Project Lucrum Prototype v2

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
