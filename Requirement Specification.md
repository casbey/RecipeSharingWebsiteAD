## 1. Introduction

    >1.1 Purpose: The purpose of this web platform to upload, search and share food recipes 
        amongst the users and to rate and favorite those said recipes and the ability to comment under the recipes their opinions, etc.

    >1.2 Scope: The web platform will include the following functionalities:
                -[user authentication, recipe managment(creating, uploading, modifying, deleting), commenting, rating, favoriting, recipe searching with filters]
    
                The constraints of the web platform:
                -[The web page will be supported by Windows and will be usable via any web browser windows can run]

                The following functionalities will be excluded from the project:
                -[regulations, guidelines, recipe recommendation algorithms, direct user support via chat or phone]
                
    >1.5 Overview: 

        1. - Introduction: Shares knowledge about the technical and non-technical aspects, functionalities and bacground of the project to gain a clear and deep understanding what the project is about, what it can and can not do.

        2. - Overall Description: Describes how the project will fit into the bigger system, lists it's features and functionalities and also the constraints, limitations and dependencies regarding the web platform, defines the users and their different privileges and lists the supported operating platforms.

        3. - Features: Dives deeper into all of the project's features and describes all of them in more detail about the functional and non-functional requirements.

        4. - Interface Requirements: Describes the UI's design principles and mockups, the required hardware for the web platform to run, what software interfaces will be used and how the system will communicate.

        5. - System Attributes: Will outline the security measures, define the performance target, describe any future expansion possibilities, lay down how the platform is user friendly, describes how the platform can be maintained and updated and the difficulty of said actions and will mention any plan of making the system portable to other devices.

        6. - Other Non-functional Requirements: This chapter will describe in more detail of any other non-functional requirements like legal or regulatory requirements.

        7. - Appendix: Any additional supporting materials, diagrams, or notes.

## 2. Overall Description
# 2.1 Product Perspective
The Recipe Sharing Website is a standalone web platform, designed for users to share, and discover new recipes from other users. The three core systems that allows the functioning of the website are the frontend interface used for user interactions, the backend API for the business logic, and a database for storing and managing user information, recipes, and the outcome of user interactions such as comments and ratings.

# 2.2 Product Functions
The platform offers the following main functions:
* User registration and login
* Recipe control (submission, editing, viewing, deletion)
* Search enginge via name, ingredients, or rating
* User interactions with other recipes (comment, favourite, rating)
* User profile management (viewing, update)

# 2.3 User Classes and Characteristics
The website is designed for an audience expert in cooking, or interested in trying out new recipes.
* **Casual Users**: Users with a basic knowledge in cooking, trying to improve as cooks at home with the addition of new recipes to their collection.
* **Professional Chefs**: The platform is a great opportunity for well-known chefs, or rather less known experts to promote their recipes and help beginners.
* **Home Cooks**: The type of users who already have an intermediate knowledge about cooking, and are just trying to share their experience on the website and look for alternatives of cooking their dishes.
We can divide the users into two classes on the website.
1. **Registered users**: The users who passed the age of 18 and are also registered to the website. They can manage their profile, and have the benefit of uploading recipes and interacting with other uploaded recipes.
2. **Guests**: Unregistered users, who can only look at the uploaded recipes, and use the search function, but they cannot interract with other recipes or upload.

## 2.4 Constraints
The recipe sharing website follows the following constraints:
* The recipe form description must be limited to 5000 characters (with spaces) 
* The website must support 100 users at least
* It must be compatible with the modern web browers, and must support access from mobile devices as well
•	Security measures in terms of password hashing must be developed

## 2.5 Assumptions and Dependecies
* The user must enter the website through a modern web browser and devices.
* The user must maintain stable internet connection when using the website.

## 2.6 System Environment
* **Client Side**: Google Chrome, Mozzila Firefox, Microsoft Edge, and Safari web browers, and any modern device
* **Server Side**: Apache webserver, PHP 7.x for server-side requests, MySQL databse, and Git for version control
