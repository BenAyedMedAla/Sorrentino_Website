# Sorrentino - Esthetic Products Website

## Overview

Sorrentino is a website built as part of a freelance project, showcasing a collection of esthetic products. The website is designed with a user-friendly interface and utilizes PHP, HTML, and Bootstrap to provide a responsive and interactive experience. The goal of the project is to offer a professional online presence for promoting and selling esthetic products.

## Features

- **Responsive Design**: The website is fully responsive, ensuring a seamless experience across all devices, thanks to Bootstrap.
- **Product Display**: Showcases a range of esthetic products with images, descriptions, and details.
- **Contact Form**: A simple contact form that allows customers to get in touch for inquiries or support.
- **PHP Backend**: Implements basic PHP functionality to handle form submissions and manage dynamic content.
- **Interactive UI**: Designed with Bootstrap to ensure a clean and modern user interface.
Set Up PHP Environment:
Ensure that you have a working PHP environment on your local machine or web server. You can use a local server like XAMPP, MAMP, or WAMP.

## Configure the Contact Form:
The contact form relies on PHP for handling submissions. Make sure that your PHP environment is correctly configured to send emails.

## Start the Server:
If using a local server like XAMPP, start Apache and navigate to the htdocs directory and copy the project files into a folder. Then, access the website at http://localhost/sorrentino.

Alternatively, if you are using a custom PHP setup, configure your server to serve the files from the project directory.

## Usage
Once the project is set up, navigate to the root directory in your browser to view the website. The main page will display a selection of esthetic products with links to individual product pages. The contact form will allow users to reach out for inquiries or product-related questions.

## Contact Form
The contact form allows users to submit their details and messages. This form is handled by PHP to process submissions and send emails. You can customize the form to fit your email handling system by editing the PHP script in contact.php.

## Customization
To customize the website, modify the following:

Products: The list of products can be updated in the index.php file, where each product is displayed.

Styling: The website uses Bootstrap for the layout and design. You can modify the styles in styles.css for customizations.

Contact Form: Customize the contact.php script to change the recipient email address or modify the form fields.

## Technologies Used
PHP: Used for backend logic and handling form submissions.

HTML: Provides the basic structure of the website.

Bootstrap: Utilized for responsive design and UI components.

CSS: For additional styling and customizations.

## Development
To run the website locally during development, you can use PHP's built-in server:

## bash
Copier
php -S localhost:8000
This command will start a local server, and you can view the website by visiting http://localhost:8000 in your browser.
