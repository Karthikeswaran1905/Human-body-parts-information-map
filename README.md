# 🧍 Human Body Parts Information Map

## 📌 Project Description

The **Human Body Parts Information Map** is a web-based application developed to provide information about different parts of the human body.

The application allows users to explore various human body parts and learn about their **description, functions, importance, and interesting facts**. Each body part is stored in a MySQL database along with its related information.

This project provides an interactive and simple way to learn about the human body.

---

# 🚀 Features

* 🧍 Display different human body parts.
* 🫀 View information about the Heart.
* 🧠 View information about the Brain.
* 👁️ View information about the Eye.
* 🫁 View information about the Lungs.
* 🫀 View information about the Liver.
* 🫘 View information about the Kidney.
* 🥣 View information about the Stomach.
* 👂 View information about the Ear.
* 👃 View information about the Nose.
* 🧴 View information about the Skin.
* View detailed information for each body part.
* Display the function of each body part.
* Display the importance of each body part.
* Display interesting facts.
* Store body part information in a MySQL database.
* Simple and user-friendly interface.

---

# 🛠️ Technologies Used

## Frontend

* HTML
* CSS

## Backend

* PHP

## Database

* MySQL

## Server

* XAMPP / Apache

---

# 📂 Project Structure

```text
Human Body Parts Information Map/
│
├── index.php
├── display.php
├── db.php
├── style.css
│
└── images/
    ├── heart.jpg
    ├── brain.jpg
    ├── eye.jpg
    ├── lungs.jpg
    ├── liver.jpg
    ├── kidney.jpg
    └── other body part images
```

---

# 📄 File Description

## 1. index.php

This is the main page of the application.

It displays the available human body parts.

Users can select a body part to learn more information about it.

The body parts may include:

* Heart
* Brain
* Eye
* Lungs
* Liver
* Kidney
* Stomach
* Ear
* Nose
* Skin
* Intestines
* Pancreas

---

## 2. display.php

This page displays detailed information about a selected body part.

The information displayed includes:

* Body Part Name
* Image
* Description
* Function
* Importance
* Interesting Facts

The selected body part is retrieved from the MySQL database.

---

## 3. db.php

The `db.php` file is responsible for connecting the application to the MySQL database.

Example database connection:

```php
$conn = new mysqli(
    "localhost",
    "root",
    "",
    "bodyparts"
);
```

---

## 4. style.css

This file contains the styling of the application.

It controls:

* Page layout
* Colors
* Fonts
* Body part cards
* Images
* Buttons
* Information sections

---

# 🗄️ Database Setup

Create a MySQL database named:

```text
bodyparts
```

Use the following SQL code:

```sql
CREATE DATABASE bodyparts;

USE bodyparts;

CREATE TABLE parts (

    id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(100) NOT NULL,

    image VARCHAR(255) NOT NULL,

    description TEXT NOT NULL,

    function_desc TEXT,

    importance_desc TEXT,

    did_you_know TEXT

);
```

---

# 📊 Database Table

The project uses a table named:

```text
parts
```

The table contains the following fields:

| Field           | Description                  |
| --------------- | ---------------------------- |
| id              | Unique ID for each body part |
| name            | Name of the body part        |
| image           | Image path                   |
| description     | General description          |
| function_desc   | Function of the body part    |
| importance_desc | Importance of the body part  |
| did_you_know    | Interesting fact             |

---

# ⚙️ Installation and Setup

## Step 1: Install XAMPP

Install XAMPP on your computer.

XAMPP provides:

* Apache Server
* PHP
* MySQL
* phpMyAdmin

---

## Step 2: Extract the Project

Extract the project ZIP file.

Copy the project folder into the XAMPP `htdocs` folder.

Example:

```text
C:\xampp\htdocs\bodyparts
```

---

## Step 3: Start XAMPP

Open the XAMPP Control Panel.

Start the following services:

```text
Apache

MySQL
```

---

## Step 4: Create the Database

Open phpMyAdmin.

Create a database named:

```text
bodyparts
```

Create the `parts` table using the SQL code provided above.

---

## Step 5: Configure Database Connection

Open the `db.php` file.

Make sure the database details are correct.

```php
$host = "localhost";
$username = "root";
$password = "";
$database = "bodyparts";
```

---

# ▶️ Running the Application

Open your web browser and enter:

```text
http://localhost/bodyparts/
```

The Human Body Parts Information Map application will open.

---

# 🔄 Working Flow

```text
User
  │
  ▼
Open Website
  │
  ▼
View Human Body Parts
  │
  ▼
Select a Body Part
  │
  ▼
PHP Receives Body Part ID
  │
  ▼
Retrieve Information
from MySQL Database
  │
  ▼
Display Body Part Information
```

---

# 🧍 Body Parts Included

## 🧠 Brain

The brain controls the activities of the human body.

It is responsible for:

* Thinking
* Memory
* Movement
* Emotions

---

## 🫀 Heart

The heart pumps blood throughout the body.

Its main function is to supply oxygen and nutrients to different organs.

---

## 🫁 Lungs

The lungs help the body breathe.

They take oxygen from the air and remove carbon dioxide from the body.

---

## 👁️ Eye

The eye is responsible for vision.

It helps humans see objects, colors, and movement.

---

## 🫀 Liver

The liver performs several important functions.

These include:

* Processing nutrients
* Removing toxins
* Producing important proteins

---

## 🫘 Kidney

The kidneys filter waste products from the blood.

They also help maintain the balance of water and minerals in the body.

---

## 🥣 Stomach

The stomach helps digest food.

It breaks down food using digestive acids and enzymes.

---

## 👂 Ear

The ear helps humans hear sounds.

It also helps maintain balance.

---

## 👃 Nose

The nose helps humans smell and breathe.

It filters air before it enters the lungs.

---

## 🧴 Skin

The skin protects the body from:

* Germs
* Injury
* Heat
* Harmful substances

---

# 🎯 Project Objective

The main objective of this project is to provide a simple and interactive system for learning about human body parts.

The project demonstrates:

* PHP programming.
* MySQL database connectivity.
* Dynamic data retrieval.
* Web development.
* Database management.
* HTML and CSS design.
* Educational information systems.

---

# 💡 Working Principle

The application works using the following process:

1. The user opens the website.
2. The main page displays different body parts.
3. The user selects a body part.
4. The selected body part ID is sent to the PHP application.
5. PHP retrieves the information from the MySQL database.
6. The application displays the detailed information.
7. The user can explore other body parts.

---

# 📋 Requirements

The following software is required:

* XAMPP
* PHP
* MySQL
* Apache Server
* Web Browser

Recommended browsers:

* Google Chrome
* Microsoft Edge
* Mozilla Firefox

---

# 🔮 Future Enhancements

The following features can be added in future versions:

* 🔍 Search for body parts.
* 🧍 Interactive human body diagram.
* 🎨 Improved user interface.
* 📱 Mobile responsive design.
* 🔊 Audio explanation.
* 🎥 Educational videos.
* 🧠 Quiz about human body parts.
* ⭐ Bookmark favorite body parts.
* 🌐 Multiple language support.
* 🤖 AI-based educational assistant.
* 📊 3D human body visualization.

---

# 👨‍💻 Conclusion

The **Human Body Parts Information Map** is a simple educational web application developed using **PHP and MySQL**.

The application provides useful information about different human body parts, including their descriptions, functions, importance, and interesting facts.

This project demonstrates the integration of **HTML, CSS, PHP, and MySQL** to create a simple database-driven educational web application.
