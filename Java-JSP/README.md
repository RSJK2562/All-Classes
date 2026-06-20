# JAVA - JSP CRUD Application

## Project Setup Guide

### Step 1: Install JDK

Download and install Java JDK:

https://www.oracle.com/java/technologies/downloads/

Verify installation:

```bash
java -version
javac -version
```

---

### Step 2: Install Apache NetBeans

Download NetBeans IDE:

https://netbeans.apache.org/front/main/download/

Install and launch NetBeans.

---

### Step 3: Install Apache Tomcat

Download Apache Tomcat Server:

https://tomcat.apache.org/

Tomcat 10 Download:

https://tomcat.apache.org/download-10.cgi

Install Tomcat on your system.

---

### Step 4: Configure Tomcat in NetBeans

1. Open NetBeans
2. Go to **Services**
3. Right Click **Servers**
4. Click **Add Server**
5. Select **Apache Tomcat**
6. Browse Tomcat Installation Directory
7. Finish Setup

---

### Step 5: Create First Web Application

Create a new Maven Web Project:

```text
File
 └── New Project
      └── Java with Maven
           └── Web Application
```

Enter:

* Project Name
* Project Location
* Server: Apache Tomcat
* Java Version

Click **Finish**

---

### Step 6: Add MySQL Connector Dependency

Open `pom.xml` and add:

```xml
<dependency>
    <groupId>com.mysql</groupId>
    <artifactId>mysql-connector-j</artifactId>
    <version>9.3.0</version>
</dependency>
```

After adding dependency:

```text
Right Click Project
→ Clean and Build
```

---

# Project Modules

## Student Module

### 1. index.jsp

Display all student records.

**Features:**

* View Student List
* Edit Student
* Delete Student

---

### 2. addStudent.jsp

Student Registration Form.

**Fields:**

* Name
* Email
* Date of Birth
* Gender
* Course
* Hobbies
* Address

---

### 3. AddStudentServlet

Save student data into MySQL Database.

**Functions:**

* Receive form data
* Validate input
* Insert record into database
* Redirect to Student List

---

### 4. editStudent.jsp

Update existing student details.

**Functions:**

* Load student information
* Update student record

---

### 5. DeleteStudentServlet

Delete selected student record from database.

---

# Student Profile Module

This module manages student profile images and additional profile information.

---

### 1. studentProfile.jsp

Display all students with profile details.

**Features:**

* Student Name
* Profile Image
* Edit
* Delete

---

### 2. addStudentProfile.jsp

Add profile information for students.

**Functions:**

* Show student dropdown
* Upload profile image
* Save profile details

---

### 3. AddStudentProfileServlet

Create Servlet:

```text
Source Packages
 └── New
      └── Servlet
```

Servlet Name:

```text
AddStudentProfileServlet
```

**Functions:**

* Handle multipart form data
* Upload image
* Store image path in database
* Save profile details

---

### 4. editStudentProfile.jsp

Edit student profile information.

**Functions:**

* Update profile image
* Update description

---

### 5. UpdateStudentProfileServlet

Update profile data in database.

**Functions:**

* Update profile image
* Update profile information

---

### 6. DeleteStudentProfileServlet

Delete student profile data and image.

---

# Technologies Used

* Java
* JSP
* Servlet
* Maven
* Apache Tomcat 10
* MySQL
* JDBC
* HTML
* CSS
* Bootstrap

---

# Project Structure

```text
src
├── main
│   ├── java
│   │   ├── AddStudentProfileServlet.java (NewServlet.java)
│   │   ├── UpdateStudentProfileServlet.java
│   │
│   └── webapp
│       ├── index.jsp
│       ├── addStudent.jsp
│       ├── AddStudentServlet.jsp
│       ├── editStudent.jsp
│       ├── updateStudent.jsp
│       ├── deleteStudent.jsp
│       ├── studentProfile.jsp
│       ├── addStudentProfile.jsp
│       ├── editStudentProfile.jsp
│       ├── deleteStudentProfile.jsp
│       └── assets
│           ├── css
│           ├── js
│           └── uploads
│
└── pom.xml
```

---

# Database

Database Name:

```sql
jsp_curd_db
```

Tables:

```sql
students
student_profile
```

---

# Run Project

1. Start MySQL Server
2. Start Apache Tomcat
3. Clean and Build Project
4. Run Project

Application URL:

```text
http://localhost:8080/ProjectName/
```

---

## Author

**Gautam Technologies**

Java JSP CRUD Application with Student & Student Profile Management System.
