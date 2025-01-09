# Train Ticket Booking Management System

## Project Description
• This project is about creating the database about the Train Reservation System.<br/>
• The train reservation system facilitates the passengers to enquire about the trains available on the basis of source and destination , booking of tickets , enquire about the status of the booked ticket, etc.<br/>
• The aim of this project is to design and develop a database maintaining the records of different trains and passengers. The record of train includes its name, source, destination, timing , seat availability and seat booked.<br/>
• Passengers can book their tickets for the train in which seats are available. For this, passengers have to provide the date for which ticket is to be booked , source and destination station. Before booking a ticket for a passenger, the train availability and booking date is checked. <br/>
• Once the train availability and booking date are validated , it is checked whether the seat is available. If yes, the ticket is booked with the confirm status.<br/>

# List of Assumptions:
•  Since the reservation system is very large in reality, it is not feasible to develop the project to that extent and prepare documentation at that level. Therefore, a small sample case study has been created to demonstrate the working of the reservation system. To implement this sample case study, some assumptions have been made , which are as follows:<br/>
1. The number of trains has been restricted to 3.<br/>
2. The total number of tickets can be booked in each train is 60.<br/>
3. There is no weightage for old or handicapped or women to avoid the complexity.<br/>
4. The waiting list and rac feature is not added in ticket booking system.<br/>

# Approach:

• We have compiled the system's admin requirements and prepared the project's scope and purpose before starting. The outcomes of this phase include the proposed system's features, scope and limitations, objectives, costs and advantages, and user interface design.<br/>
• After researching and identifying the issues with the current system, we created an entity relation diagram (E-R diagram) for the suggested solution.<br/>
• We transformed the E-R diagram into a relational database model based on the analytical phase, a user interface was also designed during this phase.<br/>
• We turned the proposed system's design into computer software, using front-end development like HTML , CSS, JAVASCRIPT , BOOTSTRAP and MySQL for SQL databases (back end), and PHP through VSCODE IDE.<br/>


# Specification

## User Specification
### Registration - (Authentication)
• User registers with FirstName, LastName, EmailId, PhoneNumber, Password, ConfirmPassword, DateOfBirth, and Pincode.<br/>
• Before registering and saving a user details in MySql database Email id checked is weather it already exist in database or not.<br/>
### Login
• The user login to the Train ticket booking website with his/her correct gmail and password.<br/>

## Module Specification
### Search Train
• User enter the detail the date, source and destination with respect to that running trains are shown with tickets available.<br/>
### Book Ticket
• If user is logged in and train seats are available then User is shown the option to book the ticket.<br/>
•	When User enter the other passenger information then data is saved to database also sent to user mail for the confirmation.<br/>



# Analysis:

• Clients:- People who travel through trains.<br/>
• Requirements.<br/>
 <img width="575" alt="image" src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/f3e4a827-239c-4f93-a58a-8b7e4e8d7e96"><br/>
 
 <img width="450" alt="image" src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/dbb7974c-cef2-47f6-942f-ef7837c67638"><br/>


# Design


## Flowchart
<img src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/dbd5e9ef-cd8a-43d8-9ec8-6f7399becbad" alt="Train Ticket Booking System" width="500" height="300">

## Use Case Diagram
<img src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/19ada2a9-ce8f-4e00-83a1-36dfee9dfdfc" alt="Use Case Diagram" width="500" height="300">

## Activity Diagram
<img src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/0ad40000-179c-4553-a24b-07474748b56a" alt="Activity Diagram" width="500" height="300">

## Class Diagram
<img src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/629842f7-0b63-40e0-94b6-8ce32755e1a6" alt="Class Diagram" width="500" height="300">

## Sequence Diagram
<img src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/82edd9da-ce1b-4d94-b6e5-c088dba4a5a2" alt="Sequence Diagram" width="500" height="300">

## List of entities and attributes
<img src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/6463982d-53d1-477e-831c-42d1da31d429" alt="Entities and Attributes" width="500" height="300">

## ER Model
<img src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/851c4d27-8fcd-49ee-9777-b6b7e0ab0a86" alt="ER Model" width="500" height="300">




# Implementation


## Login 
![image](https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/8582dcf2-83c9-4bbb-bce0-22d7c4b773b7)

## Registration
![image](https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/0a3ae592-a766-4d47-877e-e19a85df5fe3)

## Train Ticket Booking
![image](https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/80260dd7-39c0-4d55-a862-df15b38f7d0b)

## Train Available
![image](https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/d396abaf-7379-4a63-9bdf-5c36d7bfc9ad)

## Enter Passenger Details
![image](https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/4d5bca5b-a970-4867-bb3c-d56dd31524b3)

## Database -> phpMyAdmin
![image](https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/82b9b855-3662-4892-b0ac-0b06285cbc3c)

## Result -> Confirmation Email
![image](https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/a3ca5a2e-5c0a-49c8-ad41-fc767e1fe8f2)


# Testing

## White Box Testing

### Email Confirmation
<img width="445" alt="image" src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/3151b303-76e5-4dde-83bf-ccafc7f69990">

<img width="433" alt="image" src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/7601b852-9a09-4b93-8ab0-6d97143aa86d">

### Password and Confirm Password
<img width="445" alt="image" src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/374bd5cc-4122-4e11-95c1-9ff4b3683e64">

<img width="449" alt="image" src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/2eebdd97-d6f3-45c0-8303-5fb04dec9f30">

### Pincode
<img width="439" alt="image" src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/ccbf80c6-5ab3-4111-b5df-01c7be5d8162">

<img width="430" alt="image" src="https://github.com/nayandeep20028840/Train-Ticket-Booking-Management-System/assets/97220336/4a34e190-4f9a-48e7-8873-93c7c1882375">




# Conclusion

• In our project Train reservation system we have stored all the information about the Trains scheduled and the users booking tickets and seats etc.<br/>
• This database is helpful for the applications which facilitate passengers to book the train tickets and check the details of trains.<br/>
• We had considered the most important requirements only, many more features and details can be added to our project inorder to obtain even more user friendly applications.<br/>
• These applications are already in progress and in future they can be upgraded and may become part of amazing technology.<br/>






