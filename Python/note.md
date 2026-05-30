<!-- Python -->

1. Install Python
   https://www.python.org/downloads/

2. Django install karo
   pip install Django
   Check:
   pip freeze
   python --version

3. PyCharm Install & Create Project

4. Create Projects
   django-admin startproject app | python -m django startproject app

   ENTER App:
   cd appfirst
   Run server:
   python manage.py runserver

5. App Create
   python manage.py startapp webapp
6. App Register
   app/settings.py
   `INSTALLED_APPS` me add karo:
   'webapp',

7. Templates Folder Setup
   app -> webapp

8. views.py
   setup

9. app -> urls.py
   PATH setup

10. Create Model

11. Migration Run
    python manage.py makemigrations
    python manage.py migrate

12. View Me Form Handle

13. Pillow Instal (ImageField ke liye)
    pip install pillow

14. Image Upload Setup
    settings.py
    MEDIA_URL = '/media/'
    MEDIA_ROOT = BASE_DIR / 'media'

15. Project urls.py
    from django.conf import settings
    from django.conf.urls.static import static

    Sabse niche:
    urlpatterns += static(
    settings.MEDIA_URL,
    document_root=settings.MEDIA_ROOT
    )
