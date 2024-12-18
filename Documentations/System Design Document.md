# 1. The Scope

## 1.1 Purpose:

The purpose of this paragraph is to define the scope of this website.

## 1.2 In scope features

* **Recipe management**: Users can
- Create and upload recipes.
- Modify their uploaded recipes.
- Delete their uploaded recipes.

* **Searching**: All users can search for recipes via dish names and ingredient names.

## 1.3 Constraints

The platform for the webpage is Windows and will be supported by any modern web browser that is available on Windows.

## 1.4 Out of scope features

Rules and regulations, guidelines, recipe recommendation algorithms, direct user support via chat or phone.

# 2. Project Plan

## 2.1 Project Objective
To create a website where users can create, upload, modify and delete their own recipes and search for others with a dish name or an ingredient name.

## 2.2 System Architecture and Design

### Frontend:

* **Framework:** HTML, CSS, JavaScript (or a library like React for better user experience).

### Backend:

* **Server:** XAMPP with Apache.

* **Language:** PHP.

### Database:

* **MySQL** (using XAMPP for local database management).

## 2.3 Testing and Quality Assurance Plan

### Unit Testing:

Test each PHP script or endpoint for correct responses.

### Integration Testing:

Ensure frontend and backend communication works seamlessly.

### User Testing:

Verify the user can perform all intended actions without errors.

## 2.4 Deployment and Maintenance Plan

### Deployment:

Run the application on the XAMPP Apache server.

### Maintenance:

Regularly test functionality and apply fixes as needed.

# 3. Requirements

## 3.1 Functional requirements

These requirements describe the core functionalities the system must support.

### Recipe management

* **Users can:**
- Create their own recipe with:
   - Title.
   - Ingredients.
   - Preparation steps.
- Edit or delete their own recipe.

### Search
* **All users can:**
- Search for any recipe with dish names and ingredient names.

### Acces control
* **All users:**
- Can search for and view recipes.
- Can use the recipe management system.

## 3.2 Non-functional requirements

### Performance
- The system sould support a relatively big number of users concurrently.
- Search results should load within 2 seconds under normal load.

### Usability
- The platform must be responsive on Windows desktop devices.
- The platform should have an intuitive interface with clear navigation.

### Security
- Implement input validation to prevent XSS and SQL injection.

### Scalability
The website will be designed with scalability in mind, enabling it to handle increased traffic and data growth over time. The system will allow:
* **Database Growth**: The database will be capable of scaling to be able to handle larger numbers of recipes, comments, user data, and ratings without performance loss. Database sharding and indexing strategies will be implemented for performance optimization.

### Reliability
To ensure the prevention of data loss the database will be backed up daily.

### Maintability
The codebase will be modular, easy to see through and documented for ease of updates.

### Assumptions and dependencies
- Users will have an operable Windows desktop.
- Users will have access to a stable internet connection and modern browsers (Chrome, Firefox, Opera).
- Apache will provide the web server for the system.
- MySQL will provide the database server for the system.

# 4. Functional Plan

## 4.1 Recipe Management

* **Users can create a new recipe by providing:**
-Dish name.
-Ingredients.
-Steps for preparation.
-Recipes are stored in the database and linked to the user who created them.
-Users can edit their recipes to update ingredients or steps.
-Users can delete their recipes.

## 4.2 Search results display:
-Dish name.
-A list of recipes that match the search criteria.
-Users can view the full recipe details by clicking on a search result.

# 5. Physical environment

## 5.1. Hosting enviroment
The project will be hosted locally on a development machine or a shared server using XAMPP, which provides an all-in-one solution for Apache, PHP, and MySQL.

### Development Setup

- **Software Requirements**:
  - XAMPP (latest stable version).
  - PHP 8.0+.
  - Apache 2.4+ (built into XAMPP).
  - MySQL 8.0+ (built into XAMPP).
  - Text editor or IDE (VS Code).

- **Hardware Requirements**:
  - Minimum:
    - Dual-core processor.
    - 4 GB RAM.
    - 20 GB free storage for the database and project files.
  - Recommended:
    - Quad-core processor.
    - 8 GB RAM for smoother performance.

### Deployment

- The website will run on:
  - Localhost during development.

### Database Server

* **MySQL Database**:
  - Used to store:
    - Recipe data
* **Tables**:
- Recipes

## 5.2 Network configuration

* **Access**:
  - Users will access the website via `http://localhost` or the assigned LAN IP address.
* **Firewall**:
  - Ensure XAMPP’s Apache and MySQL ports are accessible for internal testing only.
  - Disable external access for security unless explicitly required.

## 5.3 Development enviroment

* **Team collaboration**:
   - Version control system: Git is used for source code management.
   - The project is accessible to all of the team members.

* **Testing enviroment**
   - The development and testing will be done on each team member's Windows computer.
   - Multiple modern windows web browsers will be used (Firefox, Chrome, Opera) for cross-browser testing.

## 5.4 Backup and recovery

* **Database Backups**:
  - Use phpMyAdmin to export the database as an SQL file regularly.
  - Store backups in a secure folder or a cloud service like Google Drive.

# 6. Abstract Domain Model

## 6.1 Entities

### User
   -user_id
### Recipes
   -recipe_id
   -recipename
   -ingredients
   -servings
   -instructions

## 6.2 Relationships

* **User to Recipes:** One-to-Many
A user can create multiple recipes.
Each recipe is owned by a single user.

## 6.3 Interactions

* **Recipe Management**
Create, update, and delete recipes based on user actions.

* **Search**
Search recipes by dish name or ingredients.
Return matched recipes and details for user browsing.

# 7. Architectural plan

## 7.1 Frontend
-Technology Stack: HTML, CSS.
* **Responsibilities:**
   * User interface for creating, updating, and deleting recipes.
   * Responsive design for recipe browsing and management.
   * Search input and results display for recipes.

## 7.2 Backend
-Technology Stack: PHP running on XAMPP’s Apache server.
* **Responsibilities:**
   * Perform CRUD operations on the Recipes table.
   * Process search queries for dish names or ingredients.
   * Communicate with the MySQL database to fetch and store data.

## 7.3 Database
-Technology Stack: MySQL (local instance via XAMPP).
* **Responsibilities:**
   * Store recipe data including ingredients, instructions, and metadata.
   * Ensure data integrity and support indexed searches for performance.

# 8. Database Plan
The database plan defines the tables and their relationships within the system. To ensure data consistency and integrity, the database is designed to meet **Third Normal Form (3NF)** requirements. Additionally, stored procedures may be implemented to streamline and optimize key operations.

## 8.1 Logical Data Model:
Here in this subchapter, we define the tables and relationships and their in-depth structures:

### Tables:
* **Recipes**: Stores details of each recipe uploaded by users.

1. **Recipes** 
* recipe_id (PK, INT, AUTO_INCREMENT): Unique identifier for each recipe.
* recipename (VARCHAR): Name of the recipe.
* ingredients (TEXT): List of ingredients.
* servings (TINYINT): Number of servings.
* instructions (TEXT): Cooking instructions.

## 8.2 Stored Procedures
Stored procedures are used to simplify and secure repetitive database operations, such as adding a new recipe, retrieving comments, and calculating average ratings. These help optimize database performance and reduce risks of SQL injection.

* AddRecipe(userId, title, ingredients, instructions): Inserts a new recipe into the Recipes table linked to a user.

## 8.3 SQL Script for the Physical Data Model Generation
This SQL script provides the necessary commands to generate the database structure, including table creation, primary and foreign key definitions, and setting up relationships. The script ensures a seamless deployment of the database schema and allows for easy replication or modification if needed.

### The script:

``` SQL
 CREATE TABLE recipes ( 
    recipe_id INT NOT NULL AUTO_INCREMENT, 
    recipename VARCHAR(255) NOT NULL, 
    ingredients VARCHAR(255) NOT NULL,
    servings TINYINT NOT NULL DEFAULT 1,
    instructions VARCHAR(500) NOT NULL, 
    CONSTRAINT PK_recipes PRIMARY KEY(recipe_id)
 );
 ``` 

# 9. Implementation Plan
In the implementation plan we define the classes required to realize the system's architecture. In our case, the plan is to keep the components minimal, and use multipurpose components that handle the essential tasks without complex patterns.
## 9.1 Persistence Layer
Since it is a simplified design, we consolidate data interactions into just one or two classes, reducing redundancy.

* **DatabaseHandler**: A single class to manage database connections and execute queries. It handles common operations like retrieving user data, adding recipes, fetching comments, and so on. It contains methods like:
* select(table, row_base, conditions): Generic function to retrieve data from any table.
* executeStatement(table, conditions): Generic function to execute SQL statements.

## 9.2 Business Logic Layer
A single Service class manages most of the logic for this kind of website. This class handles operations related to recipes, comments, ratings, and favorites without the need to separate them into different services.

* **Recipes**: This class would handle the core functionality of the site:
* create(): Validates inputs and creates a new recipe.
* search(): Allows searching by name or ingredient.
* del(): Deletes the recipe.
* modify(): Edits the recipe.
* more(): Opens a more detailed view about the recipe.

## 9.3 Client-Side Layer
On the client side, we are focusing on minimal UI components without complex structures.

* index.html: This HTML file includes basic page layouts for home, recipe detail, upload page, etc.
* Basic CSS: Styles a simple single stylesheet, focusing on layout and responsiveness.

# 11. Maintenance Plan
The main focus for us in the maintenance plan is to outline the process and methods for updating the website, ensuring it remains functional, secure, and up-to-date. Bye maintenance activities we mean bug fixes, enhancements, and version upgrades. Testing plans for maintenance activities are also defined to ensure system stability and quality. This maintenance plan will be implemented once an initial version has been deployed and subsequent versions are planned.

## 11.1 Update Process
* **Bug Fixes**: We address any bugs reported by users or identified during internal testing, and aim for a quick fix to minimize user disruption.
* **Feature Enhancements**: In the future to introduce small enhancements, such as improved search functionality or user interface adjustments, based on user feedback.
* **Security Updates**: Regularly update security measures, including password encryption and HTTPS protocols, to address emerging vulnerabilities.

## 11.2 Maintenance Testing Plans
* **Security Testing**: Performing vulnerability scans and penetration tests following security updates.
* **Performance Testing**: Testing page loading times, database response times, and other key performance metrics to ensure the site remains responsive and scalable.

## 11.3 Versioning
* **Version Releases**: The planning for new versioons in the future, introducing major updates, new features, or structural improvements.
* **User Feedback Integration**: Before each major version update, we review user feedback and prioritize the most requested features for inclusion in the release.
