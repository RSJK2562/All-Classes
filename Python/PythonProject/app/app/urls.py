"""
URL configuration for app project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/6.0/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""

from django.conf import settings
from django.conf.urls.static import static

from django.contrib import admin
from django.urls import path

from webapp import views

urlpatterns = [
    path('admin/', admin.site.urls),

    path('', views.index, name='index'),
    path('add-student/', views.add_student, name='add_student'),
    # EDIT STUDENT
    path('edit-student/<int:id>/',
         views.edit_student,
         name='edit_student'),
    # Delete Student
    path(
        'delete-student/<int:id>/',
        views.delete_student,
        name='delete_student'
    ),

# -------------------------------------------------------------------
    # Student Profile
    path('student-profile/', views.student_profile, name='student_profile'),

    path('add-student-profile/', views.add_student_profile, name='add_student_profile'),

    # EDIT STUDENT
    path(
        'edit-student-profile/<int:id>/',
        views.edit_student_profile,
        name='edit_student_profile'
    ),
    # Delete Student
    path(
        'delete-student-profile/<int:id>/',
        views.delete_student_profile,
        name='delete_student_profile'
    ),




]

urlpatterns += static(
    settings.MEDIA_URL,
    document_root=settings.MEDIA_ROOT
)
