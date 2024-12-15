# 1. The Scope

## 1.1 Purpose:

The purpose of this paragraph is to define the scope of this website.

## 1.2 In scope features

* **User Authentication**: Users can register and login into the website.

* **Recipe managment**: Logged in users can
- Create and upload recipes.
- Modify their uploaded recipes.
- Delete their uploaded recipes.

* **Interaction**: Logged in users can
- Comment under other recipes.
- Modify their own comment.
- Delete their own comment.

* **Rating**: Logged in users can rate other recipes in a 0-5 rating system.

* **Favoriting**: Logged in users can favorite other recipes.

* **Searching**: All users can filter search for recipes.

## 1.3 Constraints

The platform for the webpage is Windows and will be supported by any modern web browser that is available on Windows.

## 1.4 Out of scope features

Rules and regulations, guidelines, recipe recommendation algorithms, direct user support via chat or phone.

# 8. Database Plan
The database plan defines the tables and their relationships within the system. To ensure data consistency and integrity, the database is designed to meet **Third Normal Form (3NF)** requirements. Additionally, stored procedures may be implemented to streamline and optimize key operations.

## 8.1 Logical Data Model:
Here in this subchapter, we define the tables and relationships and their in-depth structures:

### Tables:
* **Users**: Stores information about each user, including their login details and profile information.
* **Recipes**: Stores details of each recipe uploaded by users.
* **Comments**: Stores comments left by users on recipes.
* **Ratings**: Stores user ratings for each recipe, allowing an average rating to be calculated.
* **Favorites**: Tracks recipes that users have marked as favorites.

1. **Users**
* user_id (PK, INT, AUTO_INCREMENT): Unique identifier for each user.
* username (VARCHAR): Username of the user.
* email (VARCHAR): Email address for the user.
* password (VARCHAR): Hashed password for user security.
* created_at (TIMESTAMP): Timestamp of when the user registered.

2. **Recipes** 
* recipe_id (PK, INT, AUTO_INCREMENT): Unique identifier for each recipe.
* user_id (FK, INT): ID of the user who uploaded the recipe, linking to Users.user_id.
* title (VARCHAR): Recipe title.
* ingredients (TEXT): List of ingredients.
* instructions (TEXT): Cooking instructions.
* created_at (TIMESTAMP): Timestamp of when the recipe was added.

3. **Comments** 
* comment_id (PK, INT, AUTO_INCREMENT): Unique identifier for each comment.
* user_id (FK, INT): ID of the user who made the comment, linking to Users.user_id.
* recipe_id (FK, INT): ID of the recipe being commented on, linking to Recipes.recipe_id.
* content (TEXT): The comment content.
* created_at (TIMESTAMP): Timestamp of when the comment was made.

4. **Ratings**
* rating_id (PK, INT, AUTO_INCREMENT): Unique identifier for each rating.
* user_id (FK, INT): ID of the user who rated, linking to Users.user_id.
* recipe_id (FK, INT): ID of the rated recipe, linking to Recipes.recipe_id.
* rating (TINYINT): Rating given by the user (1 to 5 scale).
* created_at (TIMESTAMP): Timestamp of when the rating was given.

5. **Favorites**
* favorite_id (PK, INT, AUTO_INCREMENT): Unique identifier for each favorite entry.
* user_id (FK, INT): ID of the user who favorited the recipe, linking to Users.user_id.
* recipe_id (FK, INT): ID of the favorited recipe, linking to Recipes.recipe_id.
* created_at (TIMESTAMP): Timestamp of when the recipe was marked as favorite.

### Entity-Relationship Diagram (ERD):
Each Foreign Key relationship connects as follows:

* **Users → Recipes**: user_id in Recipes references user_id in Users (One-to-Many, since a user can upload multiple recipes).
* **Users → Comments**: user_id in Comments references user_id in Users (One-to-Many, since a user can leave multiple comments).
* **Users → Ratings**: user_id in Ratings references user_id in Users (One-to-Many, since a user can rate multiple recipes).
* **Users → Favorites**: user_id in Favorites references user_id in Users (One-to-Many, since a user can favorite multiple recipes).
* **Recipes → Comments**: recipe_id in Comments references recipe_id in Recipes (One-to-Many, since each recipe can have multiple comments).
* **Recipes → Ratings**: recipe_id in Ratings references recipe_id in Recipes (One-to-Many, since each recipe can have multiple ratings).
* **Recipes → Favorites**: recipe_id in Favorites references recipe_id in Recipes (One-to-Many, since each recipe can be favorited by multiple users).

## 8.2 Stored Procedures
Stored procedures are used to simplify and secure repetitive database operations, such as adding a new recipe, retrieving comments, and calculating average ratings. These help optimize database performance and reduce risks of SQL injection.

* AddRecipe(userId, title, ingredients, instructions): Inserts a new recipe into the Recipes table linked to a user.
* GetRecipeComments(recipeId): Retrieves all comments for a specified recipe.
* CalculateAverageRating(recipeId): Calculates the average rating for a recipe based on existing ratings in the Ratings table.
* AddFavorite(userId, recipeId): Adds a recipe to a user’s favorites in the Favorites table.

## 8.3 SQL Script for the Physical Data Model Generation
This SQL script provides the necessary commands to generate the database structure, including table creation, primary and foreign key definitions, and setting up relationships. The script ensures a seamless deployment of the database schema and allows for easy replication or modification if needed.

### The script:

``` SQL
 CREATE TABLE Users ( 
    user_id INT PRIMARY KEY AUTO_INCREMENT, 
    username VARCHAR(50) UNIQUE NOT NULL, 
    email VARCHAR(100) UNIQUE NOT NULL, 
    password VARCHAR(255) NOT NULL, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
 ); 

 CREATE TABLE Recipes ( 
    recipe_id INT PRIMARY KEY AUTO_INCREMENT, 
    user_id INT NOT NULL, 
    title VARCHAR(255) NOT NULL, 
    ingredients TEXT NOT NULL, 
    instructions TEXT NOT NULL, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE 
 ); 

 CREATE TABLE Comments ( 
    comment_id INT PRIMARY KEY AUTO_INCREMENT, 
    user_id INT NOT NULL, 
    recipe_id INT NOT NULL, 
    content TEXT NOT NULL, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE, 
    FOREIGN KEY (recipe_id) REFERENCES Recipes(recipe_id) ON DELETE CASCADE 
 ); 

 CREATE TABLE Ratings ( 
    rating_id INT PRIMARY KEY AUTO_INCREMENT, 
    user_id INT NOT NULL, 
    recipe_id INT NOT NULL, 
    rating TINYINT CHECK (rating BETWEEN 1 AND 5), 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE, 
    FOREIGN KEY (recipe_id) REFERENCES Recipes(recipe_id) ON DELETE CASCADE 
 );

 CREATE TABLE Favorites ( 
    favorite_id INT PRIMARY KEY AUTO_INCREMENT, 
    user_id INT NOT NULL, 
    recipe_id INT NOT NULL, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE, 
    FOREIGN KEY (recipe_id) REFERENCES Recipes(recipe_id) ON DELETE CASCADE 
 );
 ``` 

# 9. Implementation Plan
In the implementation plan we define the classes required to realize the system's architecture. In our case, the plan is to keep the components minimal, and use multipurpose components that handle the essential tasks without complex patterns.
## 9.1 Persistence Layer
Since it is a simplified design, we consolidate data interactions into just one or two classes, reducing redundancy.

* **DatabaseHandler**: A single class to manage database connections and execute queries. It handles common operations like retrieving user data, adding recipes, fetching comments, and so on. It contains methods like:
* fetchData(table, conditions): Generic function to retrieve data from any table.
* insertData(table, data): Inserts data into specified table.
* updateData(table, data, conditions): Updates records based on conditions.

## 9.2 Business Logic Layer
A single Service class manages most of the logic for this kind of website. This class handles operations related to recipes, comments, ratings, and favorites without the need to separate them into different services.

* **RecipeService**: This class would handle the core functionality of the site:
* createRecipe(): Validates inputs and creates a new recipe.
* searchRecipes(): Allows searching by name or ingredient.
* rateRecipe(): Handles ratings, calculates averages.
* addFavorite(): Adds a recipe to user favorites.

## 9.3 Client-Side Layer
On the client side, we are focusing on minimal UI components without complex structures.

* index.html: This HTML file includes basic page layouts for home, recipe detail, upload page, etc.
* JavaScript Functions: Keeps functions in a single file (e.g., scripts.js) to handle UI logic and interactions. Some example functions:
1. displayRecipeList(): Renders a list of recipes.
2. viewRecipeDetail(): Displays detailed view when a recipe is clicked.
3. submitRecipe(): Handles recipe upload.
4. searchRecipes(): Filters recipes based on search criteria.
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