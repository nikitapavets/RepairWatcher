# RepairWatcher
## Introduction
The main goal of RepairWatcher is control process of repair product. Each person can see, what stages has passed his product.
It will help you know the information about your product, which is currently being renovated. When the repair will be complete, 
you will get a notification about it.

## User Requirements
### *Software Interface*
* API for sms notification sms.ru
* Frameworks:
  * Backend:
    * Laravel/PHP
  * Frontend:
    * jQuery
    * Material design
* Database:
  * MySQL
  
### *User Interfaces*
The project will support two UI:
* Manager interface
* Client interface
Manager interface will include following components:
* Authorization page
* Registration page
* Manager page
* Setting page
* Products list page
* Add product page
* Statistic page
Client interface will include following components:
* Enter page
* Repair progress page
* Feedback page

### *User Characteristics*
This project will be useful for two type of people:
* Company managers, which provide repair services.
* People, who handed in for repair his product.

To use the site by the Client, user's age is limited only by the ability of a user to use computer and browser. 
So, nowadays an indicative limits to users age are from 7 to 65 years old.
But, by the Manager, user should be able to fill forms, and communicate with customers.

### *Assumptions and Dependencies*
Because this system has much in common with company database, will be nice to connect currently the system with company by, for example,
1C or Excel.

# System Requirements
## *Functional Requirements*
* Manager registration
  * via email and password
  * via VK
  * via Facebook
* Manager entering the system
  * by email and password
  * by VK
  * by Facebook
* Client entering the system
  * by product hash code
* Opportunity to add product:
  * Client first name
  * Client second name
  * Client father name
  * Client address
  * Client phone number
  * Product title
  * Product serial number
  * Product complect
  * Product diagnosis
  * Receipt number
  * Date
  * Repair type
* Working with products
  * Adding
  * Editing
    * Status
    * Hash
  * Removing
  * Show products list
    * Sorting
    * Searching
    * Customer's information
* Working with managers
  * Adding
  * Editing
    * Rang
  * Removing
  * Show users list
* Working with clients
  * Sending sms
* Client opportunities:
  * See repair's progress
  * Sending report
  
## *Non-Functional Requirements*
### *Software quality attributes*
* Security
  * Only manager can add, edit and remove product
  * Only manager can add new managers
  * Сlient should not have a possibility to see information about someone else's product
* Valid user interface
  * All pages should be viewed equally in 5 last versions of Chrome, Firefox, Safari and Opera
  * Design will be adaptive on desktops, tablets and mobiles
* Working speed
  * When user opens a web-site for the first time - page should be loaded and displayed in less than 4 seconds.
  * Than all pages should display in less than 2 seconds in a stable Internet connection.
