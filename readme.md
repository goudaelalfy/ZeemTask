<p align="center"><img src="http://zeem.sa/wp-content/themes/zeem/images/logo.png" width="150px"></p>

## About Zeem Task

Task to get Senior Laravel Developer vacancy in Zeem company.

Assignment Details:

Please use the following Users Stories as a reference and requirements of your work:

1- Users Story One:

As an admin, I want to:

Be able to login to my Administration Panel using the username "Admin" and password "Password".
Be able to create an article with an Article Name and an Article body (Article Details), and save it to be added to my "Articles List" to be viewed by me and other authorized viewers. 

Acceptance Criteria/Conditions and specifications:
The article name and body will have to be entered before saving the article. 
The article name and body should only be entered in alphabetic letters. 
The article body should not exceed 1000 alphabetic letters.
The article should be saved based on the current date and time. 
The article should be added to "Articles List" and its name and date/time of submission should be shown and associated to it.
Each article in "Articles List" should be accessible to be viewed with all its details (name, article body, and submission data/time)


2- Users Story Two:

As an admin, I want to:
Add a new User Type/Role with the role name "Articles Viewer" with a permission to view the list of articles and article details only, and save it to the "Users Types List".
Add a new User with a user name "User" and password "Pass", and choose the user to be an "Article Viewer", and save it to the "Users List".
Acceptance Criteria/Conditions and specifications:
The new User Type/Role "Articles Viewer" should be added to "Users Types List" .
The new User with the "Articles Viewer" Type/Role should be added to "Users List" 
The new User with the "Articles Viewer" Type/Role should be able to login to a User Control Panel to view the "Articles List" and choose to view an article with all its details (name, article body, and addition data/time).
The new User with the "Articles Viewer" Type/Role should be logout and exit the User Control Panel.


## Tools

Laravel v5.7, MySQL

Theme: https://github.com/almasaeed2010/AdminLTE/releases/tag/v2.4.5

Libraries: nwidart/laravel-modules , yajra/laravel-datatables


## How to try?

- git clone the repository: "git clone https://github.com/goudaelalfy/ZeemTask.git"
- cd to your repository directory then run: "composer install"
- create mysql database then create .inv file to set mysql data configuration
- run command: "php artisan migrate:refresh --seed"
- then open browser and go to task root "http://localhost/ZeemTask/public/", click login button on top-right:
username: Admin
password: Password 



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
