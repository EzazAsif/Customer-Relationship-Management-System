# CRM Customer Support Ticket System
This is a simple Customer Support Ticket Management system built with HTML, Bootstrap, and basic forms. It provides an interface for creating, viewing, and managing customer support tickets for a CRM (Customer Relationship Management) system.

# Features
Create Support Ticket: Users can create a new support ticket by providing customer details and a description of the issue.
View Support Ticket: View detailed information for each support ticket, including customer name, issue description, status, and submission date.
Manage Tickets: Options to resolve tickets and view their current status.
Pages
1. customer_support.html
This is the main page where support tickets are listed. The page contains:

A table that lists all support tickets with basic information (Ticket ID, Customer, Issue, and Status).
A button to Create a New Ticket, which opens a modal to fill out ticket details.
Buttons for viewing ticket details and marking tickets as resolved.
2. view_ticket.html
This page shows detailed information about a single ticket:

# Customer details
Ticket issue description
Ticket status
Date the ticket was submitted
Placeholder for comments
Installation
Clone the repository:

bash
git clone https://github.com/your-username/crm-customer-support.git
Navigate to the project directory:

bash
cd crm-customer-support
Open customer_support.html in a web browser to view the list of support tickets.

# Usage
Creating a Ticket: Click the Create Support Ticket button on the main page to open the ticket creation form. Fill in the customer details and issue, then submit.
Viewing a Ticket: Click the View button in the tickets list to open the detailed view for a specific ticket.
Resolving a Ticket: Click the Resolve button to mark the ticket as resolved (functionality can be extended by adding backend code).
Requirements
HTML5
Bootstrap 4.x (linked via CDN)
Optional: Backend for dynamic data handling (PHP, Python, Node.js, etc.)
Folder Structure
bash
Copy code
.
├── customer_support.html   # Main page to list and manage support tickets
├── view_ticket.html        # Page to view detailed information about a ticket
└── README.md               # Project documentation
Future Enhancements
Backend Integration: Connect the form submissions and ticket data to a backend system (e.g., PHP, Node.js, Python) to handle data persistence.
Ticket Filtering: Add the ability to filter tickets by status (open, closed, resolved).
Search Functionality: Allow users to search for tickets by customer name or issue.
License
This project is licensed under the MIT License. See the LICENSE file for details.

