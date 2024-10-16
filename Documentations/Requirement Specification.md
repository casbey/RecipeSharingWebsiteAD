# 1. Introduction

## 1.1 Purpose: 
The purpose of this web platform to upload, search and share food recipes amongst the users and to rate and favorite those said recipes and the ability to comment under the recipes their opinions, etc.

## 1.2 Scope: 
* **The web platform will include the following functionalities:**
user authentication, recipe managment(creating, uploading, modifying, deleting), commenting, rating, favoriting, recipe searching with filters
    
* **The constraints of the web platform:**
The web page will be supported by Windows and will be usable via any web browser windows can run

* **The following functionalities will be excluded from the project:**
regulations, guidelines, recipe recommendation algorithms, direct user support via chat or phone
                
## 1.3 Overview: 
* **Introduction:**
Shares knowledge about the technical and non-technical aspects, functionalities and bacground of the project to gain a clear and deep understanding what the project is about, what it can and can not do.
* **Overall Description:**
Describes how the project will fit into the bigger system, lists it's features and functionalities and also the constraints, limitations and dependencies regarding the web platform, defines the users and their different privileges and lists the supported operating platforms.
* **Features:**
Dives deeper into all of the project's features and describes all of them in more detail about the functional and non-functional requirements.
* **Interface Requirements:**
Describes the UI's design principles and mockups, the required hardware for the web platform to run, what software interfaces will be used and how the system will communicate.
* **System Attributes:** Will outline the security measures, define the performance target, describe any future expansion possibilities, lay down how the platform is user friendly, describes how the platform can be maintained and updated and the difficulty of said actions and will mention any plan of making the system portable to other devices.
* **Other Non-functional Requirements:**
This chapter will describe in more detail of any other non-functional requirements like legal or regulatory requirements.
* **Appendix:** Any additional supporting materials, diagrams, or notes.

# 2. Overall Description

## 2.1 Product Perspective
The Recipe Sharing Website is a standalone web platform, designed for users to share, and discover new recipes from other users. The three core systems that allows the functioning of the website are the frontend interface used for user interactions, the backend API for the business logic, and a database for storing and managing user information, recipes, and the outcome of user interactions such as comments and ratings.

## 2.2 Product Functions
The platform offers the following main functions:
* User registration and login
* Recipe control (submission, editing, viewing, deletion)
* Search enginge via name, ingredients, or rating
* User interactions with other recipes (comment, favourite, rating)
* User profile management (viewing, update)

## 2.3 User Classes and Characteristics
The website is designed for an audience expert in cooking, or interested in trying out new recipes.
* **Casual Users**: Users with a basic knowledge in cooking, trying to improve as cooks at home with the addition of new recipes to their collection.
* **Professional Chefs**: The platform is a great opportunity for well-known chefs, or rather less known experts to promote their recipes and help beginners.
* **Home Cooks**: The type of users who already have an intermediate knowledge about cooking, and are just trying to share their experience on the website and look for alternatives of cooking their dishes. \
<br/><br/>

We can divide the users into two classes on the website:
1. **Registered users**: The users who passed the age of 18 and are also registered to the website. They can manage their profile, and have the benefit of uploading recipes and interacting with other uploaded recipes.
2. **Guests**: Unregistered users, who can only look at the uploaded recipes, and use the search function, but they cannot interract with other recipes or upload.

## 2.4 Constraints
The recipe sharing website follows the following constraints:
* The recipe form description must be limited to 5000 characters (with spaces) 
* The website must support 100 users at least
* It must be compatible with the modern web browers, and must support access from mobile devices as well
* Security measures in terms of password hashing must be developed

## 2.5 Assumptions and Dependecies
* The user must enter the website through a modern web browser and devices.
* The user must maintain stable internet connection when using the website.

## 2.6 System Environment
* **Client Side**: Google Chrome, Mozzila Firefox, Microsoft Edge, and Safari web browers, and any modern device
* **Server Side**: Apache webserver, PHP 7.x for server-side requests, MySQL databse, and Git for version control

# 3. System features

## 3.1 User authentication
* **Description:** Users can sign up, log in and manage their accounts.
* **Functional requirements:** Users can create an account, users can log in via email/username and password, (password recovery maybe??).
* **Non-functional requirements:** User password protection and managable time for login/logout.

## 3.2 Recipe managment
* **Description:** Users can upload, edit and delete recipes.
* **Functional requirements:** Users can add a new recipe, users can edit their own existing recipes and recipe information includes the title, description, ingredients and steps.
* **Non-functional requirements:** Support for larger images and swiftly manage the database.

## 3.3 Recipe search
* **Description:** Search recipes by names and ingredients.
* **Functional requirements:** User can search for recipes by name, user can filter search with ingredients.
* **Non-functional requirements:** Fast and accurate search results.
    
## 3.4 Rating and commenting
* **Description:** Users can rate recipes and comment under them.
* **Functional requirements:** Users can leave comments under recipes, users can rate recipes on a scale from 1-5.
* **Non-functional requirements:** Comments loaded in in a managable time and real-time update for ratings.
    
## 3.5 Favorites
* **Description:** Users can mark recipes as their favorites for easy access later.
* **Functional requirements:** Users can favorite recipes, users can access their favorite recipes in a favorite list.
* **Non-Functional requirements:** Favorite list loading time should be fast and not depending on the size of the list.

# 4. External Interface Requirements

## 4.1 User Interfaces
The Recipe Sharing Website will feature a clean, intuitive, and responsive web interface to enhance user experience across modern devices. 
The primary interface components include:
* **Home Page**: Display popular and recently uploaded recipes. Users can search by recipe name or ingredients directly from this page.
* **Recipe Detail Page**: Shows the recipe, including the list of ingredients, instructions, images, ratings, comments, and a "Favourite" button.
* **User Profile Page**: Displays the user’s uploaded recipes, favourite recipes, and account details.
* **Login and Signup Forms**: Simple and clean forms to allow users to register or log in with email and password.
* **Recipe Upload Form**: A form where users can enter recipe details (name, ingredients, instructions, etc.). \
Wireframes and Mockups:
1. **Wireframes**: Preliminary wireframes will outline the layout and flow of each page. These will show the placement of elements like the search bar, recipe cards, comments section, and form inputs.
2. **Mockups**: Full-color mockups, adhering to a modern design style, will demonstrate how the final UI will appear, including typography, colors, and button styles. \
<br/><br/>

Design Considerations:
* **Navigation Bar**: Persistent across all pages, providing quick links to home, search, user profile, and recipe upload options.
* **Responsiveness**: The layout will adjust dynamically for different devices, ensuring a smooth user experience.

## 4.2 Hardware Interfaces
The Recipe Sharing Website will require hardware resources both for user interactions and for backend operations. The following hardware interfaces will be utilized:
* **Web Server**: An Apache web server will host the application and serve web pages to users.
* **Database Server**: A MySQL database will be used to store user accounts, recipe data, comments, ratings, and favorites. \
Hardware Requirements:
* **CPU and Memory**: The web and database servers should be configured to handle at least 100 concurrent users, with scalable hardware resources (CPU, memory) depending on the load.
* **Backup Hardware**: Routine database and file backups will be stored in a secondary cloud location to ensure data persistence and disaster recovery.

## 4.3 Software Interfaces
Some software components and third-party services will be integrated into the Recipe Sharing Website for specific functionalities:
* **Database**: MySQL will be used for managing all structured data.
* **Search Functionality**: The website will implement full-text search on recipes using built-in MySQL functions or a dedicated search service for advanced search and filtering by name or ingredients.
* **Frontend Framework**: The user interface will be developed using React.js (or an equivalent modern JavaScript framework), while adhering to best practices for responsive and dynamic content delivery.

## 4.4 Communication Interfaces
The Recipe Sharing Website will use the following communication protocols to ensure secure and efficient interaction between the client, server, and external services:
* **HTTPS** (Hypertext Transfer Protocol Secure): All communication between the client (user) and the server will be encrypted using HTTPS. This will ensure the protection of user data, including login credentials and personal information.
* **RESTful API**: The backend server will expose a RESTful API that will communicate with the frontend using JSON over HTTP. This API will handle all CRUD (Create, Read, Update, Delete) operations for recipes, users, comments, and ratings.

# 5. System Attributes
This section outlines the key attributes that the Recipe Sharing Website will adhere to, including security, performance, scalability, usability, maintainability, and portability.
## 5.1 Security
The Recipe Sharing Website will prioritize user data protection through robust security measures. Key security implementations include:
* **Password Encryption**: User passwords will be hashed using strong algorithms before being stored in the database. This ensures that even if the database is compromised, passwords remain secure.
* **HTTPS Encryption**: All data transmitted between the user and the server will be encrypted using HTTPS to prevent eavesdropping and data tampering.
* **Authentication & Authorization**: Only authenticated users will be allowed to upload, rate, and comment on recipes. Authorization mechanisms will ensure users can only access and modify their own data.
* **Data Backup**: Daily backups of critical user data and recipes will be performed and securely stored on cloud storage to ensure data recovery in case of an incident.

## 5.2 Performance
The system will be optimized to ensure that it performs efficiently, even under load. The performance targets are:
* **Search Response Time**: Search results for recipes (by name or ingredient) should appear within 2 seconds of the user’s query, even with a large recipe database.
* **Page Load Speed**: All pages should load within 3 seconds on average broadband connections to ensure a seamless user experience.
* **Concurrent Users**: The platform will support up to 100 concurrent users during peak hours, ensuring that the website remains responsive without downtime.

## 5.3 Scalability
The Recipe Sharing Website will be designed with scalability in mind, enabling it to handle increased traffic and data growth over time. The system will allow:
* **Database Growth**: The database will be capable of scaling to accommodate large numbers of recipes, comments, user data, and ratings without performance degradation. Database sharding and indexing strategies will be implemented for performance optimization.

## 5.4 Usability
The platform’s design will prioritize usability and user experience (UX). The key usability features include:
* **Intuitive Navigation**: The user interface (UI) will feature a simple, easy-to-navigate structure. Menus and buttons will be clearly labeled, and the flow between pages (e.g., from browsing recipes to commenting or favouriting) will be smooth and intuitive.
* **Responsive Design**: The website will be fully responsive, meaning it will automatically adjust to different screen sizes and devices (e.g., desktops, tablets, and smartphones).
* **Clear Error Messaging**: Whenever errors occur (e.g., incorrect login details, missing form fields), clear and helpful error messages will be displayed to guide users on how to fix the issue.

## 5.5 Maintainability
The Recipe Sharing Website will be designed for ease of maintenance, allowing for regular updates and bug fixes without disruption to the user experience:
* **Modular Codebase**: The application will follow a modular design structure, allowing developers to update or modify individual components (e.g., recipe management, user profiles) without affecting the entire system.
* **Version Control**: All code will be maintained in a Git repository allowing for easy tracking of changes, collaboration among team members, and rollback capabilities if issues arise.
* **Documentation**: Comprehensive documentation, including API documentation, database schemas, and deployment guides, will be provided to ensure that future developers can easily understand and maintain the system.

## 5.6 Portability
Portability will be a core feature of the Recipe Sharing Website, ensuring that the platform can be accessed from various devices and environments. Key portability considerations include:
* **Cross-Device Compatibility**: The website will be compatible with multiple devices, including desktops, laptops, tablets, and smartphones, with optimized layouts for different screen sizes.
* **Cross-Browser Support**: The website will function smoothly across all modern web browsers, including Google Chrome, Mozilla Firefox, Safari, and Microsoft Edge.
* **Mobile-Friendly Design**: The site will be optimized for touch interfaces on mobile devices, ensuring that users can interact with the site (e.g., browsing, uploading recipes) just as effectively on mobile as on desktop.

# 6. Other Non-functional Requirements
This chapter captures additional non-functional requirements related to legal compliance and data management, ensuring the system adheres to all necessary regulations and handles data responsibly.

## 6.1 Legal or Regulatory Requirements
The Recipe Sharing Website will adhere to all relevant legal and regulatory requirements, particularly regarding user privacy and data protection. The key considerations are:
* **Data Consent**: Users will be required to provide explicit consent before their personal information (e.g., name, email) is collected or used. A clear privacy policy will explain how user data is handled.
* **Right to Access and Deletion**: Users will have the ability to view and request the deletion of their personal data (such as profiles and comments) at any time. This will be managed through a user dashboard where users can access and manage their data.
* **Copyright and Intellectual Property Laws**: Users who upload recipes will agree to a terms of service policy that clarifies their ownership of the content they share. Users will be notified that the platform is not liable for any copyright infringements in uploaded recipes.
* **User-generated Content**: Recipe authors will maintain ownership of their content, but they will grant the platform a non-exclusive license to display and distribute their recipes on the site.

## 6.2 Data Management Requirements
The Recipe Sharing Website will have robust data management practices in place to ensure efficient storage, retrieval, and protection of user data and content. The following measures will be implemented:
1. **Data Storage**:
* **User Profiles**: User profiles will include data such as usernames, email addresses, passwords. All sensitive information will be stored in a secure, encrypted format in the database (MySQL).
* **Recipes**: Each recipe will be stored with information such as title, ingredients, instructions, user ratings, and comments. Recipes will be indexed to allow for efficient searching by title or ingredients.
* **Comments**: Comments on recipes will be associated with both the recipe and the user who posted them. They will be stored in a relational database with appropriate foreign key relationships.
* **Favourites**: Users will be able to save recipes to their favourites. This data will be stored in a user’s profile and will allow easy retrieval from the database.
* **Data Retention**: User data, including profiles and recipes, will be retained for as long as users remain active on the platform. Inactive users (i.e., those who do not log in for over a year) may be contacted, and if necessary, their accounts will be archived or deleted based on their preferences.
2. **Data Integrity and Consistency**:
The system will enforce data validation rules to ensure that the data entered by users is complete and in the correct format (e.g., valid email addresses, non-empty recipe fields).

# 7. Appendix

## 7.1 Glossary of Terms
This section defines key terms and concepts used throughout the SRS document.
* **UI (User Interface)**: The visual components through which a user interacts with the website, such as buttons, forms, and menus.
* **UX (User Experience)**: The overall experience a user has when interacting with the website, including ease of use, accessibility, and performance.
* **API (Application Programming Interface)**: A set of functions and procedures allowing different software applications to communicate with each other.

## 7.2 External Resources and References
* **Bootstrap**: The front-end framework used for responsive design. \
URL: https://getbootstrap.com
* **MySQL Documentation**: Official documentation for MySQL database, which is used for storing user profiles, recipes, and comments. \
URL: https://dev.mysql.com/doc/

## 7.3 Notes on Future Development
* **Mobile App**: While the initial release of the Recipe Sharing Website will be web-based, a future version may include a mobile app for Android and iOS.
* **Advanced Search Features**: In a future update, the search functionality could be enhanced to include filters such as recipe preparation time, difficulty level, and dietary preferences (e.g., vegan, gluten-free).
* **Recipe Sharing via Social Media**: Another planned feature is the integration of social media sharing options, allowing users to post their recipes directly to platforms like Facebook, Twitter, and Instagram.
