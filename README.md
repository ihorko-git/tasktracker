

## Task description
Use Laravel 10, RESTful without UI, docs for frontend developer, use Policy, Gate, Middleware.

1. Add roles to users, each user might have only one role (ADMIN, USER).
2. Create CRUD controller for categories of tasks (name, type).
2.1 All users should have one standart category "urgent tasks" that can not be modified
3. Create CRUD controller for creating tasks (name, description, creation date, execution date, category)
3.1 Status in response IN_PROGRESS or DONE.
3.2 Filtering of tasks by category.
4. Ability to view tasks and their categories by admins (show users with tasks in format: email, amount of tasks).
5. Ability to view user's email, category and amount of tasks in this category.
6. Delete all related to user data when user is deleted.

