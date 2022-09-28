# Task

1. Develop a user registration and login system with two tables, users, and companies.
    1. Users should include their name, email, mobile, and country upon signing up.
    2. Email must be unique
    3. All fields are required
    4. Text length can’t be too short
    5. Companies should include company name, company email, and country location.
    6. Validate companies also for each particular user
2. The user should be able to update their information when they log in.
    1. Validation must be included upon update
3. The user should be able to add up to 3 companies.
    1. Each user company should be displayed when they log in.
    2. Each user should be able to update and delete any company on their profile.
    3. Each user should be able to search for companies in their profile.

## Instructions

- Feel free to use any front-end stack of your choice
- The backend must be in Laravel
- Use proper coding techniques like OOP and Software Design Patterns
- Build with a clean UI, easy to read and navigate (it doesn’t have to be sophisticated).
- When completed, upload it to any live server of your choice for us to review
- Upload to your GitHub/bitbucket/Gitlab repository url and make it public for us to review, send your repository link
  to embachu@nourishingafrica.com and copy recruitment@nourishingafrica.com
- Practice clean code and proper error handling as your proficiency in these would be assessed
- Include migration files and faker

## INSTALLATION INSTRUCTIONS

- Clone the repository
- Copy and rename .env.example to .env
- Set database credentials
- Run "composer install"
- Run "php artisan migrate --seed" to create and populate tables with new data
