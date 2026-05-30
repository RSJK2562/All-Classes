# Django CRUD Application

A simple Django CRUD application built with:

* Python
* Django
* HTML
* CSS
* Bootstrap
* MySQL
* Image Upload (Student Profile)

---

## Prerequisites

### 1. Install Python

Download and install Python:

https://www.python.org/downloads/

Verify installation:

```bash
python --version
```

---

## Django Installation

Install Django:

```bash
pip install Django
```

Verify installation:

```bash
pip freeze
```

or

```bash
python -m django --version
```

---

## IDE Setup

Install PyCharm and create a new project.

---

## Create Django Project

```bash
django-admin startproject app
```

or

```bash
python -m django startproject app
```

Navigate to project:

```bash
cd app
```

Run development server:

```bash
python manage.py runserver
```

Open:

```text
http://127.0.0.1:8000/
```

---

## Create Django App

```bash
python manage.py startapp webapp
```

---

## Register Application

Open:

```python
app/settings.py
```

Add app inside:

```python
INSTALLED_APPS = [
    ...
    'webapp',
]
```

---

## Templates Setup

Create templates folder:

```text
webapp/
│
├── templates/
│   ├── base.html
│   ├── index.html
│   ├── add_student.html
│   ├── edit_student.html
│   ├── add_student_profile.html
│   └── edit_student_profile.html
```

---

## URL Configuration

### Project URLs

```python
app/urls.py
```

Configure project routes.

### App URLs

```python
webapp/urls.py
```

Create application routes.

---

## Create Models

### Student Model

* Name
* Email
* DOB
* Gender
* Course
* Hobbies
* Address

### StudentProfile Model

* Student (ForeignKey)
* Profile Image
* Description
* Upload Date

---

## Database Migration

Create migration files:

```bash
python manage.py makemigrations
```

Apply migrations:

```bash
python manage.py migrate
```

---

## Create Super User

```bash
python manage.py createsuperuser
```

Run server:

```bash
python manage.py runserver
```

Admin Panel:

```text
http://127.0.0.1:8000/admin/
```

---

## Image Upload Support

### Install Pillow

```bash
pip install pillow
```

---

### Configure Media Files

#### settings.py

```python
MEDIA_URL = '/media/'
MEDIA_ROOT = BASE_DIR / 'media'
```

---

### Project URLs

```python
from django.conf import settings
from django.conf.urls.static import static
```

Add at the bottom:

```python
urlpatterns += static(
    settings.MEDIA_URL,
    document_root=settings.MEDIA_ROOT
)
```

---

## CRUD Features

### Student Module

* Create Student
* View Student List
* Edit Student
* Delete Student

### Student Profile Module

* Upload Profile Image
* View Profile
* Edit Profile
* Delete Profile

---

## Project Structure

```text
app/
│
├── app/
│
├── webapp/
│   ├── migrations/
│   ├── static/
│   │   ├── css/
│   │   ├── js/
│   │   └── images/
│   │
│   ├── templates/
│   │
│   ├── models.py
│   ├── views.py
│   ├── urls.py
│   └── admin.py
│
├── media/
├── manage.py
└── db.sqlite3
```

---

## Common Commands

Run Server:

```bash
python manage.py runserver
```

Create Migration:

```bash
python manage.py makemigrations
```

Apply Migration:

```bash
python manage.py migrate
```
<!-- Not use in this Project -->
Create Admin User:

```bash
python manage.py createsuperuser
```

Open Django Shell:

```bash
python manage.py shell
```

---

## Technologies Used

* Python
* Django
* Bootstrap 5
* HTML5
* CSS3
* MySQL
* Pillow

---

## Author

Created for learning Django CRUD operations with image upload functionality.
